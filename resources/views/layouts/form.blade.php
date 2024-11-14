<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])


    <style>
        .form-card {
            height: 100vh;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-card .card {
            width: 30rem;
        }

    </style>
</head>

<body>
    @yield('form-content')
</body>

</html>
