@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow" style="width: 1200px; height: 100%; margin:32px;background: rgb(236, 236, 236);">
                <strong class="text-center" style="font-size: 30px">{{$art->title}}</strong><br><br>
                <img src="{{ url($art->path) }}" class="rounded mx-auto d-block" style="width: 800px;height: 400px" alt=""><br>
               <p> Penulis : {{ $art->author }} </p> <br>
               <p><small>{!! $art->context !!}</small></p>
            <br>
    </div>

@endsection