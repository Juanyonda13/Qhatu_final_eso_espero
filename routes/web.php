<?php

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
//////el detalle da la artesania
Route::get('/detalle_artesania/{id_artesania}',[ArtesaniaController::class,'detalle_artesania'])->name('detalleArtesania');
//////compra del producto :(
Route::get('/pasarela_compra',[ArtesaniaController::class,'pasarela'])->name('pasarela');