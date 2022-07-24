
@extends('layout.layout')

@section('container')

    @foreach ($posts as $post)
    <article class="mb-4">
        <h2>
            <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>{{ $post->author }}</h5>
        <p>{{ $post->excerpt }}</p>
    </article>
    @endforeach

@endsection
