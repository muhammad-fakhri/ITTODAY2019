@extends('layouts.navbar2')

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/modena.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
        <style>
            .text-input {
                -fx-text-fill: -fx-text-inner-color;
                -fx-highlight-fill: derive(-fx-control-inner-background,-20%);
                -fx-highlight-text-fill: -fx-text-inner-color;
                -fx-prompt-text-fill: derive(-fx-control-inner-background,-30%);
                -fx-background-color: linear-gradient(to bottom, derive(-fx-text-box-border, -10%), -fx-text-box-border),
                    linear-gradient(from 0px 0px to 0px 5px, derive(-fx-control-inner-background, -9%), -fx-control-inner-background);
                -fx-background-insets: 0, 1;
                -fx-background-radius: 3, 2;
                -fx-cursor: text;
                -fx-padding: 0.333333em 0.583em 0.333333em 0.583em; /* 4 7 4 7 */
            }
            .text-input:focused {
                -fx-highlight-fill: -fx-accent;
                -fx-highlight-text-fill: white;
                -fx-background-color: 
                    -fx-focus-color,
                    -fx-control-inner-background,
                    -fx-faint-focus-color,
                    linear-gradient(from 0px 0px to 0px 5px, derive(-fx-control-inner-background, -9%), -fx-control-inner-background);
                -fx-background-insets: -0.2, 1, -1.4, 3;
                -fx-background-radius: 3, 2, 4, 0;
                -fx-prompt-text-fill: transparent;
            }
        </style>   
    </head>
    <body>
				
		<div class="main-container">
		<section class="cover fullscreen image-bg">
		        <div class="background-image-holder">
		            <img alt="image" class="background-image" src="img/bglogin.png" style=" background-repeat: no-repeat; background-attachment: fixed;">
		        </div>
		        <div class="container v-align-transform">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
		                    <div class="feature bordered text-center">
		                        <h3 class="uppercase" >Admin Login</h3>
		                       
                                <form method="POST" action="{{ route('admin.login') }}">
                                    @csrf
                                    <div class="form-group row">
                                        <!-- <label for="email" style="color: white;" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} text-input" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" onfocus="this.placeholder = ''"onblur="this.placeholder = 'E-Mail Address'" required>

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
                                            <input id="password" type="password" class="text-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Password'"  required>

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
