
@extends('layout.layout')

@section('container')

    <article>
        <h2>{{ $post->title }}</h2>
        <h5>{{ $post->author }}</h5>
        <h5>
            <a href="/category/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
        </h5>
        {!! $post->body !!}
    </article>

@endsection
