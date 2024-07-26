<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelitaTaras | {{ $title }}</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Referensi ke CSS Vanilla -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- jQuery -->
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
                            <!-- Content for authenticated users -->
                            @else
                                <a href="{{ route('login') }}" class="authreg navlink ms-auto">Login</a>
                                <a href="" class="garis">|</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="authreg navlink">Register</a>
                                @endif
                            @endauth
                        </div>
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
            <p class="description">PELITA TARAS merupakan program kepedulian untuk menjaga Kesehatan mental
                remaja baik
                secara lahir maupun batin melalui edukasi pentingnya Kesehatan mental bagi tumbuh kembang remaja
                serta
                upaya deteksi dini gangguan Kesehatan mental pada seluruh siswa dan siswi di SMKN 11 Bandung
                dengan
                menggunakan Self Reporting Questionnaire (SRQ-29) </p>
        </div>
    </div>

    <audio id="background-music" src="{{ asset('music/Shikairo Days by Shika-bu.mp3') }}" loop></audio>
    <footer class="footer">
        <p>PelitaTaras | &copy; {{ date('Y') }} Schale Organization. All rights reserved.</p>
        {{-- <a id="play-music" style="display: none; cursor: pointer;">shika</a> --}}
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function() {
            var music = document.getElementById('background-music');
            var playButton = document.getElementById('play-music');

            // Coba untuk memainkan musik
            function tryPlayMusic() {
                music.play().catch(function(error) {
                    // Jika autoplay tidak diizinkan, tampilkan tombol play
                    playButton.style.display = 'block';
                });
            }

            // Menjalankan fungsi untuk mencoba memainkan musik
            tryPlayMusic();

            // Menangani klik tombol play
            playButton.addEventListener('click', function() {
                music.play();
                playButton.style.display = 'none';
            });
        });
    </script>
</body>

</html>
