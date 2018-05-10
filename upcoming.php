<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="styleimg.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js"></script>
    <title>Home</title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
</head>
<body>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar fixed-top">
      <a class="navbar-brand" href="index.html">Movies Now</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="notification.phpnavbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="">[  <i class="fas fa-map-marker-alt fas-3x"></i>  Agra] <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="form.html" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="form.php">Login</a>
              <a class="dropdown-item" href="form.php">Sign Up</a>
              
            </div>
          </li>
        </ul>
      </div>
    </nav>
 
   
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
   <li data-target="notification.phpcarouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="notification.phpcarouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="notification.phpcarouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
     <div class="carousel-item active">
            <img class="d-block w-100" src="wonder.jpg" alt="First slide">
      </div>
    <div class="carousel-item">
   <img class="d-block w-100" src="black.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
     <img class="d-block w-100" src="justice.jpg" alt="Third slide">
          </div>
        </div>
    <a class="carousel-control-prev" href="notification.phpcarouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="notification.phpcarouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>  
<div class="button">  
  <center>
    <a href="index.html"><button type="button" class="btn btn-secondary">Movies</button></a>
  <a href="upcoming.html"><button type="button" class="btn btn-secondary">Upcoming</button></a>
            </center></div>
            <div class="movies">
  <div class="container">
    <div class="row align-items-start">
      <div class="col">
    <div class="card" style="width: 18rem;">   <img class="card-img-top" src="upcoming1.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">102 NOT OUT</h5><a href="notification.php" class="btn btn-primary">Notify Me</a>   </div> </div>
       </div>
    <div class="col">
   <div class="card" style="width: 18rem;">   <img class="card-img-top" src="upcoming2.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">Razzi</h5>        <a href="notification.php" class="btn btn-primary">Notify Me</a>   </div> </div>
     </div>
    <div class="col">
    <div class="card" style="width: 18rem;">   <img class="card-img-top" src="upcoming3.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">DeadPoll 2</h5>        <a href="notification.php" class="btn btn-primary">Notify Me</a>   </div> </div>
            </div>
          </div>
      </div>
    </div>
     <div class="movies1">      <div class="container">
          <div class="row align-items-start">
      <div class="col">
  <div class="card" style="width: 18rem;">   <img class="card-img-top" src="upcoming4.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">jurassic World Kingdom fallen</h5>         <a href="notification.php" class="btn btn-primary">Notify Me</a>   </div> </div>
       </div>
            <div class="col">
  <div class="card" style="width: 18rem;">   <img class="card-img-top" src="upcoming5.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">Ocea's 8</h5>        <a href="notification.php" class="btn btn-primary">Notify Me</a>   </div> </div>
      </div>
        <div class="col">
 <div class="card" style="width: 18rem;">   <img class="card-img-top" src="upcoming6.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">Ant Man The Waps</h5>       <a href="notification.php" class="btn btn-primary">Notify Me</a>   </div> </div>
            </div>
          </div>
   </div>
  </div>
<footer>
<ul class="navlink">
  
 <li>Home |</li>
 
<li>
  Order |
</li>
<li>Account |</li>
<li>Contact Us |</li>
<li>Services</li></ul>

<div class="icon">
<i class="fab fa-facebook-square fa-3x"></i>
<i class="fab fa-instagram fa-3x"></i>
<i class="fab fa-twitter fa-3x"></i>
<i class="fab fa-youtube fa-3x"></i>
</div>
<h5>All Rights Reserverd</h5>
<h5>2018 &copy;</h5>
<h4>Term and conditions</h4>
<p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod, minima perferendis nulla natus cupiditate, officia eveniet, sunt cum nostrum tempore aut! Totam, sequi labore! Mollitia perferendis animi, quod atque sapiente totam, nobis pariatur alias iste assumenda quidem magni non?
</p>
</footer>

</body>
</html>