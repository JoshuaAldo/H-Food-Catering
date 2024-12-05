@extends('layouts.main')

@section('container')
<br>
<h2 class='text-center'><strong>Menu</strong></h2><br>
<div class="container">
    <div class="row justify-content-center">
@foreach ($menu as $m)
    <div class="col-md-4" style="margin-bottom: 12px;padding: 8px">
        <div class="card shadow" style="width: 100%; height: 100%;" >
            <img class="card-img-top" src="{{ $m->path }}" style="width: 100%  "  alt="">
            <div class="card-body" >
                <h5 class="card-title"><strong>{{ $m->nama_Menu}}</strong></h5>
                <p class="card-text">
                    {{$m->deskripsi}} <br>
                    <strong>Harga :</strong> Rp{{ ($m->harga) }} <br>
                    <br>
                        <a href="{{ route('menu.detail', $m->id) }}" style="font-size: 16px; font-weight: bold; text-decoration: none; color: black">More Details <i class="bi bi-arrow-right-short"></i></a>
                    <br>
                        <a href="{{ route('menu.detail', $m->id) }}" style="font-size: 16px; font-weight: bold; text-decoration: none; color: black">Tambahkan ke keranjang <i class="bi bi-basket"></i></a>
                </p>
            </div>
        </div>
        <br>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
        {{ $menu->links() }}
    </div>
</div>
</div>

@endsection
  