
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sid<?php include 'privacy.php' ?>;ebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php
$select= "SELECT * FROM safety WHERE id='$id'";
$query = mysqli_query($con,$select);
$row= mysqli_fetch_array($query);
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
  <div class="form-group ">
    <label for="exampleInputEmail1">Date of Incident </label>
    <input type="date" name="idate" value="<?php echo $row['idate']  ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Reported By</label>
    <input type="text" name="report" value="<?php echo $row['report']  ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Location</label>
    <input type="text" name="location" value="<?php echo $row['location']  ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Incident Type</label>
    <select name='incident' value="<?php echo $row['incident']  ?>">  
        <option value="Accident">Accident</option>
        <option value="Near Miss">Near Miss</option>
        <option value="Hazard">Hazard</option>
    </select>
   
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="des" value="<?php echo $row['des']  ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Severity</label>
    <select name='severity' value="<?php echo $row['severity']  ?>">  
        <option value="Minor">Minor</option>
        <option value="Major">Major</option>
        <option value="Critical">Critical</option>
    </select>
   
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Action Taken</label>
    <input name="action" value="<?php echo $row['action']  ?>" type="text"  class="form-control" id="exampleInputPassword1">
  </div>
 
  <div class="form-group ">
    <label for="exampleInputEmail1">Follow-Up Required</label>
    <select name='follow' value="<?php echo $row['follow']  ?>">  
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      
    </select>
   
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status' value="<?php echo $row['status']  ?>">  
        <option value="In progress">In progress</option>
        <option value="Not started">Not started</option>
        <option value="Completed">Completed</option>
    </select>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Assigned To</label>
    <input type="text" name="assign" value="<?php echo $row['assign']  ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comment" value="<?php echo $row['comment']  ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="upsafe_btn"  class="btn btn-primary">Update Incident</button>
</form>

<?php
if (isset($_POST['upsafe_btn'])){
     $date = $_POST['idate'];
     $report = $_POST['report'];
     $location = $_POST['location'];
     $incident = $_POST['incident'];
     $des = $_POST['des'];
     $sev = $_POST['severity'];
     $action = $_POST['action'];
     $follow = $_POST['follow'];
     $status = $_POST['status'];
     $assign = $_POST['assign'];
     $comment = $_POST['comment'];
     $query="UPDATE safety SET idate='$date', report = '$report' ,location = '$location',incident = '$incident', 
     des = '$des', severity = '$sev', action= '$action', follow= '$follow', status= '$status', 
     assign= '$assign', comment= '$comment'  WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/safetymanage.php","_self")
          
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