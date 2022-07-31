
@extends('layout.layout')

@section('container')

@if (request('category') && request('author'))
    <h1 class="text-center mt-3">Author {{ $posts[0]->user->name }} and Category {{ $posts[0]->category->name }}</h1>
@elseif (request('category'))
    <h1 class="text-center mt-3">Category {{ $posts[0]->category->name }}</h1>
@elseif (request('author'))
    <h1 class="text-center mt-3">Author {{ $posts[0]->user->name }}</h1>
@else
    <h1 class="text-center mt-3">All Posts</h1>
@endif
    
<form action="/posts">
    <div class="input-group mb-3 mt-3">
        @if (request('category'))
            <input name="category" type="hidden" class="form-control" placeholder="Search Post..." aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('category') }}">
        @endif    
        @if (request('author'))
            <input name="author" type="hidden" class="form-control" placeholder="Search Post..." aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('author') }}">
        @endif  
        <input name="search" type="text" class="form-control" placeholder="Search Post..." aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
    </div>
</form>

@if (count($posts) > 0)

    <div class="container-posts mb-4">
        @foreach ($posts as $post)
            <div class="card h-100">
                @if ($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top max-h-32" alt="...">
                @else
                    <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}" class="card-img-top max-h-32" alt="...">
                @endif
                <div class="card-body">
                <h4 class="card-title">
                    <a class="text-dark" href="/posts/{{ $post->slug }}">
                        {{ $post->title }}
                    </a>
                </h4>
                <p class="card-text">{{ $post->excerpt }}</p>
                <h6>
                    Category
                    @if (request('category'))
                        {{ $post->category->name }}
                    @elseif (request('author'))
                        <a class="text-decoration-none" href="/posts?author={{ request('author') }}&category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    @else
                        <a class="text-decoration-none" href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                    @endif  
                        
                </h6>
                <h6>
                    Author
                    @if (request('author'))
                    {{ $post->user->name }}
                    @elseif (request('category'))
                         <a class="text-decoration-none" href="/posts?category={{ request('category') }}&author={{ $post->user->username }}">{{ $post->user->name }}</a>
                    @else
                        <a class="text-decoration-none" href="/posts?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                    @endif  
                        
                </h6>
                </div>
                <div class="card-footer">
                <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                </div>
            </div>
          @endforeach
    </div>

    
    @else
    <p class="text-center fs-4">No Post Found.</p>
    @endif

    <div class="d-flex justify-content-center mt-3">
        {{ $posts->links() }}
    </div>

@endsection
