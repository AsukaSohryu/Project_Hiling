<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuPembayaranController extends Controller
{
    public function MenuPembayaran()
    {
        return view('login_ver.MenuPembayaran');
    }
}
