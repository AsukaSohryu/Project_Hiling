<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Model\User;

class UserController extends Controller
{
    public function Masuk()
    {
        return view('Masuk');
    }

    public function SimpanDataMasuk(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'required|unique:users',
            'password' => 'required|min:6',
            'name' => 'required|max:255',
        ]);

        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return view('welcome');
    }

    public function Daftar()
    {
        return view('Daftar');
    }
}
