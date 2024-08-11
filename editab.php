<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;

<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php  
$select = "SELECT * FROM brand WHERE id='$id'";
$data = mysqli_query($con, $select);
$row = mysqli_fetch_array($data);

?>


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
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Name</label>
<input type="text" value="<?php echo $row['sname'] ?>" name="sname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Email</label>
    <input type="text" value="<?php echo $row['email'] ?>" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Role</label>
    <input type="text" value="<?php echo $row['srole'] ?>" name="srole" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
 
  


  <button type="submit" name="updat_btn"  class="btn btn-primary"> update</button>
</form>
<?php
if (isset($_POST['updat_btn'])){
     $name = $_POST['sname'];
     $email = $_POST['email'];
     $role = $_POST['srole'];
   

     $query="UPDATE brand SET sname='$name', email = '$email' , srole = '$role' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/info.php","_self")
          
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
