<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="google-site-verification" content="Uzst5wqXNyD-Q3-l0mXVmfW3mbKDr1duRekJAw4Wd8k" />
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
		<link href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
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
		                <div class="module left">
		                    <ul class="menu">
		                        <li>
		                            <a href="/">Home</a>
		                        </li>
		                        <li class="has-dropdown">
		                            <a href="#">
		                                Competition
		                            </a>
		                            <ul>
									<li><a href="{{route('appstoday')}}">AppsToday</a></li>
									<li><a href="{{route('hacktoday')}}">HackToday</a></li>
									<li><a href="{{route('business')}}">Business IT Case</a></li>
		                            </ul>
		                        </li>
								<li class="has-dropdown">
		                            <a href="#">
		                                Event
		                            </a>
		                            <ul>
		                                <li>
										<a href="{{route('seminar')}}">National Seminar</a>
		                                </li>
		                            </ul>
		                        </li>
		                        <li>
		                            <a href="http://himalkom.cs.ipb.ac.id/">
		                                Himalkom IPB
		                            </a>
		                        </li>
		                    </ul>
		                </div>
		               
		                <div class="module widget-handle left">
		                    <ul class="menu">
							@guest
							<li class="has-dropdown">
		                            <a href="#">
		                                Login
		                            </a>
		                            <ul>
		                                <li>
										<a onclick="alert('Event telah berakhir.')">Login</a>
		                                </li>
   										<li>
		                                <li>
										<a onclick="alert('Pendaftaran Kompetisi Telah Ditutup.')">Register</a>
		                                </li>
   										<li>
		                            </ul>
		                        </li>
							@else
								<li>
										<a href="#" class="has-dropdown">{{ Auth::user()->name }}</a>
										<ul>
											<li>
												<a href="{{ route('team.profile') }}">Profile</a>
											</li>
											<li>
												<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
											</li>
										</ul>
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