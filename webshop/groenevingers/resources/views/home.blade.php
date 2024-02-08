<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom bij GroeneVingers! - GroeneVingers</title>
    <script src="{{ url('javascript/script.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>

<body>
    @include('includes.header')
    <div class="wrapper">
        <div class="hero-section">
            <h1 class="disclaimer">Deze website/webshop is binnenkort beschikbaar</h1>
            <img class="background-image" src="{{ url('assets/images/Tuinplanten.png') }}" alt="background image" />
        </div>

        <div class="products-section">
            @foreach ($products as $product)
            <div class="product-wrapper">
                <h4>{{$product->name}}</h4>
                <span>{{$product->price}}</span>
                <span>{{$product->categorie->name}}</span>
                <img src="assets/images/products/pannenkoekenplant.webp">
            </div>
            @endforeach
        </div>
    </div>
    @include('includes.footer')
</body>

</html>