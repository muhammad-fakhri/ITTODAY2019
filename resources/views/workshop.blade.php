@extends('layouts.navbar2')



<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body style="background: url({{url('img/footer.png')}}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">
		<div class="main-container">
		<section class=" background-multiply pt240 pb240 pt-xs-120 pb-xs-120 image-bg parallax">
		   
		    <div class="container">
		        <div class="row">
		            <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
		                
		                <h1 class="mb56 mb-xs-24">
		                    TO BE ANNOUNCED
		                </h1>
		                <a class="btn btn-lg btn-white mb0" href="/">Home Page</a>
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
				
@yield('content')