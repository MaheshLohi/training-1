<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <title>NPCI</title>
    </head>

    <body>
        <div class="header">
            <div class="logo">
                <img src="https://nfinite.in/assets/images/nfinite_logo@1.5x.svg" alt="">
            </div>
            <div class="links">
                <a href="#" class="login">{{$user->first_name}}</a>
                <a href="/logout" class="signup">Logout</a>

            </div>


        </div>

        <div class="content">
            <input type="hidden" value="{{$user->token}}">
        </div>

    </body>

    </html>