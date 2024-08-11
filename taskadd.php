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
    <label for="exampleInputEmail1">Task Name </label>
    <input type="text" name="tname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Task description</label>
    <input type="text" name="tdes" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Create date</label>
    <input type="date" name="createdate" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Deadline</label>
    <input type="date" name="deadline" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Assigned to</label>
    <input name="assigned" type="text"  class="form-control" id="exampleInputPassword1">
  </div>
 
  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority'>  
        <option value="low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
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


  <button type="submit" name="task_btn"  class="btn btn-primary">Task Add</button>
</form>
<?php
if (isset($_POST['task_btn'])){
     $name = $_POST['tname'];
     $des = $_POST['tdes'];
     $date = $_POST['createdate'];
     $deadline = $_POST['deadline'];
     $assign = $_POST['assigned'];
     $priority = $_POST['priority'];
     $status = $_POST['status'];
     $query="INSERT INTO task (tname,tdes,createdate,deadline,assigned,priority,status) 
     VALUES('$name','$des','$date','$deadline','$assign','$priority','$status')";
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


