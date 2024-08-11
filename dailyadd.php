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
    <label for="exampleInputEmail1">Date </label>
    <input type="date" name="dates" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Location</label>
    <input type="text" name="location" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Task/Activity Description</label>
    <input type="text" name="task" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Workforce Involved</label>
    <input type="text" name="work" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="form-group ">
    <label for="exampleInputEmail1">Duration</label>
    <input type="text" name="duration" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Material Used</label>
    <input type="text" name="material"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Equipment used</label>
    <input type="text" name="equipement" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Issues/observation</label>
    <input type="text" name="issues" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status'>  
     
        <option value="Completed">Completed</option>
        <option value="In progress">In Progress</option>
        <option value="Pending">Pending</option>
    </select>
  </div>
  <button type="submit" name="da_btn"  class="btn btn-primary"> Add</button>
</form>
<?php
if (isset($_POST['da_btn'])){
     $date = $_POST['dates'];
    
     $location = $_POST['location'];
     $task = $_POST['task'];
     $work = $_POST['work'];
     $duration = $_POST['duration'];
    $material = $_POST['material'];
     $equipement = $_POST['equipement'];
     $issues = $_POST['issues'];
     $status = $_POST['status'];

     $query="INSERT INTO dae (dates,location,task,work,duration,material,equipement,issues,status) 
     VALUES('$date','$location','$task','$work','$duration','$material','$equipement','$issues','$status')";
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


