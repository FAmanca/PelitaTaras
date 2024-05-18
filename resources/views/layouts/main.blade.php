<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/side.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>PelitaTaras | {{ $title }}</title>
</head>

<body>
    @include('partials.sidebar')

    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu'></i>
            <span class="text">PelitaTaras</span>
        </div>
        <div class="container mb-4">
            @yield('container')
        </div>
    </section>

    <script src="js/script.js"></script>
</body>

</html>
