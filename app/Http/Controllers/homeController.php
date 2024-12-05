<?php

namespace App\Http\Controllers;

use App\Models\home;
use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    public function index(){
        $home = menu::where('topSell', 'yes')->get();
        return view('home',['home' => $home, "title" => "Home"]);
    }

    public function detail(menu $menu){
        return view('detail', ['menu'=>$menu, "title" => "Detail Makanan"]);
    }
}
