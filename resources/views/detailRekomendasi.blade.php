@extends('layouts.main')
@section('container')

<h3 style="margin: 16px; font-weight: bold">Kebutuhan Gizi: {{ $prediction }} kcal</h3>

<div class="container">
    <div class="row justify-content-center">
@foreach ($food as $food)
    <div class="col-md-4">
        <div class="card shadow" style="width: 100%;" >
            <img class="card-img-top" src="{{ url($food->path) }}" style="width: 100%   "  alt="">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $food->nama_Menu}}</strong></h5>
                <p class="card-text">
                    {{$food->deskripsi}} <br>
                    <strong>Harga :</strong> Rp{{ ($food->harga) }} <br>
                    <br>
                        <a href="{{ route('menu.detail', $food->id) }}" style="font-size: 16px; font-weight: bold; text-decoration: none; color: black">More Details <i class="bi bi-arrow-right-short"></i></a>
                    <br>
                        <a href="#" style="font-size: 16px; font-weight: bold; text-decoration: none; color: black">Tambahkan ke keranjang <i class="bi bi-basket"></i></a>
                </p>
            </div>
        </div>
        <br>
    </div>
    @endforeach
</div>
</div>
@endsection
