<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;

<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php  
$select = "SELECT * FROM proj WHERE id='$id'";
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
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Project</label>
<input type="text" value="<?php echo $row['project'] ?>" name="project" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Goals</label>
    <input type="text" value="<?php echo $row['goals'] ?>" name="goals" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Scope</label>
    <input type="text" value="<?php echo $row['scope'] ?>" name="scope" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
 
  


  <button type="submit" name="upd_btn"  class="btn btn-primary">update project goals</button>
</form>
<?php
if (isset($_POST['upd_btn'])){
     $project = $_POST['project'];
     $goals = $_POST['goals'];
     $scope = $_POST['scope'];
   ;

     $query="UPDATE proj SET project='$project', goals = '$goals' , scope = '$scope' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/info.php","_self")
          
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
