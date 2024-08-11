<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php
$select= "SELECT * FROM inno WHERE id='$id'";
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
    <label for="exampleInputEmail1">Date Subitted</label>
    <input type="date" name="dates" value="<?php echo $row['dates'] ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Submitted By</label>
    <input type="text" name="sub" value="<?php echo $row['sub'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Suggestion Title</label>
    <input type="text" name="title" value="<?php echo $row['title'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Suggestion Description</label>
    <input type="text" name="des" value="<?php echo $row['des'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority' value="<?php echo $row['priority'] ?>">  
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="High">High</option>
    </select>
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status' value="<?php echo $row['status'] ?>">  
        <option value="New">New</option>
        <option value="Under Review">Under Review</option>
        <option value="Implemented">Implemented</option>
        <option value="Rejected">Rejected</option>
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Reviewed By</label>
    <input type="text" name="review" value="<?php echo $row['review'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Review Date</label>
    <input type="date" name="rdate" value="<?php echo $row['rdate'] ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comment" value="<?php echo $row['comment'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="upi_btn"  class="btn btn-primary"> update</button>
</form>



<?php
if (isset($_POST['upi_btn'])){
    $date = $_POST['dates'];
    $sub = $_POST['sub'];
    $title = $_POST['title'];
    $des = $_POST['des'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $review = $_POST['review'];
    $rdate = $_POST['rdate'];
    $comment = $_POST['comment'];
     $query="UPDATE inno SET dates='$date', sub = '$sub' ,title = '$title',des = '$des', 
     priority = '$priority', status = '$status', review= '$review', rdate= '$rdate', comment= '$comment'  WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/innovation.php","_self")
          
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