<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title>IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
		{{-- <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
		<link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
		<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
		<link href="{{asset('css/theme.css')}}" rel="stylesheet">
		<link href="{{asset('css/custom.css')}}" rel="stylesheet"> --}}
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="nav-container">
		<nav class=" transparent absolute">
		        <div class="nav-bar">
		            <div class="module left">
		                <a href="/">
		                    <img class=" image-xs logo logo-light" alt="ITToday" src="img/logoittoday.png">
		                    <img class="image-xs logo logo-dark" alt="ITToday" src="img/logoittoday.png">
		                </a>
		            </div>
		            <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
		                <i class="ti-menu"></i>
		            </div>
		            <div class="module-group right">
		               
		                <div class="module widget-handle left">
		                    <ul class="menu">
							@guest
								<ul class="menu inline-block pull-right">
									<li><a class="btn btn-sm hidden-xs hidden-sm hidden-md" style="font-size: 16px;" href="{{ route('login') }}">Login</a></li>
								</ul>
							@else
								<li class="nav-item dropdown pull-right">
								<a class="nav-link" href="{{route('admin.home')}}" role="button">
									{{ Auth::user()->name }}
								</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
												document.getElementById('logout-form').submit();">
									Logout
								</a>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									@csrf
								</form>
								</li>
							@endguest
		                    </ul>
		                </div>
		            </div>
		            
		        </div>
		    </nav>
			
		<main class="py-4" >
			@yield('content')

		</main>
		{{-- Back to top button --}}
		{{-- <a href="#" id="myBtn" title="Go to top">Back to top</a> --}}
		</div>
		
	</body>
	<script src="{{asset('js/app.js')}}"></script>
	{{-- animation --}}
	<script src="{{asset('js/main.js')}}"></script>
</html>