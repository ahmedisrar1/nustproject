
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php
$select= "SELECT * FROM issue WHERE id='$id'";
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
    <label for="exampleInputEmail1">Issue Title</label>
    <input type="text" name="ititle" value="<?php echo $row['ititle'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Issue Description</label>
    <input type="text" name="ides" value="<?php echo $row['ides'] ?>"  class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Category</label>
    <input type="text" name="icat"  value="<?php echo $row['icat'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority'  value="<?php echo $row['priority'] ?>" >  
        <option value="low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status' value="<?php echo $row['status'] ?>" >  
    <option value="Completed">Open</option>
        <option value="In progress">In progress</option>
        <option value="Not started">Resolved</option>
        <option value="Completed">Closed</option>
    </select>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Assigned to</label>
    <input name="assigned"  value="<?php echo $row['assigned'] ?>"  type="text"  class="form-control" id="exampleInputPassword1">
  </div>



  <div class="form-group ">
    <label for="exampleInputEmail1">Due Date</label>
    <input type="date" name="duedate"  value="<?php echo $row['duedate'] ?>"  placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Date Created</label>
    <input type="date" name="datecreate"  value="<?php echo $row['datecreate'] ?>"  placeholder="DD/MM/YY" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Last Update</label>
    <input type="text" name="lastupdate"   value="<?php echo $row['lastupdate'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Comments</label>
    <input type="text" name="comments"  value="<?php echo $row['comments'] ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
 
  

  

  <button type="submit" name="issue_btn"  class="btn btn-primary">Issue Add</button>
</form>
<?php
if (isset($_POST['issue_btn'])){
     $title = $_POST['ititle'];
     $des = $_POST['ides'];
     $cat = $_POST['icat'];
     $priority = $_POST['priority'];
     $status = $_POST['status'];
     $assign = $_POST['assigned'];
     $date = $_POST['duedate'];
     $create = $_POST['datecreate'];
     $update = $_POST['lastupdate'];
     $comments = $_POST['comments'];
     $query="UPDATE issue SET ititle='$title', ides = '$des' ,icat = '$cat',priority = '$priority', 
     status = '$status', assigned = '$assign', duedate= '$date', datecreate= '$create', lastupdate= '$update', 
     comments= '$comments' WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/issuebig.php","_self")
          
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