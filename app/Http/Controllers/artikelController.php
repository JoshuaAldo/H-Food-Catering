<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class artikelController extends Controller
{
    public function index(){
        $artikel = DB::table('artikels')->paginate(9);
        return view('artikel',['artikel'=> $artikel, "title" => "Artikel"]);
    }

    public function detail(artikel $art){
        return view('detailArtikel', ['art'=>$art, "title" => "Detail Artikel"]);
    }
}
