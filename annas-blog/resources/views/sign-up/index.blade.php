@extends('layout.layout')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
            <form action="/sign-up" method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal text-center mb-4 mt-4">Please Sign Up</h1>
              <div class="form-floating">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Name" value="{{ old('name') }}" required>
                <label for="floatingInput">Name</label>
                @error('name')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="floatingInput" placeholder="Username" value="{{ old('username') }}" required>
                <label for="floatingInput">Username</label>
                @error('username')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required>
                <label for="floatingInput">Email address</label>
                @error('email')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password" value="{{ old('password') }}" required>
                <label for="floatingPassword">Password</label>
                @error('email')
                  <div class="text-danger">
                    {{ $message }}
                  </div>
                @enderror
              </div>
        
              <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <p class="mt-2 text-center">Have Account? <a href="/sign-in">Login Now!</a></p>
          </main>
    </div>
</div>
  
@endsection