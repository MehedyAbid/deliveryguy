<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DeliveryGuy</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <style>
  form{
  max-width:460px;
  margin:20px auto;
  padding:20px;
  
  }</style>
</head>
 <body class="yellow lighten-4">
   <nav class="white z-depth-0">
    <div class="container">
    <a href="index.php"class="brand-logo blue-text">DeliveryGuy</a>
    <ul id="nav-mobile" class='right hide-on-small-down'>
    <li><a href="register.php" class="btn brand z-depth-0">Register</a></li>
     <li><a href="login.php" class="btn brand z-depth-0">Log In</a></li>
     
     </ul>
    
    </div>
   </nav>
<?php if(isset($_SESSION['register'])){ ?>
  <?php
   echo $_SESSION['register'];
   unset($_SESSION['register']);
   ?>
<?php } ?>
<form action="login.php" method="POST">
 <?php include('errors.php') ?>
  <label for="email">Email</label>
  <input class="input-field col s6" type="text" name="email" id="">
  <label for="">Password</label>
  <input class="input-field col s6" type="password" name="password" id="">
  <button type="submit" name="login" class='btn center'>Log In</button>
  </form>
  <p class="center-align">
      Not a member? <a href="register.php">Sign Up</a>
  </p>

</body>
</html>