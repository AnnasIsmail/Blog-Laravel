@extends('layout.layout')

@section('container')
    <h1>{{ $name }}</h1>
    <h3>{{ $email }}</h3>
    <img src="{{ $image }}" alt="">
@endsection
