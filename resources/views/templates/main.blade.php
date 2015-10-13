<!-- we only want the middle section if it is an ajax request -->
<!-- (Request::) this is how we allow access to the request using fisad method -->
@if(Request::ajax() == false)
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Your Page Title Here :)</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
  ================================================== -->
  	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href={{asset("stylesheets/base.css")}}>
<!-- 	<link rel="stylesheet" href="stylesheets/skeleton.css"> -->
	<link rel="stylesheet" href={{asset("stylesheets/layout.css")}}>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>



	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
		<header>
			<nav>
				<ul class="group">
					<h2 class="logo">Aquatrader <i class="icon-tint"></i></h2>

					@foreach(\App\Models\Type::all() as $type)
					<li><a href="{{url('types/'.$type->id)}}">{{$type->name}}</a></li>
					@endforeach

					@if(Auth::check())
						<li class="clear"><i class="icon-user"></i><a href="{{url('users/'.Auth::user()->id)}}">Account</a></li>
						<li><i class="icon-lock"></i><a href="{{url('logout')}}">Logout</a></li>
					@else
						<li><i class="icon-lock"></i><a href="{{url('login')}}">Login</a></li>
					@endif
					<li><a href="{{url('users/create')}}" >Sign Up</a></li>
					<li><i class="icon-shopping-cart"></i><a href="" >2 items</a></li>
					<li><a href="">About</a></li>
					<li><a href="">Contact</a></li>

				</ul>
			</nav>
		</header>
		<div class="main group">

@endif

      @yield('content')

@if(Request::ajax() == false)
    </div>
		<footer></footer>

		<div style="display:none;" id="token">{{ csrf_token() }}</div>

	</div><!-- container -->


<!-- End Document
================================================== -->
	<script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('js/spin.min.js')}}"></script>
	<script src="{{asset('js/history/html5/jquery.history.js')}}"></script>
	<script src="{{asset('js/jquery.jeditable.js')}}"></script>
</body>
</html>

@endif
