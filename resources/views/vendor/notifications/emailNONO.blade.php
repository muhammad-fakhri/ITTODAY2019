<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT TODAY 2019 | Verify Email Address</title>
</head>

<body>
    <h1>Welcome to IT TODAY 2019 !</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur aperiam illo quis atque error voluptatem excepturi et reprehenderit, dignissimos, asperiores sint dolores ad consequuntur iste totam eum perferendis eligendi molestias.</p>
    <br>
    <p>Please verify your email by clicking the button below : </p>
    <table class="action" align="center" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                        <td align="center">
                            <table border="0" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td>
                                        <a href="{{ $actionUrl }}" class="button button-primary" target="_blank">{{ $actionText }}</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <p>If you did not create an account, no further action is required.</p>
    <p>Regards,<br>
        IT TODAY 2019</p>
    <br>
    <p>If you’re having trouble clicking the {{ $actionText }} button, copy and paste the URL below into your web browser:</p>
    <a href="{{ $actionUrl }}">{{ $actionUrl }}</a>
    <br>
</body>

</html>
