@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
        <h1 class="title is-2" >{{ $post['title'] }}</h1>
        <h3 class="title is-4" >{{ $post['author'] }}</h3>
        <p class="subtitle is-5" >{{ $post['body'] }}</p>
    @endforeach

@endsection