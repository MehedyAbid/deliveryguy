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
     <li><a href="add.php" class="btn brand z-depth-0">Create Order</a></li>
     <li><a href="register.php" class="btn brand z-depth-0">Register</a></li>
     <li><a href="login.php" class="btn brand z-depth-0">Log In</a></li>
     
     </ul>
    
    </div>
   </nav>
   <?php if(isset($_SESSION['username'])){ ?>
    <h4 class="indigo-text right-align">Hello, <strong><?php echo $_SESSION['username'];?> </strong></h4>
    <button class="btn red right"><a class="white-text" href="index.php?logout='1'">Log Out</a></button>
   <?php } ?>
<section class="container grey-text">
 <h4 class="center">Submit Courier Request</h4>
  
   <?php if(isset($_SESSION['success'])){ ?>
  <?php
  
   unset($_SESSION['success']);
   ?>
  <?php } ?>

<form class="white" action="add.php" method="POST">

   <h3>Sender Details:
   <hr> 
   <label for="email"> Sender's Email: </label>
   <input type="text" name="email" id="" placeholder="Please Enter Your Email">
   <label for="pickup">Pick Up Location: </label>
   <input type="text" name="pickup" id="">
   
   <h3>Receiver Details<h3>
   <hr>
   <label for="receiver">Receiver Name: </label>
   <input type="text" name="receiverName" id="">
   <label for="receiver">Receiver Contact No. : </label>
   <input type="text" name="receiver" id="">
   <label for="delivery">Delivery Location: </label>
   <input type="text" name="delivery" id="">
    <input type="submit" name="update" class="btn" value="submit">
    </div>
</form>
  </section>
<?php include('templates/footer.php') ?>
</html>