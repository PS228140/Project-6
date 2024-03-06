<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <style>
        body {
            margin: 20px;
        }
        h1 {
            text-align: left;
        }
        img {
            float: right;
            margin-top: -50px;
        }
        p {
            clear: both;
        }
    </style>
</head>
<body>
    <h1>{{ $title }}</h1>
    
    <img src="{{ $logo }}" alt="Logo" width="100" height="100">

    <p>Date: {{ $date }}</p>

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint officiis dolores quae tenetur tempore iusto, accusantium cupiditate nesciunt corporis, repudiandae similique facere ipsum doloremque vero exercitationem! Fugit error autem deleniti!
    </p>
</body>
</html>
