<?php

use App\Http\Controllers\artikelController;
use App\Http\Controllers\ConfirmOrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\dropshipController;
use App\Http\Controllers\forgetPassController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\keranjangController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\managementController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\testimoniController;
use App\Http\Controllers\recommendationController;
use App\Models\testimoni;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [homeController::class, 'index']);

Route::get('/menu', [menuController::class, 'index']);

Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [loginController::class, 'auth']);

Route::post('/logout', [loginController::class, 'logout']);

Route::get('/register', [registerController::class, 'index'])->middleware('guest');

Route::post('/register', [registerController::class, 'store']);

Route::get('/forgot-password', [forgetPassController::class, 'index'])->name('password.request');
Route::post('forgot-password', [forgetPassController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [forgetPassController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [forgetPassController::class, 'reset'])->name('password.update');

Route::get('/artikel', [artikelController::class, 'index']);

Route::get('/testimoni', [testimoniController::class, 'index'])->name('testimoni');

Route::get('/detail/{menu}', [homeController::class, 'detail'])->name('home.detail')->middleware('auth');

Route::get('/menu/detail/{menu}', [menuController::class, 'detail'])->name('menu.detail')->middleware('auth');

Route::get('/artikel/{art}', [artikelController::class, 'detail'])->name('artikel.detail')->middleware('auth');

Route::get('/rekomendasi', [recommendationController::class, 'index'])->middleware('auth');

Route::post('/rekomendasi/detail', [recommendationController::class, 'recommend'])->middleware('auth');

Route::get('/dropship', [dropshipController::class, 'index'])->middleware('auth');

Route::post('/dropshipMenu', [dropshipController::class, 'dropshipMenu'])->middleware('auth');

Route::get('/dropshipMenu', [dropshipController::class, 'dropshipMenuIndex'])->middleware('auth');

Route::post('/dropship', [dropshipController::class, 'submit'])->middleware('auth');

Route::get('/dropship/detail/{menu}', [dropshipController::class, 'detail'])->name('dropship.detail')->middleware('auth');

Route::get('/order', [keranjangController::class, 'index'])->name('order.list')->middleware('auth');

Route::post('/keranjang/{productId}', [keranjangController::class, 'store'])->name('keranjang.store')->middleware('auth');

Route::post('/keranjangDrop/{productId}', [keranjangController::class, 'storeDrop'])->name('keranjangDrop.store')->middleware('auth');

Route::put('/keranjang/{productId}', [keranjangController::class, 'update'])->name('keranjang.update')->middleware('auth');

Route::delete('/keranjang/{productId}', [keranjangController::class, 'destroy'])->name('keranjang.destroy');

Route::post('/confirmOrder/{id}', [keranjangController::class, 'confirm'])->name('confirm.order')->middleware('auth');

Route::get('/pesananSaya', [keranjangController::class, 'pesananSaya'])->name('pesanan.saya')->middleware('auth');

Route::get('/selesai', [keranjangController::class, 'statusCateringDone'])->middleware('auth');

Route::get('/management', [managementController::class, 'index'])->middleware('auth');

Route::get('/ubahSandi', [managementController::class, 'changePasswordIndex'])->middleware('auth');

Route::post('/ubahSandi', [managementController::class, 'changePassword'])->middleware('auth');

Route::get('/updateProfile', [managementController::class, 'updateProfileIndex'])->middleware('auth');

Route::post('/updateProfile', [managementController::class, 'updateProfile'])->middleware('auth');

Route::get('/Status-Katering', [managementController::class, 'statusCatering'])->middleware('auth');

Route::get('/Testimoni-Saya', [testimoniController::class, 'testimoniSaya'])->middleware('auth');

Route::post('/Testimoni-Saya', [testimoniController::class, 'testimoniSayaSubmit'])->middleware('auth');

// Route::get('/pesananSaya', function () {
//     return view('pesanan-saya', ["title" => "Pesanan Saya"]);
//     //return "Halaman Testimoni";
// });