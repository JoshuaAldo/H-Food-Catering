@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow" style="width: 800px; height: 100%; margin:32px;background: rgb(236, 236, 236);">
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
            <br>
            <div>
                <h5><strong style="color: red;margin: 8px;padding: 8px">Disclaimer: Untuk Dropshipper harga makanan akan diberikan diskon 5%</strong></h5>
            </div>
            <div class="row no-gutters">
                    <div class="col-md-1">
                        <a href="/dropshipMenu" style="text-decoration: none;display: inline-block;padding: 8px 16px; margin: 8px;box-shadow: 6px 6px 12px #c5c5c5,
                        -6px -6px 12px #ffffff;" id="backBtn" class="previous round"><i class="bi bi-reply" style="font-size: 32px"></i></a>
                    </div>   
                    <div class="col-md-4" style="margin: 16px">
                        <img src="{{ url($menu->path) }}" class="rounded mx-auto d-block" style="width: 100%;height: 200px" alt=""><br>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <strong style="font-size: 30px">{{$menu->nama_Menu}}</strong><br><br>
                            {{ $menu->deskripsi }} <br><br>
                            <strong>Kandungan Gizi:</strong><br>
                            <small>{{ $menu->detail }}</small> <br><br>
                            Rp{{ $menu->harga }} <br>
                            Stock : {{ $menu->stock }} <br><br>
                            <form action="{{ route('keranjangDrop.store', $menu->id) }}" method="POST">
                                @csrf
                            <div class="purchase">
                                <input type="hidden" name="menu_id" value="{{ $menu->id }}">
                                <input type="number" name="jumlah" min="1" max="{{ $menu->stock }}" value="1" style="margin-left: 8px"> <br>
                                <button type="submit" class="btn" style="margin-top: 8px" id="basketBtn"><i class="bi bi-basket"></i>Tambahkan ke Keranjang</button>
                            </div>
                            </form>

                        </div>
                    </div>
                </div>
            <br>
        </div>
    </div>


</div>

@endsection