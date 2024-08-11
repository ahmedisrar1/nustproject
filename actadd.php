<?php include 'privacy.php' ?>

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
    <label for="exampleInputEmail1">Activiy Name </label>
    <input type="text" name="sname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Activity ID</label>
    <input type="text" name="sid" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Added By</label>
    <input type="text" name="added" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Start Date</label>
    <input type="date" name="start" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Exp. End Date</label>
    <input name="end" type="date" placeholder="DD/MM/YY" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='category'>  
        <option value="In progress">In progress</option>
        <option value="Not started">Not started</option>
        <option value="Completed">Completed</option>
    </select>
   
  </div>


  <button type="submit" name="act_btn"  class="btn btn-primary">add activity</button>
</form>
<?php
if (isset($_POST['act_btn'])){
     $name = $_POST['sname'];
     $sid = $_POST['sid'];
     $added = $_POST['added'];
     $start = $_POST['start'];
     $end = $_POST['end'];
     $status = $_POST['category'];
     $query="INSERT INTO fuck (sname,sid,added,start,end,category) VALUES('$name','$sid','$added','$start','$end','$status')";
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