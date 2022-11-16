<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {
        if($user = Auth::user()) {
            if($user->level == 'admin') {
                return redirect()->intended('admin');
            }elseif($user->level == 'editor') {
                return redirect()->intended('editor');
            }
        }
    return view('login');
    }
    public function proses_login(Request $request) {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);
        $kredensil = $request->only('username','password');
            if(Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->level == 'editor') {
                    return redirect()->intended('admin');
                }elseif($user->level == 'editor') {
                    return redirect()->intended('editor');
            }
            return redirect()->intended('/');
        }
    return redirect('login')
        ->withInput()
        ->withErrors(['login_gagal' => 'ini kredensial tidak sama dengan baris']);

    }
}
