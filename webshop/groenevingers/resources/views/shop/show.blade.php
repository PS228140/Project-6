<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->name }} - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.svg') }}" type="image/x-icon">
    <script src="{{ url('javascript/script.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/product-info.css') }}">
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
        <section class="product-info-section">
            <h2 class="product-name">{{ $product->name }}</h2>
            <span class="product-categorie">{{ $product->categorie->name }}</span>

            <div class="product-info-row">
                <div class="product-image-wrapper">
                    <img class="product-image" src="{{ asset($product->img_src) }}"/>
                </div>
                <div class="product-info-action">
                    <span class="product-price">€ {{ $product->price }}</span>

                    <div class="paragraph">
                        <span class="indicator">Alleen Online</span>
                        <p>Alleen online verkrijgbaar, niet in de winkel.</p>
                    </div>

                    <button class="order-btn">In winkelwagen</button>
                </div>
            </div>
        </section>

        <section class="product-details-section">
            <h3 class="product-details-header">Details</h3>
            
            <div class="description-wrapper">
                <h4 class="subject-header">Beschrijving</h4>
                <p class="description-paragraph">{{ $product->description }}</p>
            </div>
            
            <div class="specifications-wrapper">
                <h4 class="subject-header">Specificaties</h4>
                <span class="height">Hoogte (cm): {{ $product->height_cm }}</span>
                <span>Breedte (cm): {{ $product->width_cm }}</span>
                <span>Diepte (cm): {{ $product->depth_cm }}</span>
                <span>Gewicht (gr): {{ $product->weight_gr }}</span>
                <span>Kleur: {{ $product->color }}</span>
            </div>
        </section>
    </div>
    @include('includes.footer')
</body>

</html>
