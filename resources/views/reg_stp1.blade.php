@extends('layouts.navbar2')

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Register - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body style="background: url('/img/footer.png') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;  background-size: cover;">	
		<div class="main-container">
		    <section class="image-bg overlay" style="padding-top:80px;">
		          <div class="container">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
		                    <div class="feature bordered text-center">
		                        <h3 class="uppercase">Register</h3>
                                        
                                <form method="POST" action = '{{ url("/daftar") }}'>
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="{{$users}}">

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Group Member </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'member_one' placeholder="Group Leader" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Group Leader [required]'" required />
                                            <input type = 'text' name = 'member_two' placeholder="Group Member 1" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Group Member 1'"/>
                                            <input type = 'text' name = 'member_three' placeholder="Group Member 2" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Group Member 2'" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Competition </label> -->
                                        <div class="col-md-10 col-md-offset-1 dropdown">
                                            <div class="select-option">
                                                <i class="ti-angle-down"></i>
                                                <select name="tipe" class="select-option">
                                                    <option selected value="">Select a Competition</option>
                                                    <!-- <option value="AppsToday">AppsToday</option> -->
                                                    <option value="HackToday">HackToday</option>
                                                    <!-- <option value="Business IT Case">Business IT Case</option> -->
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> University/School </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'school'  placeholder="Institution Name" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Institution Name'" required/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Province </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'province'  placeholder="Province" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Province'"  required/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Phone Number </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text'  onkeypress='validate(event)' name = 'phone_num' placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" onkeypress="return isNumberKey(event);"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Line ID </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'line_id'  placeholder="LINE ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'LINE ID'"  required/>
                                        </div>
                                    </div>

                                    <button type="submit" name='submit' class="btn btn-primary">
                                        Register
                                    </button>

                                </form>
		                    </div>
		                </div>
		            </div> 
		        </div>
            </section>
        </div>	
	    <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.js"></script>
        <script src="js/scripts.js"></script>
        <script>
            function validate(evt) {
                var theEvent = evt || window.event;
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode( key );
                var regex = /[0-9]|\./;
                if( !regex.test(key) ) {
                    theEvent.returnValue = false;
                    if(theEvent.preventDefault) theEvent.preventDefault();
                }
            }
        </script>
    </body>
</html>
				
@endsection