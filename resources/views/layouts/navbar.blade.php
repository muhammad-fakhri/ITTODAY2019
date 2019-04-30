<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/themify-icons.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<div class="nav-container">
		    <nav class="absolute transparent">
		        <div class="nav-bar text-center">
		            <div class="col-md-2 col-md-push-5 col-sm-12 text-center">
		                <a href="/">
		                    <img alt="logo" class="image-xxs" src="img/logo-dark.png">
		                </a>
		            </div>

		            <div class="col-sm-12 col-md-5 col-md-pull-2 overflow-hidden-xs">
		                <ul class="menu inline-block pull-right">
		                    <li><a href="/">Home</a></li>
		                    <li><a href="#">Event</a>
		                        <ul>
									<li><a href="#appstoday">AppsToday</a></li>
									<li><a href="#hacktoday">HackToday</a></li>
									<li><a href="#business">Business IT Case</a></li>
									<li><a href="#seminar">Seminar</a></li>
		                        </ul>
							</li>
		                </ul>
		            </div>

		            <div class="col-sm-12 col-md-5 pb-xs-24">
						<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
								<ul class="menu inline-block pull-right">
									<li><a href="{{ route('login') }}">Login</a></li>
								</ul>
							@else
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										{{ Auth::user()->name }} <span class="caret"></span>
									</a>

									<div class="dropdown-menu" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
										onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
											Logout
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
											@csrf
										</form>
									</div>
								</li>
							@endguest
						</ul>
		            </div>
		        </div>

		        <div class="module widget-handle mobile-toggle right visible-sm visible-xs absolute-xs">
		            <i class="ti-menu"></i>
		        </div>
			</nav>
		<main class="py-4">
			@yield('content')
			@extends('layouts.footer')
        </main>
		</div>
	</body>
</html>
