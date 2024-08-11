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
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">General Safety Guidlines</label>
    <textarea class="form-control" type="text" name="safety" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Emergency Procedures</label>
    <textarea class="form-control" type="text" name="emergency" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Equipement Safety Guidlines</label>
    <textarea class="form-control" type="text" name="equip" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 
  


  <button type="submit" name="addg_btn"  class="btn btn-primary">Add Guidlines</button>
</form>
<?php
if (isset($_POST['addg_btn'])){
     $safety = $_POST['safety'];
     $emer = $_POST['emergency'];
     $equip = $_POST['equip'];
     $query="INSERT INTO guide (safety,emergency,equip) VALUES('$safety','$emer','$equip')";
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