<header class="main-header">
    <h3><span class="green">Groene</span><span class="blue">Vingers</span></h3>

    <nav class="main-navigation">
        <a class="nav-item" href="{{route('homepage.index')}}">Home</a>
        <a class="nav-item" href="{{route('shop.index')}}">{{ GoogleTranslate::trans('Products', app()->getLocale()) }}</a>
        <a class="nav-item" href="{{route('contact.index')}}">{{ GoogleTranslate::trans('Contact', app()->getLocale()) }}</a>
        <a class="nav-item" href="{{route('dashboard')}}">{{ GoogleTranslate::trans('Dashboard', app()->getLocale()) }}</a>
        <a class="nav-item" href="{{route('pdf.index')}}">{{ GoogleTranslate::trans('PDF', app()->getLocale()) }}</a>
        <a class="nav-item" href="{{ route('cart.index') }}">
            <div class="cart-icon-container">
                <img class="cart-icon" width="30px" src="{{ url('assets/icons/cart.png') }}" alt="Winkelwagen">
                <div id="cart-counter" class="cart-counter">0</div>
            </div>
        </a>
    </nav>
</header>
