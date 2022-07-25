    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
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
                <a class="nav-link {{ ($title === "Author")? 'active' : '' }}" href="/authors">Authors</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "About")? 'active' : '' }}" href="/about">About</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
