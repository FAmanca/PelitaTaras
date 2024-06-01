@extends('layouts.main')

@section('container')
    <div class="hero">
        <div class="hero-content">
            <h1>Profil Guru BK Sebelas</h1>
        </div>
    </div>
    <br>
    <h1 class="bktitle">Yuk Kenalan Dengan Guru BK SMK Negeri 11 Bandung</h1>

    <div class="container mx-auto py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Nama</h3>

                </div>
            </div>
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Nama</h3>
                </div>
            </div>
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Nama</h3>
                </div>
            </div>
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body">
                    <h3 class="text-lg font-semibold mb-2">Nama</h3>
                </div>
            </div>
            <div class="card">
                <img src="{{ $image }}" alt="Image 1" class="w-full h-auto">
                <div class="card-body img-thubmnail rounded-circle">
                    <h3 class="text-lg font-semibold mb-2">Nama</h3>
                </div>
            </div>
            <!-- Tambahkan card lainnya di sini -->
        </div>
    </div>
@endsection
