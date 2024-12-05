<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class testimoniController extends Controller
{
    public function index(){
        $dtUser=testimoni::with('user', 'menu')->paginate(9);
        return view('testimoni',['testimoni'=> $dtUser, "title" => "Testimoni"]);
    }

    public function testimoniSaya(){
        $user=Auth::user();
        $categories = keranjang::onlyTrashed()->where('user_id',$user->id)->where('status','Done')->paginate(8);
        $dtUser=testimoni::with('user', 'menu')->paginate(9);
        return view('testimoniSaya',['testimoni'=> $dtUser, 'makanan' => $categories,"title" => "Testimoni Saya"]);
    }

    public function testimoniSayaSubmit(Request $request){
        $user=Auth::user();
        
        $newTest = new testimoni();
        $newTest->user_id = $user->id;
        $newTest->menu_id = $request->input('category_id');
        $newTest->testimoni = $request->input('testimoni');
        $newTest->save();
        return redirect()->route('testimoni');
    }
}
