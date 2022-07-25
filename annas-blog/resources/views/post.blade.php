
@extends('layout.layout')

@section('container')

    <article>
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
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
        {!! $post->body !!}
    </article>

@endsection
