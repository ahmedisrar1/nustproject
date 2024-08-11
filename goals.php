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
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Project</label>
    <textarea class="form-control" type="text" name="project" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Goals</label>
    <textarea class="form-control" type="text" name="goals" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Scope</label>
    <textarea class="form-control" type="text" name="scope" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
 
  


  <button type="submit" name="add_btn"  class="btn btn-primary">add project goals</button>
</form>
<?php
if (isset($_POST['add_btn'])){
     $proj = $_POST['project'];
     $goals = $_POST['goals'];
     $scope = $_POST['scope'];
     $query="INSERT INTO proj (project,goals,scope) VALUES('$proj','$goals','$scope')";
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