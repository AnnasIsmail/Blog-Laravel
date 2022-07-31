@extends('layout.layout')

@section('container')

    <div class="card mb-4">
        @if ($post->image)
            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top max-h-32" alt="...">
        @else
            <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}" class="card-img-top max-h-32" alt="...">
        @endif
        <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        <h5>
            Category <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        <h5>
            Author <a class="text-decoration-none" href="/posts?author={{ $post->user->username }}">{{ $post->user->name }}</a>
        </h5>
        <p class="card-text">{!! $post->body !!}</p>
        <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        </div>
    </div>

@endsection
