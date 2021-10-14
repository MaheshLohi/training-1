<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <div class="container">
     <form id="Login" class="loginBox" method="POST">
     {{csrf_field()}}
       <div class="name">
          <label for="name">UserName</label>
          <input  type="text" id="name">
        </div>
      <div class="password">
          <label for="password">Password</label>
          <input type="text" id="password">
      </div>
       <div class="button">
           <button type="submit" class="Button">Login</button>
       </div>
     </form>
    </div>
</body>
</html>
