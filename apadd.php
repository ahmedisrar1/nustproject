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
    <label for="exampleInputEmail1">Change Request ID </label>
    <input type="text" name="pid" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Approvers</label>
    <input type="text" name="appr" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Current status</label>
    <select name='status'>  
        <option value="Pending">Pending</option>
        <option value="Approved">Approved</option>
        <option value="Rejected">Rejected</option>
    </select>
   
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Date submitted</label>
    <input type="date" name="datesub" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Due Date</label>
    <input type="date" name="due" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Comments</label>
    <input type="text" name="comment" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date Updated</label>
    <input name="dateup" type="date" placeholder="DD/MM/YY" class="form-control" id="exampleInputPassword1">
  </div>
 


  <button type="submit" name="app_btn"  class="btn btn-primary">Add approval</button>
</form>
<?php
if (isset($_POST['app_btn'])){
     $pid = $_POST['pid'];
     $approve = $_POST['appr'];
     $current = $_POST['status'];
     $datesub = $_POST['datesub'];
     $due = $_POST['due'];
     $comments = $_POST['comment'];
     $dateup = $_POST['dateup'];
     $query="INSERT INTO app (pid,appr,status,datesub,due,comment,dateup) 
     VALUES('$pid','$approve','$current','$datesub','$due','$comments','$dateup')";
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


