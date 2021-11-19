<nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <img src="img/logo_kamar-removebg-preview.png" alt="logo" style="width: 175px" />
    </a>
    {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto"> --}}
        {{-- <li class="nav-item">
          <a class="nav-link text-dark" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#post">Services</a>
        </li> --}}
        
        {{-- @auth

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
              <button type="submit" class="dropdown-item">Logout </button>
              </form>
            </li>
          </ul>
        </li>

        @else  --}}

        {{-- <li class="nav-item">
          <a href="/login" class="nav-link"> Login</a>
        </li> --}}

        {{-- @endauth --}}
        {{-- <button class="btn btn-primary ms-lg-3">Sign Up</button> --}}
      {{-- </ul> --}}
    {{-- </div> --}}
  </div>
</nav>