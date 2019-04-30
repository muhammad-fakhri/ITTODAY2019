@extends('layouts.navbar2')

@section('content')

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Edit Profile - IT TODAY 2018</title>
        <link rel="shortcut icon" href="img/logoittodayhitam.png" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400%7CRaleway:100,400,300,500,600,700%7COpen+Sans:400,500,600' rel='stylesheet' type='text/css'>
    </head>
    <body>	
		<div class="main-container">
		    <section class="image-bg overlay" style="padding-top:80px; padding-bottom: 0px">
		        <div class="background-image-holder">
		            <img alt="image" class="background-image" src="img/bglogin.png" style="background-repeat: no-repeat; background-attachment: fixed;">
		        </div>
		        <div class="container">
		            <div class="row">
		                <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1">
		                    <div class="feature bordered text-center">
		                        <h3 class="uppercase">Edit Profile</h3>
                                <form method="POST" action = '{{url("/saveprofile")}}'>
                                @csrf
                                <div class="form-group row">
                                    <input type="hidden" name="id" value="{{$users}}">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> University/School </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'groupname'  placeholder="Group Name" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Group Name'" required value="{{App\User::find($users)->name}}" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Group Member </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'member_one' placeholder="Group Leader" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Group Leader'" required value="{{$data->member_one}}" />
                                            <input type = 'text' name = 'member_two' placeholder="Group Member 1" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Group Member 1'" value="{{$data->member_two}}"/>
                                            <input type = 'text' name = 'member_three' placeholder="Group Member 2" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Group Member 2'" value="{{$data->member_three}}"/>
                                        </div>
                                    </div>
									
									
                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> University/School </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'school'  placeholder="Institution Name" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Institution Name'" required value="{{$data->school}}"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Province </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'province'  placeholder="Province" onfocus="this.placeholder = ''"onblur="this.placeholder = 'Province'"  required value="{{$data->province}}"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Phone Number </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'phone_num'  onkeypress='validate(event)' placeholder="Phone Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone Number'" onkeypress="return isNumberKey(event);" value="{{$data->phone_num}}"/>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <!-- <label for="name" class="col-md-4 col-form-label text-md-right"> Line ID </label> -->

                                        <div class="col-md-10 col-md-offset-1">
                                            <input type = 'text' name = 'line_id'  placeholder="LINE ID" onfocus="this.placeholder = ''" onblur="this.placeholder = 'LINE ID'"  required value="{{$data->line_id}}"/>
                                        </div>
                                    </div>
                                    <div class="row col-md-offset-2">
                                        <div class="col-lg-9" style="padding: 0px">
                                            <button type="submit" name="submit" class="btn btn-primary form-control" style="text-transform: uppercase;border-radius:0; background-color: #7c6bee;">SAVE CHANGES</button>
                                            <a href="/profile" type="cancel" name="cancel" class="btn">Cancel</a>
                                        </div>
                                    </div>
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