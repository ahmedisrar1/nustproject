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
    <label for="exampleInputEmail1">Date of Incident </label>
    <input type="date" name="idate" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Reported By</label>
    <input type="text" name="report" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Location</label>
    <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Incident Type</label>
    <select name='incident'>  
        <option value="Accident">Accident</option>
        <option value="Near Miss">Near Miss</option>
        <option value="Hazard">Hazard</option>
    </select>
   
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" name="des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Severity</label>
    <select name='severity'>  
        <option value="Minor">Minor</option>
        <option value="Major">Major</option>
        <option value="Critical">Critical</option>
    </select>
   
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Action Taken</label>
    <input name="action" type="text"  class="form-control" id="exampleInputPassword1">
  </div>
 
  <div class="form-group ">
    <label for="exampleInputEmail1">Follow-Up Required</label>
    <select name='follow'>  
        <option value="Yes">Yes</option>
        <option value="No">No</option>
      
    </select>
   
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status'>  
        <option value="In progress">In progress</option>
        <option value="Not started">Not started</option>
        <option value="Completed">Completed</option>
    </select>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Assigned To</label>
    <input type="text" name="assign" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="safe_btn"  class="btn btn-primary">Incident Add</button>
</form>
<?php
if (isset($_POST['safe_btn'])){
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
     $query="INSERT INTO safety (idate,report,location,incident,des,severity,action,follow,status,assign,comment) 
     VALUES('$date','$report','$location','$incident','$des','$sev','$action','$follow','$status','$assign','$comment')";
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


