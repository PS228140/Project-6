<footer class="main-footer">
    <div class="footer-column">
        <div class="contact-list">
            <h5>{{ GoogleTranslate::trans('Contactgegevens', app()->getLocale()) }}</h5>
            <div class="contact-information">
                <span class="phone">06-33024999</span>
                <span class="location">Tuinstraat 167</span>
                <span class="zipcode">2587 WD  Nuenen</span>
            </div>

            @include('includes/lang')
            
            <span class="copyright">© 2024 GroeneVingers</span>
        </div>

        <div class="socials-list">
            <h5>{{ GoogleTranslate::trans('Socials', app()->getLocale()) }}</h5>
            <a href="https://www.instagram.com/groenevingersgv/"><img src="{{ url('assets/images/instagram.png') }}" alt="instagram" /></span>
        </div>
    </div>

    <div class="footer-column">
        <img src="{{ url('assets/images/Logo.png') }}" alt="logo" />
    </div>
</footer>