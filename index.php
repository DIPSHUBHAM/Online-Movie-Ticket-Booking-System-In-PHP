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
    
    <script>
    var X=document.getElementsByClassName('fa-map-marker-alt');
    function getlocation(){
if(Navigator.getlocation){

navigator.geolocation.getCurrentPosition(showposition);
    }else{
      x.innerHTML="Browser Not supporting";
      }
      }
      function showposition(position){
      //  x.innerHTML="latitude= "+position.coords.latitude;
      //  x.innerHTML+="<br/>";
      //  x.innerHTML+="longitude= "+position.coords.longitude;
       var locAPI="http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";
       $.get({
         url:locAPI,
         success:function(data){
           console.log(data);
           x.innerHTML=data.results[0].address_components[4].long_name;
           
         }
       });
      }

    
    </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-white navbar fixed-top">
      <a class="navbar-brand text-danger" href="index.php">Movies Now</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="">[  <i class="fas fa-map-marker-alt fas-3x"></i>  Agra ] <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Contact Us.php">Contact Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="form.php" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Account
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="form.php">Login</a>
              <a class="dropdown-item" href="signup.php">Sign Up</a>
              
            </div>
          </li>
        </ul>
      </div>
    </nav>
 
   
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
   <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
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
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>  
<div class="button">  
  <center>
    <a href="index.php"><button type="button" class="btn btn-secondary">Movies</button></a>
  <a href="upcoming.php"><button type="button" class="btn btn-secondary">Upcoming</button></a>
            </center></div>
            <div class="movies">
  <div class="container">
    <div class="row align-items-start">
      <div class="col">
    <div class="card" style="width: 18rem;">   <img class="card-img-top" src="poster1.jpg" alt="Card image cap">   <div class="card-body">  <h5 class="card-title">Wonder Woman</h5>
        <p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>
      <a href="page.php" class="btn btn-primary">Book Now</a>   </div> </div>
       </div>
    <div class="col">
   <div class="card" style="width: 18rem;">   <img class="card-img-top" src="poster2.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">Black Panther</h5>        <p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p><a href="page.php" class="btn btn-primary">Book Now</a>   </div> </div>
  
     </div>
    <div class="col">
    <div class="card" style="width: 18rem;">   <img class="card-img-top" src="poster3.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">Justic League</h5>   <p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>     <a href="page.php" class="btn btn-primary">Book Now</a>   </div> </div>
            </div>
          </div>
      </div>
    </div>
     <div class="movies1">      <div class="container">
          <div class="row align-items-start">
      <div class="col">
  <div class="card" style="width: 18rem;">   <img class="card-img-top" src="poster4.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">World Wor Z 2</h5>   <p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>      <a href="page.ph" class="btn btn-primary">Book Now</a>   </div> </div>
       </div>
            <div class="col">
  <div class="card" style="width: 18rem;">   <img class="card-img-top" src="poster5.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">Thor Rangarok</h5> <p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>       <a href="page.php" class="btn btn-primary">Book Now</a>   </div> </div>
      </div>
        <div class="col">
 <div class="card" style="width: 18rem;">   <img class="card-img-top" src="poster6.jpg" alt="Card image cap">   <div class="card-body">     <h5 class="card-title">Star wor The last jedi</h5> <p><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i><i class="fas fa-star fa-1x"></i></p>      <a href="page.php" class="btn btn-primary">Book Now</a>   </div> </div>
            </div>
          </div>
   </div>
  </div>
<footer>
<ul class="navlink">
  
 <li>Home |</li>
 
<li>
  Contact Us |
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


   Bigtree Entertainment Pvt. Ltd. All Rights Reserved.
The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.

</footer>

</body>
</html>