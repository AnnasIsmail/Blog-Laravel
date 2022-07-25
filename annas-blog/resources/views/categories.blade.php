
@extends('layout.layout')

@section('container')

<h2 class="mb-3">{{ $title }}</h2>

    <ul>
        @foreach ($categories as $category)
        <li>
            <article class="mb-2">
                <h5>
                    <a href="/category/{{ $category->slug }}">
                        {{ $category->name }}
                    </a>
                </h5>
            </article>
        </li>
        @endforeach
    </ul>

@endsection
