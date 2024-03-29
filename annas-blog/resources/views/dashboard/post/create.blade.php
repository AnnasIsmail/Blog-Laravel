@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Create New Post</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
        </div>
    </div>


    <form action="/dashboard/posts" method="post" class="mb-4" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title') }}">

          @error('title')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Slug</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value="{{ old('slug') }}">
            
            @error('slug')
                <div class="text-danger">
                {{ $message }}
                </div>
            @enderror
          </div>
       
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Category</label>
            <select class="form-select" name="category_id" aria-label="Default select example">
                @foreach ($categories as $category)
                    @if (old('category_id') == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endif
                @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Image Post</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('slug') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Body</label>
            <input id="x" type="hidden" value="{{ old('body') }}" name="body">
            <trix-editor input="x"></trix-editor>
            @error('body')
                <div class="text-danger">
                {{ $message }}
                </div>
            @enderror
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

            function previewImage(){
              const image = document.querySelector('#image');
              const imgPreview = document.querySelector('.img-preview');

              imgPreview.style.display = 'block';

              const ofReader = new FileReader();
              ofReader.readAsDataURL(image.files[0]);

              ofReader.onload = function(oFREvent){
                imgPreview.src = oFREvent.target.result;
              }

            }
      </script>

@endsection