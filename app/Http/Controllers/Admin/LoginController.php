<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function index() {
        return view('cntt_admin/mod_login/login');
    }

    public function check(Request $request) {
        $credentials = $request->only('cnttUserEmail', 'cnttUserPassword');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('admin.dashboard');
        }
    }

    public function end() {

    }
}
