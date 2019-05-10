<?php

namespace App\Http\Controllers\Authen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function getLogin() {
        return view('cntt_auth.login');
    }

    public function logInProcess(Request $request) {
        $credential = array(
            "email" => $request->txtEmail,
            "password" => $request->txtPass,
            //"cnttUserLevel" => 0
        );
        
        if (Auth::attempt($credential)) {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect()->route('admin.login.show');
        }
    }

    public function logOutProcess() {
        Auth::logout();
        return redirect()->route('admin.login.show');
    }
}
