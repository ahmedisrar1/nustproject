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
    <label for="exampleInputEmail1">Title of Report </label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <div class="form-group ">
    <label for="exampleInputEmail1">Date </label>
    <input type="date" name="sdate" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Project Name</label>
    <input type="text" name="project" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Site Location</label>
    <input type="text" name="slocation" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Vistor Name</label>
    <input type="text" name="vname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="form-group ">
    <label for="exampleInputEmail1">Purpose of Visit</label>
    <input type="text" name="pvisit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Area/Zone</label>
    <input type="text" name="area"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Activity/Observation</label>
    <input type="text" name="activity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Notes/Comments</label>
    <input type="text" name="notes" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Description of Findings</label>
    <input type="text" name="des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status'>  
     
        <option value="Good">Good</option>
        <option value="Fair">Fair</option>
        <option value="Poor">Poor</option>
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Remarks/Comments</label>
    <input type="text" name="remarks" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Recommondation</label>
    <input type="text" name="rec" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority'>  
     
        <option value="High">High </option>
        <option value="Medium">Medium</option>
        <option value="Low">Low</option>
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Due Date </label>
    <input type="date" name="due" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="ada_btn"  class="btn btn-primary"> Add</button>
</form>
<?php
if (isset($_POST['ada_btn'])){
     $title = $_POST['title'];
     $date = $_POST['sdate'];
     $project = $_POST['project'];
     $location = $_POST['slocation'];
     $vname = $_POST['vname'];
     $v = $_POST['pvisit'];
     $area = $_POST['area'];
    $activity = $_POST['activity'];
     $notes = $_POST['notes'];
     $des = $_POST['des'];
     $status = $_POST['status'];
     $remarks = $_POST['remarks'];
     $rec = $_POST['rec'];
     $priority = $_POST['priority'];
     $due = $_POST['due'];

     $query="INSERT INTO report (title,sdate,project,slocation,vname,pvisit,area,activity,notes,des,status,remarks,rec,priority,due) 
     VALUES('$title','$date','$project','$location','$vname','$v','$area','$activity','$notes','$des','$status','$remarks','$rec','$priority','$due')";
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


