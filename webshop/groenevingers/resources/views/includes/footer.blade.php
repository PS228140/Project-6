<footer class="main-footer">
    <div class="footer-column">
        <div class="contact-list">
            <h5>{{ GoogleTranslate::trans('Contactgegevens', app()->getLocale()) }}</h5>
            <div class="contact-information">
<<<<<<< Updated upstream
                <span class="phone">06-12345678</span>
                <span>Teststraat 5</span>
                <span>4444 KA Nuenen</span>
=======
                <span>06-33024999</span>
                <span>Tuinstraat 167</span>
                <span>2587 WD  Nuenen</span>
>>>>>>> Stashed changes
            </div>

            @include('includes/lang')
            
            <span class="copyright">© 2024 GroeneVingers</span>
        </div>

        <div class="socials-list">
<<<<<<< Updated upstream
            <h5>{{ GoogleTranslate::trans('Socials', app()->getLocale()) }}</h5>
            <a href="https://www.instagram.com/groenevingersgv/">Instagram</span>
=======
            <h5>Socials</h5>
            <a href="https://www.instagram.com/groenevingersgv/"><img src="{{ url('assets/images/instagram.png') }}" alt="instagram" /></span>
>>>>>>> Stashed changes
        </div>
    </div>

    <div class="footer-column">
        <img src="{{ url('assets/images/Logo.png') }}" alt="logo" />
    </div>
</footer>