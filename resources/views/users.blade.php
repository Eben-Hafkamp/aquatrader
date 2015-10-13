@extends('templates.main')

@section('content')

  <h1>Profile</h1>

  <h5>Username:</h5>
  <h4 data-field="username">{{$user->username}}</h4>

  <h5>First Name:</h5>
  <h4 data-field="firstname">{{$user->firstname}}</h4>

  <h5>Last Name:</h5>
  <h4 data-field="lastname">{{$user->lastname}}</h4>

  <h5>Email:</h5>
  <h4 data-field="email">{{$user->email}}</h4>

@stop
