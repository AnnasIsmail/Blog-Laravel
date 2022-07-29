@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>

    <form action="/dashboard/posts" method="post">
        @csrf
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control is-invalid" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" readonly>
          </div>
       
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Body</label>
            <input id="x" type="hidden" name="body">
            <trix-editor input="x"></trix-editor>
          </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <script>
            const title = document.querySelector("#title");
            const slug = document.querySelector("#slug");

            title.addEventListener("keyup", function() {
                let preslug = title.value;
                preslug = preslug.replace(/ /g,"-");
                slug.value = preslug.toLowerCase();
            });
      </script>

@endsection