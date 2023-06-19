<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CekOrder_NoLoginController extends Controller
{
    public function CekOrder_NoLogin()
    {
        return view('CekOrder_NoLogin');
    }
}
