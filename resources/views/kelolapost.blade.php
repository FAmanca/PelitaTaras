@extends('layouts.dash')
@section('container')
    <main class="container col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Kelola Postingan</h1>
        </div>
        <table class="table table-striped-columns">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Judul Postingan</th>
                    <th scope="col">Author</th>
                    <th scope="col">Tanggal Buat</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Hapus</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr class="table-success">
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->author }}</td>
                        <td>{{ $post->created_at }}</td>
                        <td><a href="kelolapost/editpost/{{ $post->id }}"><button type="button"
                                    class="btn btn-warning btn-sm">Edit</button></a></td>
                        <td>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('createpost') }}"><button type="button" class="btn btn-success">Tambah Postingan</button></a>
    </main>
@endsection
