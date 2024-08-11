<?php include 'privacy.php' ?>;
<?php include 'conn.php'  ?>;

<?php  $id = $_GET['id']   ?>;



<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>;

<?php  
$select = "SELECT * FROM user WHERE id='$id'";
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
    <label for="exampleInputEmail1">project </label>
    <input type="text" value="<?php echo $row['firstname'] ?>" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Activities</label>
    <input type="text" value="<?php echo $row['title'] ?>" name="title" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Milestone</label>
    <input type="text" value="<?php echo $row['description'] ?>" name="description" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Added on</label>
    <input type="text" name="added" value="<?php echo $row['added'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Deadline</label>
    <input <?php date("dS F Y") ?>name="date"  value="<?php echo $row['date'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <input type="text" name="status" value="<?php echo $row['status'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>

  <button type="submit" name="update_btn"  class="btn btn-primary">update</button>
</form>

<?php
if (isset($_POST['update_btn'])){
     $fname = $_POST['firstname'];
     $title = $_POST['title'];
     $des = $_POST['description'];
     $add = $_POST['added'];
     $date = $_POST['date'];
     $status = $_POST['status'];

     $query="UPDATE user SET firstname='$fname', title = '$title' , description = '$des',added = '$add', date = '$date', status = '$status' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/project.php","_self")
          
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

