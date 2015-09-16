<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm () {
      return view('login');
    }

    public function processLogin (Request $request, \Illuminate\Contracts\Auth\Guard $auth) {
      // dd($auth);

      $credential = $request->only('username', 'password');

      if ($auth->attempt($credential)) {
          //can login
          // return redirect('login')->with('message', 'You Suck, Try Again');
          return redirect()->intended('types/1');

      } else {

        return 'Nooooo!';

      }
    }

    public function logout (\Illuminate\Contracts\Auth\Guard $auth) {
      $auth->logout();
    }
}
