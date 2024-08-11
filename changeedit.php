<?php include 'privacy.php' ?>;
<?php include 'conn.php'  ?>;
<?php  $id = $_GET['id']   ?>
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>
<?php  
$select = "SELECT * FROM changereq WHERE id='$id'";
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
    <label for="exampleInputEmail1">Date Submitted</label>
    <input type="date" name="datesub" value="<?php echo $row['datesub'] ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Submitted By</label>
    <input type="text" name="sub" value="<?php echo $row['sub'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Department</label>
    <input type="text" name="dep" value="<?php echo $row['dep'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Change Title</label>
    <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <input type="text" name="des" value="<?php echo $row['des'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="form-group ">
    <label for="exampleInputEmail1">Category</label>
    <select name='cat' value="<?php echo $row['cat'] ?>">  
        <option value="Planning">Planning</option>
        <option value="Design">Design</option>
        <option value="Construction">Construction</option>
        <option value="Finishing">Finishing</option>
    </select>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority' value="<?php echo $row['priority'] ?>">  
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status' value="<?php echo $row['status'] ?>">  
        <option value="New">New</option>
        <option value="Under Review">Under Review</option>
        <option value="Approved">Approved</option>
        <option value="Rejected">Rejected</option>
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Assigned to</label>
    <input type="text" name="assign" value="<?php echo $row['assign'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comment" value="<?php echo $row['comment'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Date Updated</label>
    <input type="date" name="dateup" value="<?php echo $row['dateup'] ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="up_btn"  class="btn btn-primary"> update</button>
</form>


<?php
if (isset($_POST['up_btn'])){
    $datesub = $_POST['datesub'];
     $sub = $_POST['sub'];
     $dep = $_POST['dep'];
     $title = $_POST['title'];
     $des = $_POST['des'];
     $cat = $_POST['cat'];
    $priority = $_POST['priority'];
     $status = $_POST['status'];
     $assign = $_POST['assign'];
     $comment = $_POST['comment'];
     $dateup = $_POST['dateup'];
     $query="UPDATE changereq SET datesub='$datesub',dep= '$dep', sub = '$sub' ,title = '$title',des = '$des', 
    cat='$cat', priority = '$priority', status = '$status', assign= '$assign', comment= '$comment', dateup= '$dateup'  WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/change.php","_self")
          
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