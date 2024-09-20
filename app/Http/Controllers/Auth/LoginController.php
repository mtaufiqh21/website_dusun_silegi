<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        // tampilan login
        return view("auth.login");
    }

    public function login(Request $request)
    {
        // melakukan validasi sebelum percobaan masuk
        $credentials = $this->validate($request, [
            "email" => "required|email:dns",
            "password" => "required|max:16"
        ]);
        // jika user tidak tervalidasi maka throw error
        if (!Auth::attempt($credentials)) {
            return redirect()->back()->withInput()->with("errorLogin", "Email atau Password salah");
        };

        // membuat sesi baru
        $request->session()->regenerate();
        // redirect ke route dashboard
        return redirect()->route("dashboard")->with("login", "Selamat Datang!");
    }
}
