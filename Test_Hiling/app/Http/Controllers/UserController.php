<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function Daftar()
    {
        return view('Daftar');
    }

    public function SimpanDataDaftar(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','email'],
            'phone' => ['required'],
            'password_confirmation' => ['required'],
            'password' => ['required','string','min:6', 'confirmed'],
        ]);

        // dd($validatedData);

        // $request['password'] = bcrypt($request['password']);

        $validatedData['password'] = Hash::make($validatedData['password']); 

        User::create($validatedData);

        return view('Masuk');
    }

    public function CekDataMasuk(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect(route('homeloginpage'));
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function keluar(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('checkmasuk');
    }

}
