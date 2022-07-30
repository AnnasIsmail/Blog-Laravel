@extends('dashboard.layouts.main')

@section('container')


    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">All Categories</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="/dashboard/posts/create">
                <button type="button" class="btn btn-sm btn-outline-secondary"><span data-feather="plus" class="align-text-bottom link"></span> New Post</button>
            </a>
        </div>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category Name</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a href="/dashboard/categories/{{ $category->slug }}"><span data-feather="eye" class="align-text-bottom link"></span></a>
                            <a href="/dashboard/categories/{{ $category->slug }}/edit" class=" px-2"><span data-feather="edit" class="align-text-bottom link"></span></a>
                            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="border-0 bg-transparent px-0" onclick="return confirm('Are you sure?')">
                                    <a href="#"><span data-feather="trash-2" class="align-text-bottom link"></span></a>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
@endsection