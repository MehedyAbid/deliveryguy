<?php
   session_start();
   $username="";
   $email="";
   $errors=array();
   $db = mysqli_connect('sql208.epizy.com','epiz_26783404','
   56NPg07OFTQYr3','epiz_26783404_deliveryguy');
   if(!$db){
      echo "connection error";
   }
   
   if (isset($_POST['register'])){
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $email=mysqli_real_escape_string($db,$_POST['email']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      $password2=mysqli_real_escape_string($db,$_POST['password2']);
      
      if(empty($username)){
         array_push($errors,"Username is required");
      } 
      if(empty($email)){
         array_push($errors,"Email is required");
      }
      if(empty($password)){
         array_push($errors,"Password is required");
      }
      if($password != $password2){
         array_push($errors,"Password did not match");
      }
      if(count($errors)==0){
         $password=md5($password);
       $sql="INSERT INTO users(username,email,password)
             VALUES ('$username','$email','$password')";
             mysqli_query($db,$sql);
             $_SESSION['username']=$username;
            //  $_SESSION['success']="You are now logged in";
             $_SESSION['register']="You are now registered.Please Log In Now to have our service";
             header('location:login.php');
      }
   } 
   
   if(isset($_POST['login'])){
      
      $email=mysqli_real_escape_string($db,$_POST['email']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      
      if(empty($email)){
         array_push($errors,"Email is required");
      }
      if(empty($password)){
         array_push($errors,"Password is required");
      }
      if(count($errors)==0){
         $password=md5($password);
         $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
         $result=mysqli_query($db,$query);
         $user = mysqli_query($db,"SELECT username FROM users WHERE email='$email' AND password='$password'");
         $username2 = mysqli_fetch_array($user);
         $user2 = mysqli_query($db,"SELECT id FROM users WHERE email='$email' AND password='$password'");
         $username3 = mysqli_fetch_array($user2);
         if(mysqli_num_rows($result)==1){
            $_SESSION['username']=$username2['username'];
            $_SESSION['id']=$username3['id'];
            
            $_SESSION['success']="You are now logged in";
            header('location: index.php');
         }else{
            array_push($errors,"Email or Password did not match");
            
      }
   }
}
   if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header('location:login.php');
   }

   if(isset($_POST['update'])){
      
      $email=mysqli_real_escape_string($db,$_POST['email']);
      $pickup=mysqli_real_escape_string($db,$_POST['pickup']);
      $receiverName=mysqli_real_escape_string($db,$_POST['receiverName']);
      $delivery=mysqli_real_escape_string($db,$_POST['delivery']);
      $receiver=mysqli_real_escape_string($db,$_POST['receiver']);
      if(empty($email)){
         array_push($errors,"Email is required");
      }
      if(empty($pickup)){
         array_push($errors,"Pickup address is required");
      }
      if(empty($receiverName)){
          array_push($errors,"Receiver Name is required");
         }
      if(empty($receiver)){
         array_push($errors,"Receiver Contact No. is required");
      }
      
      if(empty($delivery)){
         array_push($errors,"Delivery address is required");
      }
      if(count($errors)==0){
         $username=$_SESSION['username'];
         $user = mysqli_query($db,"SELECT id FROM users WHERE email='$email' AND username='$username'");
         $username2 = mysqli_fetch_array($user);
         if(mysqli_num_rows($user)==1){
            $id=$username2['id'];
            $sql="INSERT INTO orders(id,email,pickup,receiverName,receiver,delivery) VALUES ('$id','$email','$pickup','$receiverName','$receiver','$delivery')"; 
            mysqli_query($db,$sql);
            header('location:index.php');
      }
            
        
      }
   }
?>