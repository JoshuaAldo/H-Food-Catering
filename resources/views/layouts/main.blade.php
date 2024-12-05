<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H-Food Catering | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
    @auth
    <nav class="navbar navbar-expand-lg navbar-light fw-semibold fs-6" style="background-color: #b1a296; font-family:Poppins, sans-serif">
      <div class="container ">
        <span class="navbar-brand flex-grow-1" style="font-family: 'Cherry Bomb One', cursive">H-Food Catering</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Menu") ? 'active' : '' }}" href="/menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Artikel") ? 'active' : '' }}" href="/artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Testimoni") ? 'active' : '' }}" href="/testimoni">Testimoni</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Dropship") ? 'active' : '' }}" href="/dropship">Dropship</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Order") ? 'active' : '' }}" href="/order">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Pesanan Saya") ? 'active' : '' }}" href="/pesananSaya">Pesanan Saya</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <a href="/management" class="bi-person mt-auto" style="font-size: 24px; color: black"></a>
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  {{ auth()->user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/Testimoni-Saya">Testimoni Saya</a>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                  </form>
                </div>
              </div>
            </ul>
          </div>
        </div>
      </nav>
      
      @else
      <nav class="navbar navbar-expand-sm navbar-light fw-semibold fs-6" style="background-color: #b1a296; font-family:Poppins, sans-serif">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <span class="navbar-brand flex-grow-1" style="font-family: 'Cherry Bomb One', cursive">H-Food Catering</span>
          <div class="navbar-collapse collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Menu") ? 'active' : '' }}" href="/menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Artikel") ? 'active' : '' }}" href="/artikel">Artikel</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ($title === "Testimoni") ? 'active' : '' }}" href="/testimoni">Testimoni</a>
              </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/register">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      @endauth
      @yield('container')
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</html>