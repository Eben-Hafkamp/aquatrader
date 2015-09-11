@extends('templates.main')

@section('content')
			<h2>Update Product</h2>
			<p>blallendus dolores nemo. Fuga, nostrum!</p>
			<!-- creates a token and gives it a unique value to protect your form from hackers -->
			{!! Form::model($product, array('url' => 'products/'.$product->id, 'method'=>'put')) !!}
				<fielset>
					{!! Form::label('name', 'Product Name') !!}
					{!! Form::text('name') !!}
					{!! $errors->first('name', '<p class="error">:message</p>') !!}

					{!! Form::label('description', 'Description') !!}
					{!! Form::textarea('description') !!}
					{!! $errors->first('description', '<p class="error">:message</p>') !!}

					{!! Form::label('price', 'Price') !!}
					{!! Form::text('price') !!}
					{!! $errors->first('price', '<p class="error">:message</p>') !!}

					{!! Form::label('type_id', 'Product Type') !!}
					{!! Form::select('type_id', \App\Models\Type::lists('name', 'id')) !!}
					{!! $errors->first('type_id', '<p class="error">:message</p>') !!}

					{!! Form::submit('Submit') !!}
				</fielset>
			{!! Form::close() !!}
@stop
