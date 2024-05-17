@php
    use App\Models\Product;
@endphp

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winkelwagen - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.svg') }}" type="image/x-icon">
    <script src="{{ url('javascript/script.js') }}"></script>
    <script src="{{ url('javascript/cart.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/includes/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/cart.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>
<body>
    @include('includes.header')
    <div class="wrapper">
        <h2 class="title">Winkelwagen</h2>
        @if ($order)
            <div class="order-overview">
                @foreach ($order->orderrow as $orderrow)
                    @php
                        $product = Product::getProduct($orderrow->product_id);
                    @endphp

                    <div class="product-wrapper">
                        <img class="product-image" src="{{ $product["img_src"] }}" alt="" />
                        <span>{{ $product["name"] }}</span> 
                        <span>{{ $orderrow->quantity }}x</span>
                        <span>€ {{ number_format($orderrow->price, 2, ',') }}</span>
                    </div>
                @endforeach
            </div>

            <div class="order-totals">
                <button class="back-btn" onclick="location.href='{{ route('shop.index') }}'">Verder winkelen</button>
                <h6>Totaal: € {{ number_format($order->price, 2, ',') }}</h6>
            </div>
        @elseif ($order === null)
            <div class="empty">
                <p>Uw winkelwagen is momenteel leeg</p>
                <img class="empty-image" src="{{ url('assets/icons/empty-cart.svg') }}"/>
            </div>
        @endif
        </div>
    @include('includes.footer')
</body>
</html>
