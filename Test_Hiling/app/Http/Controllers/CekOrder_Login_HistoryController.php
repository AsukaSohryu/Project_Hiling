<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekOrder_Login_HistoryController extends Controller
{
    public function CekOrder_Login_History()
    {
        $order = Order::where('user_id', '=', Auth::user()->id)->get();
        return view('login_ver.CekOrder_Login_History',[
            'order' => $order
        ]);
    }
}
