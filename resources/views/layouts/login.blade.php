<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H-Food Catering | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Poppins&display=swap" rel="stylesheet">
  </head>
  <body>
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
                <li class="nav navbar-nav">
                    <a class="nav-link" href="/register">Register</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

    @yield('container')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>