<?php

namespace App\Http\Controllers;

use App\Models\dropshipOrder;
use App\Models\keranjang;
use App\Models\menu;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class keranjangController extends Controller
{
    public function storeDrop(Request $request, $productId){
        $userId = Auth::id();
        $cart = menu::find($request->input('menu_id'));
        $data = session()->get('data');
        $jadwalDrop = session()->get('jadwalDrop');
        $existingCart = keranjang::where('menu_id', $cart->id)->where('dropOrder_name', $data)->where('user_id', $userId)->first();
            if ($existingCart) {
                $total = $request->input('jumlah') + $existingCart->jumlah;
                if ($total > $cart->stock) {
                    return redirect()->back()->with('error', 'Jumlah barang melebihi stok yang tersedia.');
                }
                    $existingCart->jumlah += $request->jumlah;
                    if($jadwalDrop === '1 Minggu'){
                        $existingCart->totalharga = (($existingCart->jumlah * $cart->harga) - ($existingCart->jumlah * $cart->harga * 0.05)) * 7;
                    }
                    else if($jadwalDrop === '1 Bulan'){
                        $existingCart->totalharga = (($existingCart->jumlah * $cart->harga) - ($existingCart->jumlah * $cart->harga * 0.05)) * 30;
                    }
                    else if($jadwalDrop === '3 Bulan'){
                        $existingCart->totalharga = (($existingCart->jumlah * $cart->harga) - ($existingCart->jumlah * $cart->harga * 0.05)) * 90;
                    }
                    $existingCart->save();
                } 
            else{
                $total = $request->input('jumlah');
    
                if ($total > $cart->stock) {
                return redirect()->back()->with('error', 'Jumlah barang melebihi stok yang tersedia.');
                }

                $newCart = new keranjang();
                $newCart->user_id = auth()->user()->id;
                $newCart->menu_id = $productId;
                $newCart->jumlah = $request->jumlah;
                if($jadwalDrop === '1 Minggu'){
                    $newCart->totalharga = (($request->jumlah * $cart->harga)-(($request->jumlah * $cart->harga) * 0.05)) * 7;
                }
                else if($jadwalDrop === '1 Bulan'){
                    $newCart->totalharga = (($request->jumlah * $cart->harga)-(($request->jumlah * $cart->harga) * 0.05)) * 30;
                }
                else if($jadwalDrop === '3 Bulan'){
                    $newCart->totalharga = (($request->jumlah * $cart->harga)-(($request->jumlah * $cart->harga) * 0.05)) * 90;
                }
                $newCart->dropOrder_name = $data;
                $newCart->jadwal = $jadwalDrop;
                $newCart->save();

            }
            return redirect()->back()->with('success', 'Item berhasil ditambahkan ke keranjang.'); 
    }

    public function store(Request $request, $productId){
        $userId = Auth::id();
        $cart = menu::find($request->input('menu_id'));
        $existingCart = keranjang::where('menu_id', $cart->id)->where('dropOrder_name', null)->where('user_id', $userId)->first();
            if ($existingCart) {
                $total = $request->input('jumlah') + $existingCart->jumlah;
                if ($total > $cart->stock) {
                    return redirect()->back()->with('error', 'Jumlah barang melebihi stok yang tersedia.');
                    }
                    $existingCart->jumlah += $request->jumlah;
                    $existingCart->totalharga = $existingCart->jumlah * $cart->harga;
                    $existingCart->save();
                } 
            else{
                $total = $request->input('jumlah');
    
                if ($total > $cart->stock) {
                return redirect()->back()->with('error', 'Jumlah barang melebihi stok yang tersedia.');
                }
                $newCart = new keranjang();
                $newCart->user_id = auth()->user()->id;
                $newCart->menu_id = $productId;
                $newCart->jumlah = $request->jumlah;
                $newCart->totalharga = $request->jumlah * $cart->harga;
                $newCart->save();
            }
            return redirect()->back()->with('success', 'Item berhasil ditambahkan ke keranjang.');  
    }

    public function update(Request $request, $productId){
        $cart = keranjang::findOrFail($productId);
        $product = menu::findOrFail($cart->menu_id);
        
        $newQuantity = $request->input('jumlah');

        if ($newQuantity <= $product->stock) {
            $cart->jumlah = $newQuantity;
            $cart->totalharga = $product->harga * $newQuantity;
            $cart->save();

            return redirect()->back()->with('success', 'Jumlah barang berhasil diperbarui.');
            
        } else {
            return redirect()->back()->with('error', 'Jumlah barang melebihi stok yang tersedia.');
        }
        
    }

    public function destroy($productId)
    {
        $cart = keranjang::findOrFail($productId);
        $cart->status = 'deleted';
        $cart->save();
        keranjang::destroy($productId);
        return redirect()->back()->with('success', 'Barang telah dihapus dari keranjang.');
    }

    public function index(){

        $user = Auth::user();

        $carts = keranjang::where('user_id', $user->id)->get();

        return view('order',['carts' => $carts,'title' => 'Order']);
    }

    public function pesananSaya(){

        $user = Auth::user();

        $carts = keranjang::onlyTrashed()->where('user_id', $user->id)->where('status', 'Menunggu Pembayaran')->with('menu')->paginate(8);

        return view('pesanan-saya',['carts' => $carts, 'title' => 'Pesanan Saya']);
    }

    public function statusCateringDone(){
        $user = Auth::user();

        $carts = keranjang::onlyTrashed()->where('user_id', $user->id)->where('status','Done')->with('menu')->paginate(8);

        return view('pesananDone',['carts' => $carts, 'title' => 'Pesanan Saya']);
    }

    public function confirm(Request $request, $productId){
        
        $user = Auth::user();
        $harga = keranjang::where('user_id', $user->id)->get();
        $data = session()->get('data');
        $jadwalDrop = session()->get('jadwalDrop');
        foreach ($harga as $cartItem) {
            $productId = $cartItem->menu_id;
            $quantity = $cartItem->jumlah;
            
            $product = menu::find($productId);
            
            $product->stock -= $quantity;
            $product->save();
            $jadwalCat=$request->jadwal;
            if($cartItem->dropOrder_name !== null){
                $cartItem->jadwal = $jadwalDrop;
            }
            else{
                $cartItem->jadwal = $jadwalCat;
                if($jadwalCat === '1 Minggu'){
                    $cartItem->totalharga = $cartItem->totalharga * 7;
                }
                else if($jadwalCat === '1 Bulan'){
                    $cartItem->totalharga = $cartItem->totalharga * 30;
                }
                else if($jadwalCat === '3 Bulan'){
                    $cartItem->totalharga = $cartItem->totalharga * 90;
                }
            }
            $cartItem->save();
            
        }

        $totalPrice = 0;
        foreach($harga as $test){
            $totalPrice += $test->totalharga;
        }
        
        keranjang::where('user_id', $user->id)->delete();

        $carts = keranjang::where('user_id', $user->id)->get();
        return view('confirmOrder',['carts' => $carts, 'price' => $totalPrice,'title' => 'Confirm Order']);
     }

    }
    