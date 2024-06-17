using System;
using System.Collections.ObjectModel;
using System.ComponentModel;
using System.Data.SqlClient;
using System.Runtime.CompilerServices;
using System.Windows;
using System.Windows.Input;

namespace Wpf_groenen_vingers
{
    public class Plant
    {
        public string Name { get; set; }
        public string Color { get; set; }
        public decimal Price { get; set; }
    }

    public class RelayCommand : ICommand
    {
        private readonly Action<object> _execute;
        private readonly Predicate<object> _canExecute;

        public RelayCommand(Action<object> execute, Predicate<object> canExecute = null)
        {
            _execute = execute ?? throw new ArgumentNullException(nameof(execute));
            _canExecute = canExecute;
        }

        public bool CanExecute(object parameter)
        {
            return _canExecute == null || _canExecute(parameter);
        }

        public void Execute(object parameter)
        {
            _execute(parameter);
        }

        public event EventHandler CanExecuteChanged
        {
            add { CommandManager.RequerySuggested += value; }
            remove { CommandManager.RequerySuggested -= value; }
        }
    }

    public class MainViewModel : INotifyPropertyChanged
    {
        private ObservableCollection<Plant> _plants;
        public ObservableCollection<Plant> Plants
        {
            get { return _plants; }
            set
            {
                _plants = value;
                OnPropertyChanged();
            }
        }

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

        private int _quantity;
        public int Quantity
        {
            get { return _quantity; }
            set
            {
                _quantity = value;
                OnPropertyChanged(nameof(Quantity));
                OnPropertyChanged(nameof(TotalAmount));
            }
        }

        public decimal TotalAmount => SelectedPlant?.Price * Quantity ?? 0;

        public ICommand UpdateCommand { get; private set; }
        public ICommand AddPlantCommand { get; private set; }
        public ICommand PayCommand { get; private set; }

        public MainViewModel()
        {
            Plants = new ObservableCollection<Plant>();

            // Load data from the database
            LoadPlantsFromDatabase();

            UpdateCommand = new RelayCommand(UpdatePlant);
            AddPlantCommand = new RelayCommand(AddPlant);
            PayCommand = new RelayCommand(Pay, CanPay);
        }

        private void LoadPlantsFromDatabase()
        {
            string connectionString = "YourConnectionString"; // Replace with actual connection string
            string query = "SELECT name, color, price FROM products"; // Query to get data from the database

            try
            {
                using (SqlConnection connection = new SqlConnection(connectionString))
                {
                    connection.Open();
                    SqlCommand command = new SqlCommand(query, connection);
                    SqlDataReader reader = command.ExecuteReader();

                    while (reader.Read())
                    {
                        Plants.Add(new Plant
                        {
                            Name = reader["name"].ToString(),
                            Color = reader["color"].ToString(),
                            Price = Convert.ToDecimal(reader["price"])
                        });
                    }

                    reader.Close();
                }
            }
            catch (Exception ex)
            {
                MessageBox.Show("An error occurred while fetching data from the database: " + ex.Message);
            }
        }

        private void UpdatePlant(object obj)
        {
            // Implement update logic here
            MessageBox.Show($"Updating {SelectedPlant.Name}");
        }

        private void AddPlant(object obj)
        {
            // Implement add plant logic here
            MessageBox.Show("Adding new plant");
        }

        private bool CanPay(object obj)
        {
            return SelectedPlant != null && Quantity > 0;
        }

        private void Pay(object obj)
        {
            // Implement payment logic here, e.g., generating a receipt
            MessageBox.Show($"Plant: {SelectedPlant.Name}\nQuantity: {Quantity}\nTotal Amount: {TotalAmount:C}");
        }

        public event PropertyChangedEventHandler PropertyChanged;
        protected virtual void OnPropertyChanged([CallerMemberName] string propertyName = null)
        {
            PropertyChanged?.Invoke(this, new PropertyChangedEventArgs(propertyName));
        }
    }
}
