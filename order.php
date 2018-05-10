<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="contact.css">

    <title>Contact Us</title>
</head>
<body>
  
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar fixed-top">
          <a class="navbar-brand" href="index.php">Movies Now</a>
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
                  <a class="dropdown-item" href="Signup.php">Sign Up</a>

                </div>
              </li>
            </ul>
          </div>
        </nav>
          <div class="Contact">
       <form>
<div class="form-group">
<label for="exampleInputEmail1"></label>
<input type="email" class="form-control .form-control-lg" id="userlogin"aria-describedby="emailHelp" placeholder="Write Us Here" disabled>
<input type="text" class="form-control .form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Name" name="email"> <small id="emailHelp" class="form-text text-muted"></small>
<input type="email" class="form-control .form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email" name="email"> <small id="emailHelp" class="form-text text-muted"></small>
        </div>
   <textarea name="career[message]" class="form-control" tabindex="4"
          placeholder="Write your details" required></textarea>
        
                   </div>
                   
                  

        <button type="submit" class="btn btn-primary" name="submit">Send</button>
      </form></div>
      <!-- <div class="social">
<a href="https://accounts.google.com/signin/v2/identifier?passive=1209600&continue=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&followup=https%3A%2F%2Faccounts.google.com%2Fb%2F0%2FAddMailService&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><img src="google.jpg" alt="Login with google" width="300px" height="50px"></a></div>
<div class="socialfb">
 <a href="https://www.facebook.com/"><img src="facebook.jpg" alt="Login with Facebook" width="300px" height="47.5px"></a>
</div>
<div class="email">
  <a href="Signup.php" class="registerLink">

  <img src="email.jpg" alt="" width="300px" height="50px">
  </a>
  </div> -->
<!-- <div class="modal_container">
  <div class="modal">
    <a href="" class="close">x</a>
    <span class="modal_heading">
      Please! Signup
    </span>
    <form action="#">
      <input type="text" placeholder="Name"><br>
      <input type="text" placeholder="Email"><br>
      <input type="text" placeholder="password"><br>
      <input type="submit" class="btnRegister" value="REGISTER">

    </form>

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
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod, minima perferendis nulla natus cupiditate, officia eveniet, sunt cum nostrum tempore aut! Totam, sequi labore! Mollitia perferendis animi, quod atque sapiente totam, nobis pariatur alias iste assumenda quidem magni non?
</p>
</footer> -->
</body>
</html>
