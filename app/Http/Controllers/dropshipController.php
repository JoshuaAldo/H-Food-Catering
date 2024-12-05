<?php

namespace App\Http\Controllers;

use App\Models\dropship;
use App\Models\dropshipOrder;
use App\Models\menu;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dropshipController extends Controller
{
    public function index(Request $request){
        if ($request->user()->role === 'dropship') {
            return view('dropshipOrder',["title" => "Menjual Kembali Makanan Sehat"]);
        } 
        
        else {
            return view('dropship', ["title" => "Dropship"]);
        }
    }

    public function dropshipMenu(Request $request){
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns',
            'address' => 'required|max:255',
        ]);
        $data = $request->input('email');
        $jadwalDrop = $request->input('jadwal');
        session()->put('data', $data);
        session()->put('jadwalDrop',$jadwalDrop);

        $newCart = new dropshipOrder();
        $newCart->dropshipperId = auth()->user()->id;
        $newCart->name = $request->name;
        $newCart->email = $request->email;
        $newCart->address = $request->address;
        $newCart->jadwal = $request->jadwal;  
        $newCart->save();
            $menu = DB::table('menus')->paginate(9);
            return view('reseller',['menu' => $menu, "title" => "Menjual Kembali Makanan Sehat"]);
    }

    public function dropshipMenuIndex(Request $request){
        $menu = DB::table('menus')->paginate(9);
        return view('reseller',['menu' => $menu, "title" => "Menjual Kembali Makanan Sehat"]);
    }

    public function detail(menu $menu){
        return view('detailDropship', ['menu'=>$menu, "title" => "Detail Makanan"]);
    }
    
    public function submit(Request $request){
        $dropship = DB::table('dropships')->get();
        $dropshipRegist = $request->validate([
            'email' => 'required|email:dns|unique:dropships',
            'alamat' => 'required|max:255',
            'ktpImage' => 'required|image|mimes:jpeg,png,jpg,gif',
            'kkImage' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $dropshipRegist['ktpImage']->store('public/img/ktp');
        $dropshipRegist['kkImage']->store('public/img/kk');
        dropship::create($dropshipRegist);
        return redirect()->back()->with('success', 'Data berhasil dikirim!, Harap tunggu admin melakukan verifikasi data!');
    }
}
