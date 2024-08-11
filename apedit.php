<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php
$select= "SELECT * FROM app WHERE id='$id'";
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
    <label for="exampleInputEmail1">Change Request ID </label>
    <input type="text" name="pid" value="<?php echo $row['pid'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Approvers</label>
    <input type="text" name="appr" value="<?php echo $row['appr'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Current status</label>
    <select name='status' value="<?php echo $row['status'] ?>">  
        <option value="Pending">Pending</option>
        <option value="Approved">Approved</option>
        <option value="Rejected">Rejected</option>
    </select>
   
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Date submitted</label>
    <input type="date" name="datesub" value="<?php echo $row['datesub'] ?>" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Due Date</label>
    <input type="date" name="due" value="<?php echo $row['due'] ?>" placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Comments</label>
    <input type="text" name="comment" value="<?php echo $row['comment'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Date Updated</label>
    <input name="dateup" type="date" value="<?php echo $row['dateup'] ?>" placeholder="DD/MM/YY" class="form-control" id="exampleInputPassword1">
  </div>
 


  <button type="submit" name="upp_btn"  class="btn btn-primary">Update Approval</button>
</form>
<?php
if (isset($_POST['upp_btn'])){
    $pid = $_POST['pid'];
     $approve = $_POST['appr'];
     $current = $_POST['status'];
     $datesub = $_POST['datesub'];
     $due = $_POST['due'];
     $comments = $_POST['comment'];
     $dateup = $_POST['dateup'];
     $query="UPDATE app SET pid='$pid', appr = '$approve' , status = '$current',datesub = '$datesub', due = '$due', comment = '$comments', dateup = '$dateup' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/approval.php","_self")
          
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
