<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>
    <!-- <link rel="stylesheet" href="main.css" type="text/css"> -->
    <link rel="stylesheet" href="{{asset('css/signup.css')}}">
</head>
<body>
    <!-- <div class="logo" id="logo">
     <img src="https://npci-qa.open.money/assets/images/nfinite_logo@1.5x.svg" alt="">
    </div> --> 
    <div class="mainBody">
     <h1>Create Account</h1>
     <form id="SignUp" class="register" method="GET">

     <div class="name">
          <label for="name">Name</label>
          <input  type="text" id="emailId">
      </div>
      <div class="email">
          <label for="email">Email Id</label>
          <input  type="text" id="emailId">
      </div>
      <div class="password"> 
          <label for="password">Password</label>
          <input type="text" id="password">
      </div>
      <div class="confirmPass"> 
          <label for="confirmPassword">Confirm Password</label>
          <input type="text" id="confirmpassord">
      </div>
      <div class="Org"> 
          <label for="organization"> Organization</label>
          <input type="text" id="organization">
      </div>
      <div class="Phone"> 
          <label for="Phone.No">Phone Number</label>
          <input type="text" id="phone.no">
      </div>
      <div class="button">
          <button type="submit"class="Button">Submit</button>
      </div>
    </div>
</form>
</body>
</html>