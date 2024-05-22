@extends('layouts.dash')
@section('container')
    <main class="container col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambahkan Postingan Baru</h1>
        </div>
        <div class="col-lg-8">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf  
                <div class="mb-3">
                    <label for="title" class="form-label">Judul Postingan</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Masukan Judul Postingan" required>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input type="text" name="author" class="form-control" id="author" placeholder="Masukan Nama Pembuat" required>
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="form-label">Ringkasan</label>
                    <input type="text" name="excerpt" id="excerpt" class="form-control" placeholder="Postinganmu mengenai/materi apa" required>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Isi Postingan</label>
                    <textarea class="form-control" name="body" id="body" rows="3" placeholder="Isi Postingan mu" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
