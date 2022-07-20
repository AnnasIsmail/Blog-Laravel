@extends('layouts.main')

@section('container')

        <article>
            <h1 class="title is-2" >
                <a>{{ $post['title'] }}</a>
            </h1>
            <h3 class="title is-4" >
               <a>{{ $post['author'] }}</a>
            </h3>
            <p class="subtitle is-5" >{{ $post['body'] }}</p>
        </article>

@endsection