<?php include("server.php") ?>
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
    <a href="index.php" class="brand-logo blue-text">DeliveryGuy</a>
    <ul id="nav-mobile" class='right hide-on-small-down'>
     
     <li><a href="register.php" class="btn brand z-depth-0">Register</a></li>
     <li><a href="login.php" class="btn brand z-depth-0">Log In</a></li>

     
     </ul>
    
    </div>
   </nav>
<body>

<form action="register.php" method="POST">
   
   <?php include("errors.php") ?>

  <label for="">Username</label>
  <input type="text" name="username" id="">
  <label for="">Email</label>
  <input type="text" name="email" id="">
  <label for="">Password</label>
  <input type="password" name="password" id="">
  <label for="">Confirm Password</label>
  <input type="password" name="password2" id="">
  <button type="submit" name="register" class="btn">Register</button>
</form>
  <p class="center-align">
      Already a member? <a href="login.php">Log In</a>
  </p>

</body>
</html>