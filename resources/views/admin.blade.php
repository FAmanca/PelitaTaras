@extends('layouts.dash')
@section('container')
    <main class="container col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
        </div>
        <h3>List Users</h3>
        <table class="table table-striped-columns">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">PW</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="table-success">
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->kelas }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->password }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
@endsection
