<?php

use App\Http\Controllers\AlamBandung_LoginCotroller;
use App\Http\Controllers\AlamBandungController;
use App\Http\Controllers\AlamBogor_LoginController;
use App\Http\Controllers\AlamBogorController;
use App\Http\Controllers\AlamJakarta_LoginController;
use App\Http\Controllers\AlamJakartaController;
use App\Http\Controllers\CekOrder_Login_HistoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CekOrder_NoLoginController;
use App\Http\Controllers\homeLoginController;
use App\Http\Controllers\KulinerBandung_LoginController;
use App\Http\Controllers\KulinerBandungController;
use App\Http\Controllers\KulinerBogor_LoginController;
use App\Http\Controllers\KulinerBogorController;
use App\Http\Controllers\KulinerJakarta_LoginController;
use App\Http\Controllers\KulinerJakartaController;
use App\Http\Controllers\LugsGravityLembang_LoginController;
use App\Http\Controllers\LugsGravityLembangController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\MenuPembayaranController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\SejarahBandung_LoginController;
use App\Http\Controllers\SejarahBandungController;
use App\Http\Controllers\SejarahBogor_LoginController;
use App\Http\Controllers\SejarahBogorController;
use App\Http\Controllers\SejarahJakarta_LoginController;
use App\Http\Controllers\SejarahJakartaController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TentangKamiLoginCotroller;
use App\Http\Controllers\WahanaBandung_LoginController;
use App\Http\Controllers\WahanaBandungController;
use App\Http\Controllers\WahanaBogor_LoginController;
use App\Http\Controllers\WahanaBogorController;
use App\Http\Controllers\WahanaJakarta_LoginController;
use App\Http\Controllers\WahanaJakartaController;
use App\Http\Controllers\WisataAlam_LoginController;
use App\Http\Controllers\WisataAlamController;
use App\Http\Controllers\WisataKuliner_LoginController;
use App\Http\Controllers\WisataWahanaController;
use App\Http\Controllers\WisataSejarahController;
use App\Http\Controllers\WisataKulinerController;
use App\Http\Controllers\WisataWahana_LoginController;

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

//No Login Version
Route::get('/', [HomeController::class, 'index']);

Route::get('/Masuk', [UserController::class, 'Masuk']);

Route::get('/Daftar', [UserController::class, 'Daftar']);

Route::get('/LupaPassword', [LupaPasswordController::class, 'LupaPassword']);

Route::get('/TentangKami', [TentangKamiController::class, 'Tentangkami']);

Route::get('/CekOrder_NoLogin', [CekOrder_NoLoginController::class, 'CekOrder_NoLogin']);

Route::get('/WisataAlam', [WisataAlamController::class, 'WisataAlam']);

Route::get('/WisataWahana', [WisataWahanaController::class, 'WisataWahana']);

Route::get('/WisataKuliner', [WisataKulinerController::class, 'WisataKuliner']);

Route::get('/WisataSejarah', [WisataSejarahController::class, 'WisataSejarah']);

Route::get('/AlamBandung', [AlamBandungController::class, 'AlamBandung']);

Route::get('/AlamBogor', [AlamBogorController::class, 'AlamBogor']);

Route::get('/AlamJakarta', [AlamJakartaController::class, 'AlamJakarta']);

Route::get('/KulinerBandung', [KulinerBandungController::class, 'KulinerBandung']);

Route::get('/KulinerBogor', [KulinerBogorController::class, 'KulinerBogor']);

Route::get('/KulinerJakarta', [KulinerJakartaController::class, 'KulinerJakarta']);

Route::get('/SejarahBandung', [SejarahBandungController::class, 'SejarahBandung']);

Route::get('/SejarahBogor', [SejarahBogorController::class, 'SejarahBogor']);

Route::get('/SejarahJakarta', [SejarahJakartaController::class, 'SejarahJakarta']);

Route::get('/WahanaBandung', [WahanaBandungController::class, 'WahanaBandung']);

Route::get('/WahanaBogor', [WahanaBogorController::class, 'WahanaBogor']);

Route::get('/WahanaJakarta', [WahanaJakartaController::class, 'WahanaJakarta']);

Route::get('/LugsGravityLembang', [LugsGravityLembangController::class, 'LugsGravityLembang']);

Route::POST('/Daftar', [UserController::class, 'SimpanDataDaftar'])->name('postmasuk');

Route::POST('/Masuk', [UserController::class, 'CekDataMasuk'])->name('checkmasuk');

//Login Version
Route::get('/homepage', [homeLoginController::class, 'homeLogin'])->name('homeloginpage');

Route::get('/TentangKamiLogin', [TentangKamiLoginCotroller::class, 'TentangkamiLogin']);

Route::get('/CekOrder_Login_History', [CekOrder_Login_HistoryController::class, 'CekOrder_Login_History']);

Route::get('/WisataAlam_Login', [WisataAlam_LoginController::class, 'WisataAlam_Login']);

Route::get('/WisataWahana_Login', [WisataWahana_LoginController::class, 'WisataWahana_Login']);

Route::get('/WisataKuliner_Login', [WisataKuliner_LoginController::class, 'WisataKuliner_Login']);

Route::get('/WisataSejarah_Login', [WisataSejarahController::class, 'WisataSejarah']);

Route::get('/AlamBandung_Login', [AlamBandung_LoginCotroller::class, 'AlamBandung_Login']);

Route::get('/AlamBogor_Login', [AlamBogor_LoginController::class, 'AlamBogor_Login']);

Route::get('/AlamJakarta_Login', [AlamJakarta_LoginController::class, 'AlamJakarta_Login']);

Route::get('/KulinerBandung_Login', [KulinerBandung_LoginController::class, 'KulinerBandung_Login']);

Route::get('/KulinerBogor_Login', [KulinerBogor_LoginController::class, 'KulinerBogor_Login']);

Route::get('/KulinerJakarta_Login', [KulinerJakarta_LoginController::class, 'KulinerJakarta_Login']);

Route::get('/SejarahBandung_Login', [SejarahBandung_LoginController::class, 'SejarahBandung_Login']);

Route::get('/SejarahBogor_Login', [SejarahBogor_LoginController::class, 'SejarahBogor_Login']);

Route::get('/SejarahJakarta_Login', [SejarahJakarta_LoginController::class, 'SejarahJakarta_Login']);

Route::get('/WahanaBandung_Login', [WahanaBandung_LoginController::class, 'WahanaBandung_Login']);

Route::get('/WahanaBogor_Login', [WahanaBogor_LoginController::class, 'WahanaBogor_Login']);

Route::get('/WahanaJakarta_Login', [WahanaJakarta_LoginController::class, 'WahanaJakart_Login']);

Route::get('/LugsGravityLembang_Login', [LugsGravityLembang_LoginController::class, 'LugsGravityLembang_Login']);

Route::get('/profile', [profileController::class, 'Profile']);

Route::patch('/homepage', [profileController::class, 'Edit'])->name('EditProfile');

Route::get('/EditSukses', [profileController::class, 'EditProfileSuccess']);

Route::get('/MenuPembayaran', [MenuPembayaranController::class, 'MenuPembayaran']);

Route::POST('/keluar', [UserController::class, 'keluar'])->name('logout');
