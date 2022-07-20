@extends('layouts.main')

@section('container')

    @foreach ($posts as $post)
    <article class="message is-primary">
        <div class="message-header">
            <a href="detailPost{{ $post['slug'] }}">{{ $post['title'] }}</a>
            <a>{{ $post['author'] }}</a>
        </div>
        <div class="message-body">
            <p class="subtitle is-5" >{{ $post['body'] }}</p>
        </div>
    </article>
    @endforeach

@endsection