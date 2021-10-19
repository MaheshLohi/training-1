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

        <form id="SignUp" class="register" method="POST">
            {{csrf_field()}}
            <div class="name">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{  old('name') }}" >

            </div>

            <span class="error">{{$errors->first('name')}}</span>
            <div class="email">
                <label for="email">Email Id</label>
                <input type="text" name="email_id" id="email_id"  value="{{  old('email_id') }}" >
            </div>
            <span class="error">{{$errors->first('emailId')}}</span>
            <div class="password">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <span class="error">{{$errors->first('password')}}</span>
            <div class="confirmPass">
                <label for="confirmPassword">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
            <span class="error">{{$errors->first('name')}}</span>
            <div class="Org">
                <label for="organization"> Organization</label>
                <input type="text" name="organization" id="organization"  value="{{  old('organization') }}" >
            </div>
            <span class="error">{{$errors->first('organization')}}</span>
            <div class="Phone">
                <label for="Phone.No">Phone Number</label>
                <input type="number" name="phone" id="phone"  value="{{  old('phone') }}" >
            </div>
            <span class="error">{{$errors->first('phone')}}</span>
            <div class="button">
                <button type="submit" class="Button">Submit</button>
            </div>
    </div>
    </form>
</body>

</html>