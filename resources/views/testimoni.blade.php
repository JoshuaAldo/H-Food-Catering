@extends('layouts.main')
@section('container')
<div>
<div class="row" id="back">
    <img src="img/testimoni.jpg" alt="" style="width:100%;height: 400px;">
</div>
<div class="centered" id="testimoniText">Testimoni</div>
</div>

<div class="container">
    <div class="row justify-content-center">
@foreach ($testimoni as $tes)
    <div class="col-md-4">
                        <div class="card shadow" style="max-width: 100%;">
                            <div class="row no-gutters">
                                <div class="col-md-4" style="margin: 16px">
                                    <i class="bi bi-person-bounding-box" style="font-size: 50px;margin-left: 32px"></i><br>
                                    <strong >{{ $tes->user->name }} </strong><br>
                                    <strong><small>{{ $tes->menu->nama_Menu }}</small></strong>
                                </div>
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <strong>Testimoni</strong><br>
                                        {{$tes->testimoni}} <br>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    @endforeach
    <div class="pagination justify-content-center">
        {{ $testimoni->links() }}
    </div>
</div>
</div>

@endsection
