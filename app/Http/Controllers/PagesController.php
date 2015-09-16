<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function showAbout () { //showAbout is an action
      return view('about');
    }
    public function showContact () { //showContact is an action
      return view('contact');
    }
}
