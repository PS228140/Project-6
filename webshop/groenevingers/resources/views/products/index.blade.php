<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producten - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.svg') }}" type="image/x-icon">
    <script src="{{ url('javascript/script.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/products.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/footer.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>

<body onload="fetchAllProducts(1)">
    @include('includes.header')
    <div class="wrapper">
        <div class="products-section">
            <h3 class="products-section-title">{{ GoogleTranslate::trans('Onze producten', app()->getLocale()) }}</h3>
            <div class="products-wrapper" id="producttable">
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>

<script src="{{ url('javascript/database/products/fetchAll.js') }}"></script>  