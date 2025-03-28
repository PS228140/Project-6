using System;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Configuration;
using System.Linq;
using System.Runtime.CompilerServices;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Input;
using MySql.Data.MySqlClient;
using IronBarCode;
using QuestPDF.Fluent;
using QuestPDF.Helpers;
using QuestPDF.Infrastructure;

namespace Wpf_groenen_vingers
{
    public partial class MainWindow : Window
    {
        public MainWindow()
        {
            InitializeComponent();
            DataContext = new MainViewModel();
        }

        private void ListView_MouseDoubleClick(object sender, MouseButtonEventArgs e)
        {
            var selectedPlant = (sender as ListView)?.SelectedItem as Plant;
            if (selectedPlant != null)
            {
                MessageBoxResult result = MessageBox.Show($"Wilt u {selectedPlant.Name} toevoegen aan uw bestelling?", "Bevestiging", MessageBoxButton.YesNo, MessageBoxImage.Question);
                if (result == MessageBoxResult.Yes)
                {
                    ((MainViewModel)DataContext).AddToOrder(selectedPlant);
                }
            }
        }

        private void GeneratePDF_Click(object sender, RoutedEventArgs e)
        {
            try
            {
                ((MainViewModel)DataContext).GenerateBarcode();
                ((MainViewModel)DataContext).GeneratePDF();
                MessageBox.Show("Barcode en PDF zijn succesvol gegenereerd en opgeslagen!", "Succes", MessageBoxButton.OK, MessageBoxImage.Information);
            }
            catch (Exception ex)
            {
                MessageBox.Show($"Er is een fout opgetreden: {ex.Message}", "Fout", MessageBoxButton.OK, MessageBoxImage.Error);
            }
        }
    }

    public class Plant
    {
        public string Name { get; set; }
        public decimal Price { get; set; }
        public string Supply { get; set; }

        public override string ToString()
        {
            return $"{Name} - €{Price:F2} - {Supply}";
        }
    }

    public class OrderItem
    {
        public Plant Plant { get; set; }
        public int Quantity { get; set; }

        public override string ToString()
        {
            return $"{Plant.Name} ({Quantity})";
        }
    }

    public class MainViewModel : INotifyPropertyChanged
    {
        public ObservableCollection<Plant> Plants { get; set; }
        public ObservableCollection<OrderItem> OrderList { get; set; }
        private Plant _selectedPlant;
        public Plant SelectedPlant
        {
            get { return _selectedPlant; }
            set
            {
                _selectedPlant = value;
                OnPropertyChanged();
            }
        }

        public MainViewModel()
        {
            Plants = new ObservableCollection<Plant>();
            OrderList = new ObservableCollection<OrderItem>();
            LoadPlantsFromDatabase();
        }

        public void AddToOrder(Plant plant)
        {
            var existingOrderItem = OrderList.FirstOrDefault(item => item.Plant.Name == plant.Name);
            if (existingOrderItem != null)
            {
                existingOrderItem.Quantity++;
            }
            else
            {
                OrderList.Add(new OrderItem { Plant = plant, Quantity = 1 });
            }

            OnPropertyChanged(nameof(OrderList));
        }

        private void LoadPlantsFromDatabase()
        {
            string connectionString = "Server=localhost;Port=3306;Database=project_6;Username=root;Password=;";

            if (string.IsNullOrEmpty(connectionString))
            {
                MessageBox.Show("Verbindingsreeks is niet ingesteld in App.config.");
                return;
            }

            string query = "SELECT name, price, supply FROM products";

            try
            {
                using (MySqlConnection connection = new MySqlConnection(connectionString))
                {
                    connection.Open();
                    MySqlCommand command = new MySqlCommand(query, connection);
                    MySqlDataReader reader = command.ExecuteReader();

                    while (reader.Read())
                    {
                        Plants.Add(new Plant
                        {
                            Name = reader["name"].ToString(),
                            Price = Convert.ToDecimal(reader["price"]),
                            Supply = reader["supply"].ToString()
                        });
                    }

                    reader.Close();
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("Er is een fout opgetreden bij het ophalen van gegevens uit de database: " + ex.Message);
            }
        }

        public void GenerateBarcode()
        {
            string barcodeContent = string.Join(", ", OrderList);
            GeneratedBarcode barcode = BarcodeWriter.CreateBarcode(barcodeContent, BarcodeWriterEncoding.Code128);

            // Aanpassing: Schaal de barcode afbeelding voordat deze wordt opgeslagen
            barcode.ResizeTo(200, 50); // 200 pixels breed, 50 pixels hoog
            barcode.SaveAsPng("C:/Users/feie/OneDrive/Desktop/orderBarcode.png");
        }

        public void GeneratePDF()
        {
            QuestPDF.Settings.License = LicenseType.Community;

            Document.Create(container =>
            {
                container.Page(page =>
                {
                    page.Margin(2, Unit.Centimetre);

                    page.Header()
                        .AlignCenter()
                        .Text("Bestelling")
                        .SemiBold().FontSize(36).FontColor(Colors.Blue.Medium);

                    page.Content()
                        .PaddingVertical(1, Unit.Centimetre)
                        .Column(x =>
                        {
                            x.Spacing(20);

                            foreach (var orderItem in OrderList)
                            {
                                x.Item().AlignCenter().Text($"{orderItem.Plant.Name} - €{orderItem.Plant.Price:F2} - Hoeveelheid: {orderItem.Quantity}");
                            }

                            decimal totalPrice = OrderList.Sum(item => item.Plant.Price * item.Quantity);
                            x.Item().AlignCenter().Text($"Totaalprijs: €{totalPrice:F2}")
                                .SemiBold().FontSize(24).FontColor(Colors.Black);

                            x.Item().AlignCenter().Image("C:/Users/feie/OneDrive/Desktop/orderBarcode.png");
                        });

                    page.Footer()
                        .AlignCenter()
                        .Text(x =>
                        {
                            x.Span("Pagina ");
                            x.CurrentPageNumber();
                        });
                });
            })
            .GeneratePdf("C:/Users/feie/OneDrive/Desktop/bestelling.pdf");
        }

        public event PropertyChangedEventHandler PropertyChanged;
        protected virtual void OnPropertyChanged([CallerMemberName] string propertyName = null)
        {
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(propertyName));
        }
    }
}
