@extends('templates.main')

@section('content')
			<h2>Update User</h2>
			<p>blallendus dolores nemo. Fuga, nostrum!</p>
			<!-- creates a token and gives it a unique value to protect your form from hackers -->
			{!! Form::model($user, array('url' => 'users/'.$user->id, 'method'=>'put')) !!}
				<fielset>
					{!! Form::label('firstname', 'First Name') !!}
					{!! Form::text('firstname') !!}
					{!! $errors->first('firstname', '<p class="error">:message</p>') !!}

					{!! Form::label('lastname', 'Last Name') !!}
					{!! Form::text('lastname') !!}
					{!! $errors->first('lastname', '<p class="error">:message</p>') !!}

					{!! Form::label('username', 'Username') !!}
					{!! Form::text('username') !!}
					{!! $errors->first('username', '<p class="error">:message</p>') !!}

					{!! Form::label('email', 'Email') !!}
					{!! Form::text('email') !!}
					{!! $errors->first('email', '<p class="error">:message</p>') !!}

					{!! Form::submit('Submit') !!}
				</fielset>
			{!! Form::close() !!}
@stop
