
@extends('layout.layout')

@section('container')

<form action="/authors">
    <div class="input-group mb-3 mt-3">
        <input type="text" name="search" class="form-control" placeholder="Search Author..." aria-label="Recipient's username" aria-describedby="button-addon2" value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit" id="button-addon2">Search</button>
    </div>
</form>

<div class="container-posts">
    @foreach ($authors as $author)

    <div class="card mb-4">
        @if ($author->image)
            <img src="{{ asset('storage/' . $author->image) }}" class="card-img-top max-h-32" alt="...">
        @else
            <img src="https://source.unsplash.com/1200x800?people" class="card-img-top max-h-32" alt="...">
        @endif
        <div class="card-body">
            <h5 class="card-title">{{ $author->name }}</h5>
            <p class="card-text">{{ $author->email }}</p>
            <a href="/posts?author={{ $author->username }}">See All Posts</a>
        </div>
    </div>
    @endforeach
</div>

<div class="d-flex justify-content-center mt-3">
    {{ $authors->links() }}
</div>

@endsection
