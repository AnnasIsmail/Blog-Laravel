
@extends('layout.layout')

@section('container')

<h2>{{ $title }}</h2>

    @foreach ($categories as $category)
    <article class="mb-2">
        <h5>
            <a href="/category/{{ $category->slug }}">
                {{ $category->name }}
            </a>
        </h5>
    </article>
    @endforeach

@endsection
