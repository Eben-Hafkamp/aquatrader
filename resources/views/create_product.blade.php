@extends('templates.main')

@section('content')
			<h2>Add New Product</h2>
			<p>blallendus dolores nemo. Fuga, nostrum!</p>
			{!! Form::open(array('url' => 'foo/bar')) !!}
				<fielset>
					<label for="">Name.</label>
					<input type="text" name="" id="">

					<label for="">Email.</label>
					<input type="text" name="" id="">

					<label for="">Message.</label>
					<textarea type="text" name="" id=""></textarea>

					<input type="submit" value="Send">
				</fielset>
			{!! Form::close() !!}
@stop
