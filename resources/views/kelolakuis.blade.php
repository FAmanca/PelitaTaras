@extends('layouts.dash')
@section('container')
    <main class="container col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Kuis</h1>
        </div>
        <table class="table table-striped-columns">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Kuis</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kuis as $k)
                    <tr class="table-success">
                        <td>{{ $k->nomor }}. {{ $k->soal}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('createkuis') }}"><button type="button" class="btn btn-success">Tambah Kuis</button></a>
    </main>
@endsection
