
<?php

$login =false;
$showError = false;
if($_SERVER['REQUEST_METHOD']=="POST"){
   
    include 'conn.php' ;
   
   $email = $_POST['email'];
   $username= $_POST['username'];
   $password = $_POST['password'];
 
   

      $sql = "select * from enter where  email='$email' AND username='$username' AND password='$password'";
      $result = mysqli_query($con,$sql);
      $num = mysqli_num_rows($result);
      if($num == 1 ){
        $login = true ;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['username'] = $username;
        header("location:dashboard.php");
      }

   else{
    $showError = "invalid credentials";
   }


}





?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="new.css">
  </head>
<?php
if($login){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> you are logged in.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
<?php
if($showError){
echo '
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Allert!</strong> please try again.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>

<body>
    <div class="container d-flex justify-content-center">
        <div class="wrapper">
<form method= "POST">
<h1 class="text-center"> Login </h1>
<div class="form-group">
<div class="input-box">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="username" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  </div>
  <div class="form-group">
  <div class="input-box">
    <label for="exampleInputEmail1">email addres</label>
    <input type="email" name="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  </div>
  <div class="form-group">
  <div class="input-box">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  </div>
  <div class="form-group">
  <div class="register-link">
  <a style="color:red" href="index.php">Signup</a> <strong>click here! Signup.</strong> 
  </div>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</form>
</body>
</html>