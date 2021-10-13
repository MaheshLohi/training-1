<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/details.css')}}">
    <title>ApiBazzar</title>
</head>
<body>
    
     
      <div class="conten">
         <div class="Header">
            <div class ="left">
              <h2>{{$item['name']}}</h2>
              <h4>By {{$item['provider_name']}}</h3>
            </div>
            <div class="right">
               <img src="" alt="ApiLogos">
            </div>           
         </div>
         <div class="Body">
            <h2>About</h2>
            <?php
             echo htmlspecialchars_decode($item['about_us']);
            ?>
         </div>
      </div>
  
  
</body>
</html>