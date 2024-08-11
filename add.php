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
    <label for="exampleInputEmail1">Task </label>
    <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">added by</label>
    <input type="text" name="title" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Assigned to</label>
    <textarea class="form-control" type="text" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Added on</label>
    <input type="date" name="added" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Deadline</label>
    <input name="date" type="date" placeholder="DD/MM/YY" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status'>  
        <option value="In progress">In progress</option>
        <option value="Not started">Not started</option>
        <option value="Completed">Completed</option>
    </select>
  </div>


  <button type="submit" name="save_btn"  class="btn btn-primary">add milestone</button>
</form>
<?php
if (isset($_POST['save_btn'])){
     $fname = $_POST['firstname'];
     $title = $_POST['title'];
     $des = $_POST['description'];
     $add = $_POST['added'];
     $date = $_POST['date'];
     $status = $_POST['status'];
     $query="INSERT INTO user (firstname,title,description,added,date,status) VALUES('$fname','$title','$des','$add','$date','$status')";
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