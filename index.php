
<?php

$showAlert =false;
$showError = false;
if($_SERVER['REQUEST_METHOD']=="POST"){
   
    include 'conn.php' ;
   
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $exists=false;
if(($password== $cpassword)&& $exists==false){
      $sql = "INSERT INTO `enter` ( `email`,`username`, `password`, `dt`) VALUES 
      ( '$email','$username', '$password', current_timestamp());";
      $result = mysqli_query($con,$sql);
      if($result){
        $showAlert = true ;
      }
}
   else{
    $showError = "password does not match";
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
if($showAlert){
echo '
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> your account is now created and you can login.
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
  <strong>Alert!</strong> password is not matched.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>

<body>
    <div class="container d-flex justify-content-center">
        <div class="wrapper">
<form  method="POST">
<h1 class="text-center"> Signup </h1>
<div class="form-group">
  <div class="input-box">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username" placeholder="username" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  </div>
  <div class="form-group">
  <div class="input-box">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" placeholder="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" placeholder="password" class="form-control" id="exampleInputPassword1">
</div>
  <div class="form-group">
  <div class="input-box">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" name="cpassword"placeholder="confirm password" class="form-control" id="exampleInputPassword1">
  </div>
  </div>
  <div class="form-group">
    <div class="register-link">
  <a style="color:red" href="login.php">Login</a> <strong>click here! login.</strong> 
  </div>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</form>
</body>
</html>