@php
    use App\Models\Product;
    use App\Models\Categorie;
@endphp

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Je bestelling - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/icons/favicon.svg') }}" type="image/x-icon">
    <script src="{{ url('javascript/script.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/includes/reset.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/header.css') }}">
    <link rel="stylesheet" href="{{ url('css/includes/footer.css') }}">
    <link rel="stylesheet" href="{{ url('css/status.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
</head>

<body>
    @include('includes.header')
    <div class="wrapper">
        <h2 class="title">Je bestelling</h2>
        <div class="order-insights">
            <div class="order-overview">
                <div class="order-overview-header">
                    <p>Bestelling</p>
                    <span
                        class="order-status
                        @if ($order->state->name === 'Ontvangen') received
                        @elseif ($order->state->name === 'Betaald')
                            payed
                        @elseif ($order->state->name === 'Verwerkt')
                            processed
                        @elseif ($order->state->name === 'Verzonden')
                            send
                        @elseif ($order->state->name === 'Afgeleverd')
                            delivered
                        @elseif ($order->state->name === 'Geannuleerd')
                            cancelled @endif
                    ">{{ $order->state->name }}</span>
                </div>

                <div class="order-overview-body">
                    @foreach ($order->orderrow as $orderrow)
                        @php
                            $product = Product::getProduct($orderrow->product_id);
                            $category = Categorie::getCategorie($product['categorie_id']);
                        @endphp

                        <div class="order-item">
                            <div class="item-information">
                                <img class="product-image" src="{{ $product->img_src }}" alt="product image" />
                                <div class="product-information">
                                    <span class="product-name">{{ $product['name'] }}</span>
                                    <span class="product-category">{{ $category['name'] }}</span>
                                </div>
                            </div>
                            <span class="quantity">{{ $orderrow->quantity }}x</span>
                            <span class="price">€{{ number_format($orderrow->price, 2, ',') }}</span>
                        </div>
                    @endforeach
                </div>

                <div class="order-overview-footer">
                    <strong>Totaal</strong>
                    <strong>€{{ number_format($order->price, 2, ',') }}</strong>
                </div>
            </div>

            <div class="order-information">
                <div class="order-information-header">
                    <p>Je gegevens</p>
                </div>

                <div class="order-information-body">
                    <div class="customer-information">
                        <span>{{ $order->customer_name }}</span>
                        <span>{{ $order->email }}</span>
                        <span>{{ $order->phone }}</span>
                    </div>

                    <h6 class="address-information-header">Adresgegevens</h6>
                    <div class="address-information">
                        <span>{{ $order->address }}</span>
                        <span>{{ $order->city }}, {{ $order->zipcode }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>
