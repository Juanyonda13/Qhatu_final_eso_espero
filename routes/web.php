<?php
use App\Http\Controllers\CartController;
use App\Http\Controllers\ArtesaniaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts.header');
});
///index/////////1
Route::get('/index',[ArtesaniaController::class,'index'])->name('index');
//////el detalle da la artesania
Route::get('/detalle_artesania/{id_artesania}',[ArtesaniaController::class,'detalle_artesania'])->name('detalleArtesania');
//////compra del producto :(
Route::get('/pasarela_compra',[ArtesaniaController::class,'pasarela'])->name('pasarela');


///INDEX Route::get('/', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
