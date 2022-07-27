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
            <form action="/sign-in" method="post">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center mb-4 mt-4">Please Sign In</h1>
                <div class="form-floating">
                    <input type="name" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" autofocus required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="mb-0 form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required value="{{ old('password') }}">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="text-danger">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

              <button class="w-100 btn mt-3 btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <p class="mt-2 text-center">Not Register? <a href="/sign-up">Register Now!</a></p>
          </main>
    </div>
</div>
  
@endsection