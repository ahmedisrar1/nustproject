<?php include 'privacy.php' ?>;
<?php include 'conn.php'  ?>;
<?php  $id = $_GET['id']   ?>
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>
<?php  
$select = "SELECT * FROM dae WHERE id='$id'";
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
  <div class="form-group ">
    <label for="exampleInputEmail1">Date </label>
    <input type="date" name="dates" value="<?php echo $row['dates'] ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Location</label>
    <input type="text" name="location" value="<?php echo $row['location'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Task/Activity Description</label>
    <input type="text" name="task" value="<?php echo $row['task'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Workforce Involved</label>
    <input type="text" name="work" value="<?php echo $row['work'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="form-group ">
    <label for="exampleInputEmail1">Duration</label>
    <input type="text" name="duration" value="<?php echo $row['duration'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Material Used</label>
    <input type="text" name="material" value="<?php echo $row['material'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Equipment used</label>
    <input type="text" name="equipement" value="<?php echo $row['equipement'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Issues/observation</label>
    <input type="text" name="issues" value="<?php echo $row['issues'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status' value="<?php echo $row['status'] ?>">  
     
        <option value="Completed">Completed</option>
        <option value="In progress">In Progress</option>
        <option value="Pending">Pending</option>
    </select>
  </div>
  <button type="submit" name="upa_btn"  class="btn btn-primary"> Update</button>
</form>

<?php
if (isset($_POST['upa_btn'])){
    $date = $_POST['dates'];
    $location = $_POST['location'];
    $task = $_POST['task'];
    $work = $_POST['work'];
    $duration = $_POST['duration'];
   $material = $_POST['material'];
    $equipement = $_POST['equipement'];
    $issues = $_POST['issues'];
    $status = $_POST['status'];
     $query="UPDATE dae SET dates='$date',location= '$location', task = '$task' ,work = '$work',duration = '$duration', 
    material='$material', equipement = '$equipement', issues= '$issues' , status = '$status'  WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/daily.php","_self")
          
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