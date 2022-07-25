
@extends('layout.layout')

@section('container')

    @foreach ($authors as $author)
    <article class="mb-4 border-bottom pt-10">
        <h2>
            <a href="">
                {{ $author->name }}
            </a>
        </h2>
        <p>{{ $author->email }}</p>
    </article>
    @endforeach

@endsection
