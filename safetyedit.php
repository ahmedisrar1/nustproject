<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;

<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php  
$select = "SELECT * FROM guide WHERE id='$id'";
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
    <label for="exampleFormControlTextarea1">General Safety Guidlines</label>
<input type="text" value="<?php echo $row['safety'] ?>" name="safety" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" rows="3">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Emergency Procedures</label>
    <input type="text" value="<?php echo $row['emergency'] ?>" name="emergency" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Equipement Safety Guidlines</label>
    <input type="text" value="<?php echo $row['equip'] ?>" name="equip" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
 
  


  <button type="submit" name="updte_btn"  class="btn btn-primary">update Guidlines</button>
</form>
<?php
if (isset($_POST['updte_btn'])){
     $safety = $_POST['safety'];
     $emer = $_POST['emergency'];
     $equip = $_POST['equip'];
   ;

     $query="UPDATE guide SET safety='$safety', emergency = '$emer' , equip = '$equip' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/safetyguide.php","_self")
          
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