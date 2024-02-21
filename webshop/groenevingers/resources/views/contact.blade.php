<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Neem contact met ons op - GroeneVingers</title>
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.svg') }}" type="image/x-icon">
    <script src="{{ url('javascript/script.js') }}"></script>
    <link rel="stylesheet" href="{{ url('css/contact.css') }}">
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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.275819298719!2d5.550394242465561!3d51.45309215731677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c72744b7e91a4f%3A0xe5cddb3ed1c7f4e4!2sCollse%20Hoefdijk%207%2C%205674%20VL%20Nuenen!5e0!3m2!1snl!2snl!4v1708429647609!5m2!1snl!2snl" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>
        </div>
        <div class="information-section">
            <div class="contact-information">
                <p>
                    RajHogewoning@groenevingersshop.com<br>
                    info@groenevingersshop.com<br>
                    06-33024999<br>
                    Tuinstraat 167<br>
                    2587 WD Nuenen
                </p>
            </div>

            <div class="picture">
                <img src="{{ url('assets/images/GroenePand.jpg') }}" alt="locatie" />
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>