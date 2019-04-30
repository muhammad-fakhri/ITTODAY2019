@extends('layouts.navbar2')

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body>
				
		<div class="main-container" style="background: url('/img/footer.png') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
		<section class="fullscreen overlay">
		        <div class="container v-align-transform">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
		                    <div class="feature bordered text-center">  
		                        <h3 class="uppercase" style="color:white;">Login</h3>
		                       
		                        <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row">
                                    <!-- <label for="email" style="color: white;" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label> -->

                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" onfocus="this.placeholder = ''"onblur="this.placeholder = 'E-Mail Address'" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <!-- <label for="password" style="color: white;" class="col-md-4 col-form-label text-md-right">Password</label> -->

                                    <div class="col-md-10 col-md-offset-1">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Password'"  required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6 col-md-offset-1">
                                        <div class="checkbox" style="color: #FFFFFF !important;">
                                            <label>
                                                <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="form-group row mb-0">
                                        <div class="col-md-10 col-md-offset-1">
                                            <button style="font-size: 14px; background-color: #7c6bee" type="submit" class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </div>
                                    <!-- <a href="{{route('password.request')}}">Forget your password?</a> -->
                                    <div>
                                        <p style="margin-bottom:0px;">Not a member yet?</p>
                                        <a class="btn btn-white col-md-10 col-md-offset-1" onclick="alert('Pendaftaran Kompetisi Telah Ditutup.')" style="text-decoration: none;">
                                            Register
                                        </a>
                                    </div>
                                </div>
                            </form>
		                    </div>
		                </div>
		            </div>
		            
		        </div>
		        
		    </section></div>
		
				
	<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
				
@endsection