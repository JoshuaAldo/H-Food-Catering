@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="text-center" style="margin: 16px">
            <strong><h2 style="font-weight: bold">Status Langganan Katering</h2></strong>
        </div>
        <div class="text-center card-body" style="margin-bottom: 16px; margin-right: 8px">
            <a href="/pesananSaya" class="btn" id="passBtn" style="text-decoration: none;color: black">Belum Bayar</a>
            <a href="/Status-Katering" class="btn" id="passBtn" style="text-decoration: none;color: black">Diproses</a>
            <a href="/selesai" class="btn" id="passBtn" style="text-decoration: none;color: black">Selesai</a>
        </div>
         @foreach ($carts as $item)
         <div class="col-md-3"  style="margin-bottom: 12px;padding: 8px">
            <div class="card shadow" style="width: 100%;height: 100%;">
                <img class="card-img-top" src="{{ $item->menu->path }}" style="width: 100%"  alt="">
                <div class="card-body">
                    <strong style="font-size: 20px;text-decoration: underline">{{ $item->menu->nama_Menu }}</strong> <br>
                    <strong><small>Durasi Katering : {{ $item->jadwal }}</small></strong> <br>
                    <H6 style="font-weight: bold;font-size: 14px">Status :<strong style="color: rgb(8, 188, 8);font-weight: bold"> {{ $item->status }}</strong></H6>
                    <small>Total harga : {{ $item->totalharga }}</small> <br>
                    <small>Jumlah Pesanan : {{ $item->jumlah }}</small> <br>
                    <small>Tanggal Order : {{ $item->deleted_at }}</small>
                </div>
            </div>
            <br>
        </div>
        @endforeach
        <div class="pagination justify-content-center">
            {{ $carts->links() }}
        </div>
    </div>
</div>

@endsection