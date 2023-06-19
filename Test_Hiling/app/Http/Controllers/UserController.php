<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;



class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function Masuk()
    {
        return view('Masuk');
    }

    public function SimpanDataDaftar(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','email'],
            'phone' => ['required'],
            'password_confirmation' => ['required'],
            'password' => ['required','min:6', 'confirmed'],
        ]);

        // dd($validatedData);

        $request['password'] = bcrypt($request['password']);

        User::create($validatedData);

        return view('welcome');
    }

    public function Daftar()
    {
        return view('Daftar');
    }
}
