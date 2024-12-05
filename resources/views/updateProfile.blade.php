@extends('layouts.main')
@section('container')
<div class="container">
    <div class="justify-content-center" style="margin-top: 5%">
        <div class="card m-auto" id="updt" style="padding: 16px">
            <form action="/updateProfile" method="post">
                @csrf
                  <h2 class="h3 mb-3 fw-semibold mt-2 text-center">Update Profile</h2>
                  @if(session()->has('success'))
                  <br>
                  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                      <strong>{{ session('success') }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
                  <div class="inputCon">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ auth()->user()->name }}" required>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="inputCon">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ auth()->user()->email }}" readonly>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="inputCon">
                    <label for="address">Alamat</label>
                    <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror" id="address" placeholder="Alamat" value="{{ auth()->user()->address }}" required>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="inputCon">
                    <label for="age">Usia</label>
                    <input type="number" min="0" name="age" class="form-control @error('age') is-invalid @enderror" id="age" placeholder="Usia" value="{{ auth()->user()->age }}" required>
                    @error('age')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div style="text-align: center;margin: 8px;padding: 8px">
                    <button type="submit" class="btn" id="passBtn">Update Profile</button>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection