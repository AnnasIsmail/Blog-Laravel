
@extends('layout.layout')

@section('container')

<h2 class="mb-3">{{ $title }}</h2>

<div class="container-posts">
    @foreach ($categories as $category)
    <div class="card mb-4">
        <img src="https://source.unsplash.com/1200x800?{{ $category->name }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $category->name }}</h5>
            <a href="/posts?category={{ $category->slug }}">See All Posts</a>
        </div>
    </div>
    @endforeach
</div>

@endsection
