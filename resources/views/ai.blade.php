@extends('layouts.main')

@section('container')
    <main>
        <h1>{{ $title }}</h1>
        @if (isset($response))
            <p>Response: {{ json_encode($response, JSON_PRETTY_PRINT) }}</p>
        @endif
        <form action="{{ url('/ai') }}" method="post">
            @csrf
            <textarea id="content" name="content" rows="4" cols="50" placeholder="Tulis pesan Anda di sini..."></textarea>
            <button type="submit">Kirim</button>
        </form>
    </main>
@endsection
