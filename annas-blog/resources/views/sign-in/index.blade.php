@extends('layout.layout')

@section('container')

<div class="row justify-content-center">

    <div class="col-md-4">

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <main class="form-signin w-100 m-auto">
            <form action="/login" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center mb-4 mt-4">Please Sign In</h1>
                <div class="form-floating">
                    <input type="name" name="username" class="form-control" id="username" placeholder="Username" autofocus required>
                    <label for="username">Username</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                </div>
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <p class="mt-2 text-center">Not Register? <a href="/sign-up">Register Now!</a></p>
          </main>
    </div>
</div>
  
@endsection