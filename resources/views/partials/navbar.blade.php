<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand text-white" href="/"><img src="img/first.png" width="80px" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Home") ? 'active' : '' }} "  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "About") ? 'active' : '' }} " href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Posts") ? 'active' : '' }} " href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "Categories") ? 'active' : '' }} " href="/categories">Categories</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-danger text-white" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>