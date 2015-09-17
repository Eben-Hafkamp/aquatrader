<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
  public function showCart () {
    $items = array (
        'id' => 1,
              'name' => 'juicy picnic hamper',
              'price' => 120.00,
        'quantity' => 1
          );

    \Cart::insert($items);
    //dd(Cart::contents());
    return view('cart');
      }
}
