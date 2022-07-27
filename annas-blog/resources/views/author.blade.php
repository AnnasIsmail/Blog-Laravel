
@extends('layout.layout')

@section('container')

    <h1 class="mt-4 mb-4">{{ $name }}</h1>

    <div class="input-group mb-3 mt-3">
        <input type="text" class="form-control" placeholder="Search Post..." aria-label="Recipient's username" aria-describedby="button-addon2">
        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Search</button>
    </div>

    <div class="container-posts mb-4">
        @foreach ($posts as $post)
            <div class="card h-100">
                <img src="https://source.unsplash.com/450x450?{{ $post->category->name }}" class="card-img-top" alt="...">
                <div class="card-body">
                <h4 class="card-title">
                    <a class="text-dark" href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h4>
                <p class="card-text">{{ $post->excerpt }}</p>
                <h6>
                    Category <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">
                        {{ $post->category->name }}
                    </a>
                </h6>
                </div>
                <div class="card-footer">
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                </div>
            </div>
          @endforeach
    </div>

@endsection
