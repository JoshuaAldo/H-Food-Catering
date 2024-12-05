@extends('layouts.main')
@section('container')
<div class="container">
    <div class="justify-content-center" style="margin-top: 10%">
        <div class="card shadow m-auto" style="width: 45%; padding: 16px">
            <div class="text-center">
                <strong><h2 style="font-weight: bold">Forget Password</h2></strong>
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
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-floating">
                        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="email">Email</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div style="text-align: center">
                        <button type="submit" class="btn" id="passBtn">Submit</button>
                    </div>
                </form>
                    
            </div>
        </div>
        <br>
    </div>
</div>
@endsection