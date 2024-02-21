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

<body>
    @include('includes.header')
    <div class="wrapper">
        <div class="products-section">
            <h3 class="products-section-title">Onze producten</h3>
            <div class="products-wrapper" id="producttable">  
            </div>
        </div>
    </div>
    @include('includes.footer')
</body>

</html>

<script>
    fetch('https://kuin.summaict.nl/api/product', {
        headers: {Authorization: 'Bearer 50|Oy8mM3g2A8jSTpiHoxrRXXdspGlvQHbbQ45qM272'}
    })
        .then(resp => resp.json())
        .then(respData => {
            
            let display = respData;
            let name = [];
            let description = [];
            let price = [];
            let image = [];

            console.log(display);

            display.forEach((id) => { name.push(id.name); });
            display.forEach((id) => { description.push(id.description); });
            display.forEach((id) => { price.push(id.price); });
            display.forEach((id) => { image.push(id.image); });

            let table_body = document.getElementById("producttable");

            let current_page = "3";
            let limit_count = (Number(current_page) * 50);

            for(i=(Number(limit_count) - 50);i<=limit_count;i++){
                var row = `<div class="product-wrapper">
                    <img src="`+image[i]+`">
                    <div class="product-information">
                        <span class="product-name">`+name[i]+`</span>
                        <span class="product-price">`+price[i]+`</span>
                        <span class="product-categorie">`+description[i]+`</span>
                    </div>
                </div>`
                table_body.innerHTML += row;
            }
            
        })
</script>