<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeLoginController extends Controller
{
    public function homeLogin()
    {
        return view('login_ver.HomeLogin');
    }
}
