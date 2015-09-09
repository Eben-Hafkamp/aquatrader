<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    // $product = \App\Models\Product::find(1);
    // return type->$product;

    // $users = \App\Models\User::all();
    // return $users;

    // $type = \App\Models\Type::find(2);
    // return $type->products;

    // $orders = \App\Models\Order::find(1);
    // return $orders->user;

    // $order = \App\Models\Order::find(1);
    // return $order->products;

    // $type = new \App\Models\Type();
    // $type->name = 'Plankton';
    // $type->save();
    //
    // return $type;

    // $user = \App\Models\User::create([
    //   'username' => 'JoeJai',
    //   'firstname' => 'Kinky-Joe',
    //   'lastname' => 'Jai-Tea',
    //   'email' => 'JaiLovesTea@teamail.com',
    //   'password' => '1'
    //   ]);
    //
    //   return $user;

    // return view('welcome');

    // return view('about');
    // return view('contact');
    return view('welcome');
});

    Route::get('about', function () {
      return view('about');
    });

    Route::get('contact', function () {
      return view('contact');
    });

    Route::get('types/{id}', function ($id) { // {} id is determined by the user
      $type = \App\Models\Type::find($id);
      // return view('types', ['goldfish'=>$type]);
      return view('types', compact("type")); //use compact to avoid using keys
    });

    Route::get('products/create', function () {
      return view('create_product');
    });
