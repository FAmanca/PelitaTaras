<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PelitaTaras | {{ $title }}</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Referensi ke CSS Vanilla -->
</head>

<body>

    <div class="hero">
        <div class="container">
            <h1 class="title">PELITA TARAS</h1>
            <p class="description">Peduli Lindungi Kesehatan Mental Sebelas.</p>
        </div>
    </div>

    <div class="about">
        <div class="container">
            <h2 class="subtitle">Tentang PelitaTaras</h2>
            <p class="description">PELITA TARAS merupakan program kepedulan untuk menjaga Kesehatan mental remaja baik
                secara lahir maupun batin melalui edukasi pentingnya Kesehatan mental bagi tumbuh kembang remaja serta
                upaya deteksi dini gangguan Kesehatan mental pada seluruh siswa dan siswi di SMKN 11 Bandung dengan
                menggunakan Self Reporting Questionnaire (SRQ-29)</p>
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
            <!-- Tambahkan card lainnya di sini -->
        </div>
    </div>

    <div class="about">
        <div class="container">
            <h2 class="subtitle">Memulai PelitaTaras</h2>
            <p class="description">Hanya dengan mendaftar kemudian login sesuai data siswa dan langsung bisa menggunakan aplikasi ini dan melakukan konsultasi</p>
            <a href="/home">LOGIN</a>
        </div>
    </div>


</body>

</html>
