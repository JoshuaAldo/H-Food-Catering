@extends('layouts.main')
@section('container')
<div class="container">
    <div class="row justify-content-center" style="margin-top: 10%">
<div class="card" id="confirmOrder"> 
    <div class="header" id="confirmHead"> 
        <div class="image" id="confirmImg">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 7L9.00004 18L3.99994 13" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
        </div> 
        <div class="content" id="confirmContent">
           <span class="title" id="confirmTitle">Order validated</span> 
           <p class="message" id="confirmMsg">Terima kasih atas pesanan anda. Mohon melakukan pembayaran sebesar <strong>Rp{{ $price }}</strong> ke Nomer Rekening <strong>123456789 a/n H-Food Catering</strong></p> 
           </div> 
            <div class="actions" id="confAct">
              <a href="/pesananSaya" class="btn history">Pesanan Saya</a>
            </div> 
    </div> 
</div>
    </div>
</div>
@endsection