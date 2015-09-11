@extends('templates.main')

@section('content')

  <h1>Profile</h1>

  <h5>Username:</h5>
  <h4>{{$user->username}}</h4>

  <h5>First Name:</h5>
  <h4>{{$user->firstname}}</h4>

  <h5>Last Name:</h5>
  <h4>{{$user->lastname}}</h4>

  <h5>Email:</h5>
  <h4>{{$user->email}}</h4>
  
@stop
