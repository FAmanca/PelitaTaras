@extends('layouts.main')

@section('container')
    <h2>Blog Kami</h2>
    {{-- <div class="container mx-auto py-20"> --}}
    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($posts as $post)
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/Arona.jpg') }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">By : {{ $post->author }}</p>
                        <a class="selengkapnya" href="/post/{{ $post->slug }}">Selengkapnya -></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
