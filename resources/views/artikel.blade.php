@extends('layouts.main')

@section('container')
<br>
<h2 class='text-center'><strong>Artikel</strong></h2><br>

<div class="container" >
    <div class="row justify-content-center">
@foreach ($artikel as $art)
    <div class="col-md-4"  style="margin-bottom: 12px;padding: 8px">
        <div class="card shadow" style="width: 100%; height: 100%;" >
            <img class="card-img-top" src="{{ $art->path }}" style="width: 100%"  alt="">
            <div class="card-body">
                <h5 class="card-title"><strong>{{ $art->title}}</strong></h5>
                <p class="card-text">
                    {{$art->description}}
                </p>
                <div class="d-block items-end">
                    <a href="{{ route('artikel.detail', $art->id) }}" style="font-size: 16px; font-weight: bold; text-decoration: none; color: black">Read More</a>
                    <i class="bi bi-arrow-right-short"></i>
                </div>
            </div>
        </div>
        <br>
    </div>
    @endforeach
    <div class="pagination justify-content-center">
        {{ $artikel->links() }}
    </div>
</div>
</div>

@endsection
    
