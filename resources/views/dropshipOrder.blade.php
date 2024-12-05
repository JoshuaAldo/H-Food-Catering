@extends('layouts.main')
@section('container')
<div class="container">
    <div class="justify-content-center" style="margin-top: 5%">
        <div class="card m-auto" id="updt" style="padding: 16px">
            <form action="/dropshipMenu" method="post">
                @csrf
                  <h2 class="h3 mb-3 fw-semibold mt-2 text-center">Dropship Order</h2>
                  @if(session()->has('success'))
                  <br>
                  <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                      <strong>{{ session('success') }}</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
                  <div class="form-floating">
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap Pelanggan" value="{{ old('name') }}" required>
                      <label for="name">Nama Lengkap Pelanggan</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <br>
                  <div class="form-floating">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email Pelanggan" value="{{ old('email') }}" required>
                      <label for="email">Email Pelanggan</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <br>
                  <div class="form-floating">
                      <input type="text" name="address" class="form-control  @error('address') is-invalid @enderror" id="address" placeholder="Alamat Pelanggan" value="{{ old('address') }}" required>
                      <label for="address">Alamat Pelanggan</label>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                  </div>
                  <br>
                  <div class="form-floating">
                      <select class="form-select ms-auto" name="jadwal" id="jadwal" style="margin-bottom: 8px;width: 100%" required>
                        <option value="1 Minggu">1 Minggu</option>
                        <option value="1 Bulan">1 Bulan</option>
                        <option value="3 Bulan">3 Bulan</option>
                    </select>
                    <label for="activity_level" style="margin-bottom: 8px"><strong>Jadwal Catering Pelanggan</strong></label> <br>
                  </div>
                  <div style="text-align: center;margin: 8px;padding: 8px">
                    <button type="submit" class="btn" id="passBtn">Order</button>
                </div>
                </form>
        </div>
    </div>
</div>
@endsection