<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{

  public function __construct () {
    $this->middleware('auth', ['except' => ['create', 'store']]); //for anything other than than the create(show form) and submit apply the authentication
  }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('create_user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(\App\Http\Requests\CreateUserRequest $request)
    {
      $user = \App\Models\User::create($request->all());

      //encrypt password
      $user->password = bcrypt($user->password);
      $user->save();

      return redirect('users/'.$user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
      $user = \App\Models\User::find($id);
      return view('users', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
      $user = \App\Models\User::find($id);
      return view('update_user', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(\App\Http\Requests\UpdateUserRequest $request, $id)
    {
      $user = \App\Models\User::find($id);
      $user->fill($request->all());
      $user->save();
      return redirect('users/'.$user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
