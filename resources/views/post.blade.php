@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>By : {{ $post->author }}</h5>
        {!! $post->body !!}
        <a href="/posts">Back To Post</a>
    </article>
@endsection
