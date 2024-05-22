@extends('layouts.dash')
@section('container')
    <main class="container col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambahkan Postingan Baru</h1>
        </div>
        <div class="col-lg-8">
            <form method="      " action="">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Judul Postingan</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
@endsection
