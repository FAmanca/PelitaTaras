@extends('layouts.dash')
@section('container')
    <main class="container col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Data Kuis</h1>
        </div>
        <div class="col-lg-8">
            <form method="POST" action="{{ route('kuis.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="nomor" class="form-label">Nomor Soal</label>
                    <input type="text" name="nomor" class="form-control" id="nomor" placeholder="Masukan Nomor Soal" required>
                </div>
                <div class="mb-3">
                    <label for="soal" class="form-label">Soal Kuis</label>
                    <textarea class="form-control" name="soal" id="soal" rows="3" placeholder="Buat Soal" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
