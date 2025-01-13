<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class AuthController extends Controller
{
    public function TampilRegistrasi(){
        return view('products.registrasi');
    }

    function submitRegistrasi(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        // dd($user);
        return redirect()->route('login.tampil');
    }

    function tampilLogin(){
        return view('products.login');
    }

    function submitlogin(Request $request) {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            $request->session()->regenerate();

            return redirect()->route('products.index'); 

        } else {
            return redirect()->back()->with('error', 'Gagal masuk karena email atau password salah');
        }
    }
}
