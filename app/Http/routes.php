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

      // return $user;

    // return view('welcome');

    // return view('about');
    // return view('contact');
    return view('welcome');
});


/*|--------------------------------------------------------------------------
| GETTING URLS
|--------------------------------------------------------------------------*/

    Route::get('about', 'PagesController@showAbout');
      // return view('about'); // function moved to controller

    Route::get('contact', 'PagesController@showContact');
      // return view('contact'); // function moved to controller

    Route::get('types/{id}', function ($id) { // {} id is determined by the user
      $type = \App\Models\Type::find($id);
      // return view('types', ['goldfish'=>$type]);
      return view('types', compact("type")); //use compact to avoid using keys
    });

    // Route::get('products/create', 'ProductsController@create');
      // return view('create_product');


/*|--------------------------------------------------------------------------
| Create a Product then show a product then update a product
|--------------------------------------------------------------------------*/

    // Route::post('products', 'ProductsController@store'); //request is dependency injection
      // $product = \App\Models\Product::create($request->all());
      //
      // //move file from temp location to productPhtots
      // $fileName = \Carbon\Carbon::now()->timestamp."_photo.jpg";
      //
      // $request->file('photo')->move('productphotos', $fileName);
      //
      // $product->photo = $fileName;
      // $product->save();
      //
      // return redirect('types/'.$product->type->id);

    // Route::get('products/{id}/edit', 'ProductsController@edit');
      // $product = \App\Models\Product::find($id);
      // return view('update_product', compact("product"));

    // Route::put('products/{id}', 'ProductsController@update'); //dependency injection with required fields
      // $product = \App\Models\Product::find($id);
      // $product->fill($request->all()); //data as array and sanitized
      // $product->save();
      // return redirect('types/'.$product->type->id);

      Route::resource('products', 'ProductsController');

/*|--------------------------------------------------------------------------
| GETTING URLS
|--------------------------------------------------------------------------*/

    // Route::get('users/create', function () {
    //   return view('create_user');
    // });

    // Route::get('users/{id}', function ($id) {
    //     $user = \App\Models\User::find($id);
    //     return view('users', compact('user'));
    // });

/*|--------------------------------------------------------------------------
| Create a user then show a user then update a user
|--------------------------------------------------------------------------*/

    // Route::post('users', function (\App\Http\Requests\CreateUserRequest $request) {
    //   $user = \App\Models\User::create($request->all());
    //
    //   //encrypt password
    //   $user->password = bcrypt('$user->password');
    //   $user->save();
    //
    //   return redirect('users/'.$user->id);
    // });

    // Route::get('users/{id}/edit', function ($id) {
    //     $user = \App\Models\User::find($id);
    //     return view('update_user', compact('user'));
    // });

    // Route::put('users/{id}', function ($id,\App\Http\Requests\UpdateUserRequest $request) {
    //     $user = \App\Models\User::find($id);
    //     $user->fill($request->all());
    //     $user->save();
    //     return redirect('users/'.$user->id);
    // });

    Route::resource('users', 'UsersController');

    Route::get('login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@processLogin');
    Route::get('logout', 'LoginController@logout');
