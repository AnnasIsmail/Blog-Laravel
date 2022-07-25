
@extends('layout.layout')

@section('container')

    @foreach ($posts as $post)
    <article class="mb-4 border-bottom pt-10">
        <h2>
            {{ $post->title }}
        </h2>
        <h5>
            Category Post <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </h5>
        <h5>
            Author <a class="text-decoration-none" href="/author/{{ $post->user->username }}">
                {{ $post->user->name }}
            </a>
        </h5>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}">Read more...</a>
    </article>
    @endforeach

@endsection
