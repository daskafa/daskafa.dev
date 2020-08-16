<?php

namespace App\Http\Controllers\Back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class authController extends Controller
{
    public function login(){
      return view('back.login');
    }

    public function loginPost(Request $request){
      if (Auth::attempt(['email' => $request->email,'password' => $request->password])) {
        return redirect()->route('homepage');
      }
      return redirect()->route('login')->withErrors('Email veya Şifre Hatalı');
    }

    public function logout(){
      Auth::logout();
      return redirect()->route('homepage');
    }

}//
