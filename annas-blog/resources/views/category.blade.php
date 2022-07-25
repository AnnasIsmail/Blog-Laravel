
@extends('layout.layout')

@section('container')

    @foreach ($posts as $post)
    <article class="mb-4 border-bottom pt-10">
        <h2>
            <a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <h5>{{ $post->author }}</h5>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}">Read more...</a>
    </article>
    @endforeach

@endsection
