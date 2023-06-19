<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class profileController extends Controller
{
    public function Profile()
    {
        $user = User::find(Auth::user()->id);
        return view('login_ver.profile', ['user' => $user]);
    }

    public function EditProfileSuccess()
    {
        return view('login_ver.EditProfileSuccess');
    }

    public function Edit(Request $request)
    {
        $olduser = User::find(Auth::user()->id);

        $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','email'],
            'phone' => ['required'],
            'password' => ['required','string','min:6'],
        ]);

        $olduser->name = $request->name;

        $olduser->phone = $request->phone;

        if(!(Hash::check($request->password, $olduser->password))){
            $olduser->password = Hash::make($request->password);
        }

        $olduser->save();

        return view('login_ver.EditProfileSuccess');
    }
}
