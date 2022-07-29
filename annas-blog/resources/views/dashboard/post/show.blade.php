@extends('dashboard.layouts.main')

@section('container')

    <div class="card my-4 ">
        <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}" class="card-img-top max-h-32" alt="...">
        <div class="card-body">
        <h2 class="card-title">{{ $post->title }}</h2>
        <h5>
            Category <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
        </h5>
        <h5>
            Author <a class="text-decoration-none" href="/posts?author={{ $post->user->username }}">{{ $post->user->name }}</a>
        </h5>
        <p class="card-text"></p>
        <div class="d-flex gap-4 border-dark mt-2">
            <a href="/dashboard/posts" class="text-decoration-none"> <h6><span data-feather="arrow-left" class="align-text-bottom link"></span> Back My Posts</h6></a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="text-decoration-none"> <h6><span data-feather="edit" class="align-text-bottom link"></span> Edit Post</h6></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="border-0 bg-transparent px-0" onclick="return confirm('Are you sure?')">
                    <a href="#" class="text-decoration-none"> <h6><span data-feather="trash-2" class="align-text-bottom link"></span> Remove Post</h6></a>
                </button>
            </form>
        </div>

        <p class="card-text">{!! $post->body !!}</p>
        <p class="card-text"><small class="text-muted">{{ $post->created_at->diffForHumans() }}</small></p>
        </div>
    </div>

@endsection
