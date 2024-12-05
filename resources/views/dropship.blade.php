@extends('layouts.main')
@section('container')
<div class="container-fluid">
    <div class="row justify-content-center m-4">
        <div class="col-md-4 mt-auto mb-auto">
            <main class="form-registration w-100">
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                      <strong>{{ session('success') }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                 @endif
                <form class="formRegist" action="/dropship" method="post" enctype="multipart/form-data">
                @csrf
                  <h2 class="h3 mb-3 fw-semibold mt-2 text-center">Join Us Now!</h2>
                  <div class="inputCon">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ auth()->user()->name }}" readonly>
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
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control  @error('address') is-invalid @enderror" id="alamat" placeholder="Alamat" value="{{ old('address') }}" required>
                    @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  <div class="inputCon">
                    <label for="ktpKmage">Upload Foto KTP</label>
                    <input type="file" name="ktpImage" class="form-control @error('ktpImage') is-invalid @enderror" id="ktpImage" required>
                    @error('kkImage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <div class="inputCon">
                    <label for="kkImage">Upload Foto Kartu Keluarga</label>
                    <input type="file" name="kkImage" class="form-control @error('kkImage') is-invalid @enderror" id="kkImage" required>
                    @error('kkImage')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <button class="btn w-100 py-2" type="submit" id="btnLogReg">Register</button>
                </form>
              </main>
            </div>
    </div>
    </div>  
@endsection
