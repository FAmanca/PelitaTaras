<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelitaTaras | {{ $title }}</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Referensi ke CSS Vanilla -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navcolor">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <h4 class="h">PelitaTaras</h4>
            </a>
            <div class="" id="">
                <div class="navbar-nav">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                            @auth

                            @else
                                <a href="{{ route('login') }}" class="authreg navlink ms-auto">Login</a>

                                <a href="" class="garis">|</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="authreg navlink">Register</a>
                                @endif

                            @endauth
                    @endif
                </div>
            </div>
        </div>
    </nav>
    <div class="hero">
        <div class="container">
            <h1 class="title">PELITA TARAS</h1>
            <p class="description">Peduli Lindungi Kesehatan Mental Sebelas.</p>
        </div>
    </div>
    <div class="about">
        <div class="container">
            <h2 class="subtitle">Tentang PelitaTaras</h2>
            <p class="description">PELITA TARAS merupakan program kepedulan untuk menjaga Kesehatan mental
                remaja
                baik
                secara lahir maupun batin melalui edukasi pentingnya Kesehatan mental bagi tumbuh kembang remaja
                serta
                upaya deteksi dini gangguan Kesehatan mental pada seluruh siswa dan siswi di SMKN 11 Bandung
                dengan
                menggunakan Self Reporting Questionnaire (SRQ-29)</p>
        </div>
    </div>
    </div>


    <div class="container mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>

                </div>
            </div>
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                </div>
            </div>
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Card Title 1</h3>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
