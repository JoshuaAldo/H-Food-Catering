@extends('layouts.login')
@section('container')
<div class="container-fluid">
  @if(session()->has('success'))
  <br>
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <strong>{{ session('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  @if(session()->has('error'))
  <br>
  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>{{ session('error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
<div class="row justify-content-center m-4">
    <div class="col-md-4 mt-auto mb-auto">

        <main class="form-signin w-100">
            <form action="{{ route('login') }}" method="POST">
              @csrf
              <img class="mb-4; rounded" id="logo" src="img/logo.png" alt="">
              <h1 class="h3 mb-3 fw-semibold mt-2 text-center">Login</h1>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>

              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                  <span>
                    <div style="height: 16px; margin: 10px">
                    <input type="checkbox" id="toggle-password" onclick="togglePassword()"> Show Password
                  </div>
                </span>
              </div>

              <small class="d-block text-center mb-2"><a href="/forgot-password" class="btn" id="fgtPass">Forget Password?</a></small>
              <button class="btn w-100 py-2" id="btnLogReg" type="submit">Login</button>
              <small class="d-block text-center mb-2">Don't Have Account? <a href="/register" style="text-decoration: none" id="fgtPass">Register Now!</a></small>
            </form>
          </main>
    </div>
    <div class="col-md-6 ms-auto">
        <main class="items-center">
            <div id="carouselFood" class="carousel slide carousel-fade">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselFood" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselFood" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselFood" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/login/nasgor.jpg" class="d-block w-100 rounded" alt="">
                </div>
                <div class="carousel-item">
                  <img src="img/login/food6.jpg" class="d-block w-100 rounded" alt="">
                </div>
                <div class="carousel-item">
                  <img src="img/login/food7.jpg" class="d-block w-100 rounded" alt="">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselFood" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselFood" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class="text-center">
              <H2 class="mt-4" id="loginText">Healthy Food, Healthy Life!</H2>
              <p>Dapatkan katering makanan sehat terbaik sekarang juga!</p>
            </div>
        </main>
    </div>
</div>
</div>

<script>
  function togglePassword() {
      var passwordInput = document.getElementById('password');

      if (passwordInput.type === "password") {
          passwordInput.type = "text";
      } else {
          passwordInput.type = "password";
      }
  }
</script>

@endsection
