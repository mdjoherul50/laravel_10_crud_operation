
<!DOCTYPE html>
<html>
<head>
    <title>How To Create CRUD Operation In Laravel 10 - Techsolutionstuff</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <style>
        /* CSS styles for the watermark */
        body {
          position: relative;
        }
    
        body::after {
          content: "BM JAHIRUL ISLAM";
          position: fixed;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%) rotate(-45deg); /* Rotate the text diagonally */
          font-size: 4em;
          opacity: 0.2; /* Adjust the opacity as needed */
          z-index: -1;
          pointer-events: none;
        }
      </style>
</head>
<body>
  
<div class="container" style="margin-top: 15px;">
    @yield('content')
</div>
   
</body>
</html>