@extends('layouts.register')
@section('container')
<div class="container-fluid">
<div class="row justify-content-center m-4">
    <div class="col-md-4 mt-auto mb-auto">
        <main class="form-registration w-100">
            <form class="formRegist" action="/register" method="post">
            @csrf
              <h2 class="h3 mb-3 fw-semibold mt-2 text-center">Register</h2>
              <div class="inputCon">
                <label for="name">Nama Lengkap</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="inputCon">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="inputCon">
                <label for="address">Alamat</label>
                <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror" id="address" placeholder="Alamat" value="{{ old('address') }}">
                @error('address')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="inputCon">
                <label for="age">Usia</label>
                <input type="number" name="age" min="0" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Usia" value="{{ old('age') }}">
                @error('age')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="inputCon">
                <label for="password">Kata Sandi</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Kata Sandi">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <div class="inputCon">
                <label for="confirmPassword">Konfirmasi Kata Sandi</label>
                <input type="password" name="confirmPassword" class="form-control @error('confirmPassword') is-invalid @enderror" id="confirmPassword" placeholder="Konfirmasi Kata Sandi">
                @error('confirmPassword')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
              </div>
              <button class="btn w-100 py-2" type="submit" id="btnLogReg">Register</button>
              <small class="d-block text-center mb-2">Have Account? <a href="/login" style="text-decoration: none" id="fgtPass">Login</a></small>
            </form>
          </main>
        </div>
</div>
</div>

@endsection
