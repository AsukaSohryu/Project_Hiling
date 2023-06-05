<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

Route::post('/Daftar', [UserController::class, 'SimpanDataMasuk'])->name('postmasuk')

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('TentangKami', function () {
    return view('TentangKami');
});

Route::get('CekOrder_NoLogin', function () {
    return view('CekOrder_NoLogin');
});

Route::get('WisataAlam', function () {
    return view('WisataAlam');
});

Route::get('WisataKuliner', function () {
    return view('WisataKuliner');
});

Route::get('WisataSejarah', function () {
    return view('WisataSejarah');
});

Route::get('WisataWahana', function () {
    return view('WisataWahana');
});


