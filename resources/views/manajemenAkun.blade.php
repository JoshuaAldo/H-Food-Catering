@extends('layouts.main')
@section('container')

<div class="container">
    <div class="justify-content-center">
        <div class="text-center" style="margin: 16px">
            <strong><h2 style="font-weight: bold">Manajemen Akun</h2></strong>
        </div>
            
            <div class="card shadow m-auto" style="width: 80%; padding: 16px;background-color: rgb(56, 57, 59)">
                <i class="bi bi-file-person text-center" style="font-size: 200px;color: white"></i>
                <div class="card-body justify-content-center" >
                    
                    <div class="manajemenCard m-auto">
                        <div class="align">
                            <span class="red"></span>
                            <span class="yellow"></span>
                            <span class="green"></span>
                        </div>
                    
                        <h1>Data Diri</h1>
                            <p style="margin: 16px">
                            Nama Lengkap : {{ auth()->user()->name }} <br>
                            Email : {{ auth()->user()->email }} <br>
                            Alamat : {{ auth()->user()->address }} <br>
                            Usia : {{ auth()->user()->age }} Tahun <br>
                            Kata Sandi : ••••••••••••••
                            </p>
                    </div>
                    <br>
                    <br>
                </div>
                <div class="m-auto">
                    <a href="/ubahSandi"><button class="btn" id="manBtn">Ubah Kata Sandi</button></a>
                    <a href="/updateProfile"><button class="btn" id="manBtn">Update Profile</button></a>
                    <a href="/Status-Katering"><button class="btn" id="manBtn">Status Langganan</button></a>
                </div>
            </div>
            <br>
    </div>
</div>
@endsection
  