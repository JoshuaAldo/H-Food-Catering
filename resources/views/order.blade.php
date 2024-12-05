@extends('layouts.main')
@section('container')

@if($carts && count($carts) > 0)
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center" style="margin: 16px">
            <strong><h2 style="font-weight: bold">Order</h2></strong>
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
            @foreach ($carts as $h)
            <div class="col-md-4">
        <div class="card shadow">
            <img class="card-img-top" src="{{ $h->menu->path }}" style="width: 100%"  alt="">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $h->menu->nama_Menu}}</strong></h5>
                <p class="card-text">
                    <strong>Harga :</strong> Rp{{ ($h->menu->harga) }} <br>
                    <div class="container">
                        <div class="row justify-content-center">
                                <form action="{{ route('keranjang.update', $h->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <strong>Jumlah : <input class="form-control" type="number" name="jumlah" min="1" max="{{ $h->menu->stock }}" value="{{ $h->jumlah }}" style="width: 20%; margin-bottom: 8px"></strong>
                                    <button type="submit" class="btn" id="btnLogReg" style="margin: 8px">Ubah</button>
                                </form>
                                <form action="{{ route('keranjang.destroy', $h->id) }}" method="POST">
                                    @csrf
                                @method('DELETE')
                                <button type="submit"  class="btn" id="btnLogReg" style="margin: 8px">Hapus</button>
                            </form>
                        </div>
                    </div>
                </p>
        </div>
    </div>
    <br>
</div>
@endforeach

@foreach ($carts as $h)
<form action="{{ route('confirm.order', $h->id) }}" method="POST">
@endforeach
    @csrf
    <div class="inputCon">
        <label for="activity_level" style="margin-bottom: 8px"><strong>Jadwal Catering</strong></label> <br>
        <select class="form-select ms-auto" name="jadwal" id="jadwal" style="margin-bottom: 8px;width: 100%" required>
            <option value="1 Minggu">1 Minggu</option>
            <option value="1 Bulan">1 Bulan</option>
            <option value="3 Bulan">3 Bulan</option>
          </select>
      </div>
    <div class="row justify-content-center">
        <button type="submit" class="btn" style="margin-top: 8px; width: 50%" id="btnLogReg">Confirm</button>
    </div>
</form>
</div>
</div>
@else
<div class="row justify-content-center">
    <div class="text-center" style="margin: 16px">
        <strong><h1 style="font-weight: bold">Order</h1></strong>
    </div>
    <div class="card shadow" style="width: 500px">
    <div class="text-center" style="margin: 16px">
        <strong><h3 style="font-weight: bold">Order masih kosong</h3></strong>
        <i class="bi bi-emoji-frown-fill" style="font-size: 50px; margin: 16px"></i><br>
        <a href="/menu" style="text-decoration: none" id="fgtPass">Pesan Sekarang</a>
    </div>
    </div>
</div>
@endif


@endsection