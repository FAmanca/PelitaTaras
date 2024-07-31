@extends('layouts.main')

@section('container')
    <div class="result">
        <h1 style="text-align: center">Hasil Tes SRQ-29</h1>
        <p style="text-align: center; font-size: 20px; font-weight: bold">{{ $tanggalWaktu }}</p>
        <div class="dataPengisi">
            <h2>Data Pengisi</h2>
            <p class="data"><span>Nama : </span> {{ Auth::user()->name }}</p>
            <p class="data"><span>Kelas : </span> {{ Auth::user()->email }}</p>
        </div>
        <hr>
        <!-- Skor dan Indikasi -->
        {{-- <div class="sum" style="text-align: center; font-size: 50px">
        <h2>Skor Total Anda</h2>
        <p>{{ $score }}</p>
    </div> --}}

        <div class="result-details">
            <h2>Indikasi Gangguan</h2>
            <div class="result-item">
                <span class="result-label">Depresi :</span>
                <span class="result-value">{{ $depression ? 'Ya' : 'Tidak' }}</span>
            </div>
            <div class="result-item">
                <span class="result-label" style="color: red">Narkoba :</span>
                <span class="result-value">{{ $substanceAbuse ? 'Ya' : 'Tidak' }}</span>
            </div>
            <div class="result-item">
                <span class="result-label">Gangguan Psikotik :</span>
                <span class="result-value">{{ $psychoticDisorder ? 'Ya' : 'Tidak' }}</span>
            </div>
            <div class="result-item">
                <span class="result-label">Gangguan PTSD :</span>
                <span class="result-value">{{ $ptsd ? 'Ya' : 'Tidak' }}</span>
            </div>
        </div>

        <!-- Penjelasan dan Tindakan Selanjutnya -->
        <div class="result-info">
            <h2>Panduan Hasil</h2>
            <p style="font-size: 20px; text-align: justify">
                Jika Anda terindikasi mengalami salah satu dari gangguan di atas, disarankan untuk berkonsultasi dengan
                profesional kesehatan mental untuk penilaian lebih lanjut dan mendapatkan dukungan yang sesuai.
            </p>
        </div>
        <a href="/home"><button class="btn btn-success" style="width: 100%;">Kembali</button></a>
    </div>
@endsection
