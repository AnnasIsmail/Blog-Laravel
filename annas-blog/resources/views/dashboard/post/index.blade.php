@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
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
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a href="/dashboard/posts/{{ $post->slug }}"><span data-feather="eye" class="align-text-bottom link"></span></a>
                            <a href="" class=" px-2"><span data-feather="edit" class="align-text-bottom link"></span></a>
                            <a href=""><span data-feather="trash-2" class="align-text-bottom link"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
@endsection