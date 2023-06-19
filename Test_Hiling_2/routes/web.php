<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CekOrder_NoLoginController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\WisataAlamController;
use App\Http\Controllers\WisataWahanaController;
use App\Http\Controllers\WisataSejarahController;
use App\Http\Controllers\WisataKulinerController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/Masuk', [UserController::class, 'Masuk']);

Route::get('/Daftar', [UserController::class, 'Daftar']);

Route::get('/TentangKami', [TentangKamiController::class, 'Tentangkami']);

Route::get('/CekOrder_NoLogin', [CekOrder_NoLoginController::class, 'CekOrder_NoLogin']);

Route::get('/WisataAlam', [WisataAlamController::class, 'WisataAlam']);

Route::get('/WisataWahana', [WisataWahanaController::class, 'WisataWahana']);

Route::get('/WisataKuliner', [WisataKulinerController::class, 'WisataKuliner']);

Route::get('/WisataSejarah', [WisataSejarahController::class, 'WisataSejarah']);

Route::post('/Daftar', [UserController::class, 'SimpanDataMasuk'])->name('postmasuk');

// Route::get('welcome', function () {
//     return view('welcome');
// });

// Route::get('TentangKami', function () {
//     return view('TentangKami');
// });

// Route::get('CekOrder_NoLogin', function () {
//     return view('CekOrder_NoLogin');
// });

// Route::get('WisataAlam', function () {
//     return view('WisataAlam');
// });

// Route::get('WisataKuliner', function () {
//     return view('WisataKuliner');
// });

// Route::get('WisataSejarah', function () {
//     return view('WisataSejarah');
// });

// Route::get('WisataWahana', function () {
//     return view('WisataWahana');
// });


