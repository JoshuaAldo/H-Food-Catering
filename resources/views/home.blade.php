@extends('layouts.main')
@section('container')

<br>
<h2 class='text-center'><strong>Our Menu</strong></h2><br>
{{-- <img src="img/nasgor.jpg" class="rounded mx-auto d-block" style="width: 40%" alt=""><br> --}}
<div style="width: 50%" class="mx-auto d-block">
    <div id="carouselFood1" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/home/food3.jpg" class="d-block w-100 rounded" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/home/food1.jpg" class="d-block w-100 rounded" alt="">
          </div>
          <div class="carousel-item">
            <img src="img/home/food2.jpg" class="d-block w-100 rounded" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselFood1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselFood1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div>
<br>
@auth
<div class="text-center">
    <a href="/rekomendasi" class="btn text-center" style="border:solid; border-width: 2px; background-color: #dfc3ad">Rekomendasi Makanan Sehat</a>
</div>
<br>
@endauth

<div class="container">
    <div class="row justify-content-center">
@foreach ($home as $h)
    <div class="col-md-4" style="margin-bottom: 12px;padding: 8px">
        <div class="card shadow" style="width: 100%;height: 100%;">
            <img class="card-img-top" src="{{ $h->path }}" style="width: 100%"  alt="">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $h->nama_Menu}}</strong></h5>
                <p class="card-text">
                    {{$h->deskripsi}} <br>
                    <strong>Harga :</strong> Rp{{ ($h->harga) }} <br>
                    <br>
                    <div class="d-block items-end">
                        <a href="{{ route('home.detail', $h->id) }}" style="font-size: 16px; font-weight: bold; text-decoration: none; color: black">More Details</a>
                        <i class="bi bi-arrow-right-short"></i>
                    </div>
                </p>
            </div>
        </div>
        <br>
    </div>
    @endforeach
</div>
</div>
<br>
@endsection
    
    
