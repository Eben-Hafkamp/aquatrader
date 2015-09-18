@extends('templates.main')

@section('content')
    <h2>{{$type->name}}</h2>

    @foreach($type->products as $product)
			<article class="group">
				<a href="{{url('products/'.$product->id)}}"><img src="{{asset('productphotos/'.$product->photo)}}" alt=""></a>
				<a href="{{url('products/'.$product->id)}}"><h4>{{$product->name}}</h4></a>
				<p>{{$product->description}}</p>
				<span class="price"><i class="icon-dollar"></i> 4.00</span>
				<span class="addtocart"><i class="icon-plus"></i></span>
			</article>
    @endforeach
@stop
