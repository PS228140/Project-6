<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.svg') }}" type="image/x-icon">
    <script src="{{ url('javascript/cart.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/includes/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" href="{{ url('css/cart.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('includes.header')
    <div class="wrapper">
        <div class="product_cart-wrapper" id="productTable">
        <h2 class="green">Winkelwagen</h2>
            <div class="product_cart">
                <img src="{{ url('assets/icons/plant.png') }}" alt="ProductImg">
                <h4>Plantenbak</h4>
                <div class="quantity">
                    <button class="minus">-</button>
                    <input type="text" class="qty" value="1">
                    <button class="plus">+</button>
                </div>
                <p>€20</p>
            </div>
            <div class="product_cart">
            <img src="{{ url('assets/icons/plant.png') }}" alt="ProductImg">
                <h4>Tuin Handschoenen</h4>
                <div class="quantity">
                    <button class="minus">-</button>
                    <input type="text" class="qty" value="1">
                    <button class="plus">+</button>
                </div>
                <p>€10</p>
            </div>
            <div class="product_cart">
                <img src="{{ url('assets/icons/plant.png') }}" alt="ProductImg">
                <h4>Gietkan</h4>
                <div class="quantity">
                    <button class="minus">-</button>
                    <input type="text" class="qty" value="1">
                    <button class="plus">+</button>
                </div>
                <p> €15</p>
            </div>
        </div>

        <div class="cart-summary">
        <div class="summary-card">
            <h3>Totaal</h3>
            <!-- Voeg hier de totaalprijs en andere samenvattende informatie toe -->
        </div>
    </div>


    </div>
    @include('includes.footer')
</body>
</html>
