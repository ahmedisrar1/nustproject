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
    <label for="exampleInputEmail1">Issue Title</label>
    <input type="text" name="ititle" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Issue Description</label>
    <input type="text" name="ides" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Category</label>
    <input type="text" name="icat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
    <option value="Completed">Open</option>
        <option value="In progress">In progress</option>
        <option value="Not started">Resolved</option>
        <option value="Completed">Closed</option>
    </select>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Assigned to</label>
    <input name="assigned" type="text"  class="form-control" id="exampleInputPassword1">
  </div>



  <div class="form-group ">
    <label for="exampleInputEmail1">Due Date</label>
    <input type="date" name="duedate" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Date Created</label>
    <input type="date" name="datecreate" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Last Update</label>
    <input type="text" name="lastupdate" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comments</label>
    <input type="text" name="comments" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  

  

  <button type="submit" name="issue_btn"  class="btn btn-primary">Issue Add</button>
</form>
<?php
if (isset($_POST['issue_btn'])){
     $title = $_POST['ititle'];
     $des = $_POST['ides'];
     $cat = $_POST['icat'];
     $priority = $_POST['priority'];
     $status = $_POST['status'];
     $assign = $_POST['assigned'];
     $date = $_POST['duedate'];
     $create = $_POST['datecreate'];
     $update = $_POST['lastupdate'];
     $comments = $_POST['comments'];
     $query="INSERT INTO issue (ititle,ides,icat,priority,status,assigned,duedate,datecreate,lastupdate,comments) 
     VALUES('$title','$des','$cat','$priority','$status','$assign','$date','$create','$update','$comments')";
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
