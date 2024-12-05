    @extends('layouts.main')
    @section('container')
<div class="container">
    <div class="justify-content-center" style="margin-top: 10%">
        <div class="card shadow m-auto" style="width: 45%; padding: 16px">
            <div class="text-center">
                <strong><h2 style="font-weight: bold">Mengubah Kata Sandi</h2></strong>
            </div>
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
            <div class="card-body justify-content-center" >
                <form method="POST" action="/ubahSandi">
                    @csrf

                    <div class="form-floating">
                        <input type="password" name="currentPass" class="form-control @error('currentPass') is-invalid @enderror" placeholder="Kata Sandi Lama" id="currentPass" required>
                        <label for="currentPass">Kata Sandi Lama</label>
                        @error('currentPass')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="form-floating">
                        <input type="password" name="newPass" class="form-control @error('newPass') is-invalid @enderror" placeholder="Kata Sandi Baru" id="newPass" required>
                        <label for="newPass">Kata Sandi Baru</label>
                        @error('newPass')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>

                    <div class="form-floating">
                        <input type="password" name="newPassConfirm" class="form-control @error('newPassConfirm') is-invalid @enderror" placeholder="Konfirmasi Kata Sandi Baru" id="newPassConfirm" required>
                        <label for="newPassConfirm">Konfirmasi Kata Sandi Baru</label>
                        @error('newPassConfirm')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div style="text-align: center">
                        <button type="submit" class="btn" id="passBtn">Ubah Password</button>
                    </div>
                </form>
                    
            </div>
        </div>
        <br>
    </div>
</div>
@endsection