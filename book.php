
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
    
    <link rel="shortcut icon" type="image/png" href="favicon.png">
  <title>Ticket Booking</title>
  <style>
  body{
  	margin:0px;
  	padding: 0px;
  }
  .alert-dark{
    color:grey;
    width: 20%;
    height: auto;
    float: right;
  }
  #userlogin{

    color:grey;
    font-weight: 900px;
    margin-bottom: 20px;
  text-align: center;
}
form{
    margin-left:150px;
    padding: 10px;
    margin-top: 150px;
    width: 300px;
}
#exampleInputEmail1{
    /* margin-bottom: -5px; */
    border: 2px solid rgb(87, 53, 53);
    text-align: center;
}
#exampleInputPassword1{
    border: 2px solid rgb(75, 30, 30);
    overflow: hidden;
    margin-top: -20px;
    text-align: center;
}
button{
    margin-top:12px;
}

form{

	float: right;
	margin-right: 140px;
}

  </style>

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>








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
            <a class="nav-link" href="">[  <i class="fas fa-map-marker-alt fas-3x"></i>  Agra] <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="order.php">Order</a>
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
 
  <img src="screen.png" alt="screen">
  
       <form action="process.php">
       	<span class="border-0">
<div class="form-group">
<label for="exampleInputEmail1"></label>
<input type="email" class="form-control .form-control-lg" id="userlogin"aria-describedby="emailHelp" placeholder="Your Booking Details" disabled>
  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Select Seats</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
  </select>
        </div>

  <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
    <option selected>Payment Options</option>
    <option value="1">Paytm</option>
    <option value="2">Axis Bank</option>
    <option value="3">ICICI Bank</option>
    <option value="2">State Bank India</option>
    <option value="3">HFDC Bank</option>
  </select>
  <br>
  <a href="process.php"> <button type="button" class="btn btn-primary btn-lg btn-block">Proceed And Pay</button></a>
       

      </form>  
   
 <!--  
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


   Bigtree Entertainment Pvt. Ltd. All Rights Reserved.
The content and images used on this site are copyright protected and copyrights vests with the respective owners. The usage of the content and images on this website is intended to promote the works and no endorsement of the artist shall be implied. Unauthorized use is prohibited and punishable by law.

</footer>  -->
 
</body>
</html>