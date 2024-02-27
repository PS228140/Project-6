<footer class="main-footer">
    <div class="footer-column">
        <div class="contact-list">
            <h5>{{ GoogleTranslate::trans('Contactgegevens', app()->getLocale()) }}</h5>
            <div class="contact-information">
                <span class="phone">06-12345678</span>
                <span>Teststraat 5</span>
                <span>4444 KA Nuenen</span>
            </div>

            @include('includes/lang')
            
            <span class="copyright">© 2024 GroeneVingers</span>
        </div>

        <div class="socials-list">
            <h5>{{ GoogleTranslate::trans('Socials', app()->getLocale()) }}</h5>
            <a href="https://www.instagram.com/groenevingersgv/">Instagram</span>
        </div>
    </div>

    <div class="footer-column">
        <img src="{{ url('assets/images/Logo.png') }}" alt="logo" />
    </div>
</footer>