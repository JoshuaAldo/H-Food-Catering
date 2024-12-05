<?php

namespace App\Http\Controllers;

use App\Models\keranjang;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class managementController extends Controller
{
    public function index(){
        $user = Auth::user();
        $akun = User::where('id', $user->id)->get();
        return view('manajemenAkun',['akun' => $akun , "title" => "Manajemen Akun"]);
    }

    public function changePasswordIndex(){
        $user = Auth::user();
        $akun = User::where('id', $user->id)->get();
        return view('ubahPass',['akun' => $akun , "title" => "Ubah Kata Sandi"]);
    }

    public function changePassword(Request $request){
        
        $successChange = $request->validate([
            'newPass' => 'required|min:8|max:30',
            'newPassConfirm' => 'same:newPass'
        ]);

        $user = Auth::user();
        $nowUser = User::find($user->id);

        $inputPass = $request->input('currentPass');

        if (Hash::check($inputPass, $nowUser->password)) {
            $hashedPassword = Hash::make($successChange['newPass']);
            $hashedPasswordConfirm = Hash::make($successChange['newPassConfirm']);
            $nowUser->password = $hashedPassword;
            $nowUser->confirmPassword = $hashedPasswordConfirm;
            $nowUser->save();
            return back()->with('success', 'Kata Sandi Berhasil Diubah');
        } else {
            return back()->with('error', 'Kata Sandi Lama Tidak Sesuai');
        }
    }

    public function updateProfileIndex(){
        $user = Auth::user();
        $akun = User::where('id', $user->id)->get();
        return view('updateProfile',['akun' => $akun , "title" => "Update Profile"]);
    }

    public function updateProfile(Request $request){
        $successRegist = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'age' => 'required|numeric|min:18',
        ]);

        $user = Auth::user();
        $nowUser = User::find($user->id);
        
        $nowUser->name = $request->name;
        $nowUser->address = $request->address;
        $nowUser->age = $request->age;
        $nowUser->save();
        return back()->with('success', 'Profile Berhasil di Update!');
    }

    public function statusCatering(){
        $user = Auth::user();

        $carts = keranjang::onlyTrashed()->where('user_id', $user->id)->where('status','Ongoing')->with('menu')->paginate(8);

        return view('statusLangganan',['carts' => $carts, 'title' => 'Pesanan Saya']);
    }


}
