@extends('templates.main')

@section('content')

<div class="login">
	<h1>Login</h1>
  {!! Form::open(['url' => 'login']) !!}
  {!! Form::text('username') !!}
  {!! $errors->first('username', '<p class="error">:message</p>') !!}
  {!! Form::password('password') !!}
  {!! $errors->first('password', '<p class="error">:message</p>') !!}
  {!! Form::submit('Submit') !!}
  {!! Form::close() !!}
	{{Session::get("message")}}
</div>
@stop
