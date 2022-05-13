<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>SSG Fest</title>
        <!-- google fonts -->
        <link href="//fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,600&display=swap" rel="stylesheet">
        <!-- google fonts -->
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ URL::asset('css/api.css');}}">
        <!-- Template CSS -->
        
        <script src="{{ URL::asset('js/nav.js'); }}"></script>
        
    
      </head>
<body>
    <div class='header'>
        <h1>Random Image Generator!</h1>
      </div>
      <div class="container">
        <div class='images'>
          <div id='dog-img'>
            <p>Placeholder Image</p>
          </div>
          <div id='cat-img'>
            <p>Placeholder Image</p>
          </div>  
        </div>
      
        <div class='buttons'>
          <button id='btn-dog'>Random DOG!</button> 
          <button id='btn-cat'>Random CAT!</button> 
        </div>   
      </div>
      <script src="{{ URL::asset('js/apiFacha.js'); }}"></script>
</body>
</html>