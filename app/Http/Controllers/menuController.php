<?php

namespace App\Http\Controllers;

use App\Models\menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class menuController extends Controller
{
    public function index(){
        $menu = DB::table('menus')->paginate(9);
        return view('menu',['menu' => $menu, "title" => "Menu"]);
    }

    public function detail(menu $menu){
        $user = Auth::user();
        return view('detailMenu', ['menu'=>$menu, 'user'=>$user,"title" => "Detail Makanan"]);
    }
}
