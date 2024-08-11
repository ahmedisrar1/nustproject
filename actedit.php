<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php
$select= "SELECT * FROM fuck WHERE id='$id'";
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
    <label for="exampleInputEmail1">Activiy Name </label>
    <input type="text" name="sname" value="<?php echo $row['sname'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Activity ID</label>
    <input type="text" name="sid" value="<?php echo $row['sid'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Added By</label>
    <input type="text" name="added" value="<?php echo $row['added'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Start Date</label>
    <input type="date" name="start" value="<?php echo $row['start'] ?>" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Exp. End Date</label>
    <input name="end" type="date" value="<?php echo $row['end'] ?>" placeholder="DD/MM/YY" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='category'value="<?php echo $row['category'] ?>">  
        <option value="In progress">In progress</option>
        <option value="Not started">Not started</option>
        <option value="Completed">Completed</option>
    </select>
   
  </div>


  <button type="submit" name="up_btn"  class="btn btn-primary">Update activity</button>
</form>
<?php
if (isset($_POST['up_btn'])){
    $name = $_POST['sname'];
     $sid = $_POST['sid'];
     $added = $_POST['added'];
     $start = $_POST['start'];
     $end = $_POST['end'];
     $status = $_POST['category'];
     $query="UPDATE fuck SET sname='$name', sid = '$sid' , added = '$added',start = '$start', end = '$end', category = '$status' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/activities.php","_self")
          
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
