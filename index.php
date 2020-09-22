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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
<h3 class="center-align blue-text">Welcome to DeliverGuy </h3>
<?php if(isset($_SESSION['success'])){ ?>
  <?php
   
   unset($_SESSION['success']);
   ?>
  <?php } ?>
<?php if(isset($_SESSION['username'])){ ?>
    <h4 class="indigo-text right-align">Hello, <strong><?php echo $_SESSION['username'];?> </strong></h4>
    <button class="btn red right"><a class="white-text" href="index.php?logout='1'">Log Out</a></button>
    <li><a href="add.php" class="btn brand z-depth-0">Create Order</a></li>
    <?php 
    $userId=$_SESSION['id'];
    $data="SELECT orderId,email,pickup,receiverName,receiver,delivery,created_ad from orders WHERE id='$userId' ORDER BY created_ad";
    $query2=mysqli_query($db,$data);
    $orders=mysqli_fetch_all($query2,MYSQLI_ASSOC);
    ?> 

    <h4 class="center-align green-text text-darken-1">Orders History : </h4>
    <div class="container">
    <div class="row">
    <?php foreach($orders as $order){ ?>
     <div class="col s6 md3">
      <div class="card z-depth-0">
       <div class="card-content center">
        <h6>Order ID: <?php echo htmlspecialchars($order['orderId']) ?></h6>
       <div>
       <p>Sender Email: <?php echo htmlspecialchars($order['email']) ?></p> 
       <p>Pickup Address : <?php echo htmlspecialchars($order['pickup']) ?></p>
       <p>Receiver Name : <?php echo htmlspecialchars($order['receiverName']) ?></p>
       <p>Receiver Contact : <?php echo htmlspecialchars($order['receiver']) ?></p>
       <p>Delivery Address: <?php echo htmlspecialchars($order['delivery']) ?></p>
       <p>Order Time : <?php echo htmlspecialchars($order['created_ad']) ?></p>
       </div>
       </div>
      </div>
     
     </div>  
     
    
  <?php } ?>
  </div>
  </div>
  <?php } ?>
 
 

  

</html>