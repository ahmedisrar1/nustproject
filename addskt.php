<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;

<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>
<form class="forme" method="POST">
  
<div class="form-group ">
    <label for="exampleInputName1">Name </label>
    <input type="text" name="sname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Email </label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group ">
    <label for="exampleInputRole1">Role </label>
    <input type="text" name="srole" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>


  <button type="submit" name="add_stake"  class="btn btn-primary">add stakeholders</button>
</form>
<?php
if (isset($_POST['add_stake'])){
     $name = $_POST['sname'];
     $email = $_POST['email'];
     $role = $_POST['srole'];
     $query="INSERT INTO brand (sname,email,srole) VALUES('$name','$email','$role')";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("Data saved suceesfully")

        </script>
    <?php
    
     }
     else{
      ?>
        <script type="text/javascript">
          alert("please try again")

        </script>
    <?php
     }
}


?>

</body>
</html>
















<?php ('include/footer.php') ?>    