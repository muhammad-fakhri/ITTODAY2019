<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WELCOME TO IT TODAY 2019 !</title>
</head>

<body>
    <h2>Welcome to IT TODAY 2019 {{$user['name']}} !</h2>
    <br />
    Your registered email is {{$user['email']}} , Please click on the below link to verify your email account
    <br />
    <a href="{{url('user/verify', $user->verifyUser->token)}}">Verify Email</a>
    <p>If you did not create an account, no further action is required.</p>
    <br>
    <p>Good day,</p><br>
    <p>IT TODAY 2019</p>
</body>

</html>
