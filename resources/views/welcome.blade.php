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
            <a href="/login" class="login">Login</a>
            <a href="/signup" class="signup">Signup</a>

        </div>


    </div>

    <div class="content">
        @foreach($productList as $item)


        <div class="product-category">
            <div class="top">
                <img height="20" width="50" src="{{$item['image']}}" alt="logo">
                <a href="{{$item['uuid']}}">Detail</a>

            </div>
            <div class="middle">
                <h2>{{$item['name']}}</h2>
                <h3>By {{$item['provider_name']}}</h3>


            </div>
            <div class="bottom">
                <a href="" class="subscribe">Subscribe</a>
                <a href="" class="docs-link">View Documentation</a>
            </div>
        </div>
        @endforeach



    </div>

    <script>
        var msg = "{{Session::get('message')}}"
        var exist = "{{Session::has('message')}}"
        if (exist) {
            alert(msg);
        }
    </script>

</body>

</html>