<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php
$select= "SELECT * FROM task WHERE id='$id'";
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
    <label for="exampleInputEmail1">Task Name </label>
    <input type="text" name="tname" value="<?php echo $row['tname'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Task description</label>
    <input type="text" name="tdes" value="<?php echo $row['tdes'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Create date</label>
    <input type="date" name="createdate" value="<?php echo $row['createdate'] ?>" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Deadline</label>
    <input type="date" name="deadline" value="<?php echo $row['deadline'] ?>" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Assigned to</label>
    <input name="assigned" type="text"  value="<?php echo $row['assigned'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
 
  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority' value="<?php echo $row['priority'] ?>">  
        <option value="low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
   
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status' value="<?php echo $row['status'] ?>">  
        <option value="In progress">In progress</option>
        <option value="Not started">Not started</option>
        <option value="Completed">Completed</option>
    </select>
   
  </div>


  <button type="submit" name="upd_btn"  class="btn btn-primary">Update Task</button>
</form>

<?php
if (isset($_POST['upd_btn'])){
     $tname = $_POST['tname'];
     $tdes = $_POST['tdes'];
     $createdate = $_POST['createdate'];
     $dead = $_POST['deadline'];
     $assign = $_POST['assigned'];
     $priority = $_POST['priority'];
     $status = $_POST['status'];
     $query="UPDATE task SET tname='$tname', tdes = '$tdes' ,createdate = '$createdate',deadline = '$dead', assigned = '$assign', priority = '$priority', status= '$status' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/taskmanage.php","_self")
          
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