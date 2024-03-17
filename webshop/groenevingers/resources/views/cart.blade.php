<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.svg') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ url('css/includes/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('includes.header')
    <div class="wrapper">
        <div class="products-section">
            <h3 class="products-section-title">Winkelwagen</h3>
            <div class="products-wrapper" id="productTable">
                <div class="product">
                    <h4>Plantenbak</h4>
                    <p>Prijs: €20</p>
                    <button class="addToCartButton" onclick="addToCart()">Toevoegen</button>
                    <button class="deleteFromCartButton" onclick="deleteFromCart()">Verwijder uit winkelwagen</button>
                </div>
                <div class="product">
                    <h4>Tuin Handschoenen</h4>
                    <p>Prijs: €10</p>
                    <button class="addToCartButton" onclick="addToCart()">Toevoegen</button>
                    <button class="deleteFromCartButton" onclick="deleteFromCart()">Verwijder uit winkelwagen</button>
                </div>
                <div class="product">
                    <h4>Gietkan</h4>
                    <p>Prijs: €15</p>
                    <button class="addToCartButton" onclick="addToCart()">Toevoegen</button>
                    <button class="deleteFromCartButton" onclick="deleteFromCart()">Verwijder uit winkelwagen</button>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')

    <script>
        let cartCounter = 0;

        function updateCartCounter() {
            document.getElementById("cart-counter").innerText = cartCounter;
        }

        function addToCart() {
            cartCounter++;
            updateCartCounter();
        }

        function deleteFromCart() {
            if (cartCounter > 0) {
                cartCounter--;
                updateCartCounter();
            }
        }
    </script>
</body>
</html>
