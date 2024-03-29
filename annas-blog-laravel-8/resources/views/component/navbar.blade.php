<nav class="navbar navbar-expand-lg fixed-top bg-dark navbar-dark">
  <div class="container">
    <a class="navbar-brand" href="/">Annas Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Home")? 'active' : '' }}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Categories Post")? 'active' : '' }}" href="/categories">Categories </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Blog")? 'active' : '' }}" href="/posts">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "Authors")? 'active' : '' }}" href="/authors">Authors</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title === "About")? 'active' : '' }}" href="/about">About</a>
        </li>
      </ul>

      @auth
      <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hello, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/log-out" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Log Out</button>
              </form>
            </li>
          </ul>
        </li>
      </ul>
      @else
      <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Sign In")? 'active' : '' }}" href="/sign-in">Sign In</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($title === "Sign Up")? 'active' : '' }}" href="/sign-up">Sign Up</a>
            </li>
        </ul>
      @endauth

    </div>
  </div>
</nav>
