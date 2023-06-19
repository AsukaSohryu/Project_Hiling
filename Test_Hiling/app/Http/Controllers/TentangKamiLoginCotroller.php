<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiLoginCotroller extends Controller
{
    public function TentangKamiLogin()
    {
        return view('login_ver.TentangKamiLogin');
    }
}
