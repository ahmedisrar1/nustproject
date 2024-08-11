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
    <label for="exampleInputEmail1">Date Submitted</label>
    <input type="date" name="datesub" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Submitted By</label>
    <input type="text" name="sub" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Department</label>
    <input type="text" name="dep" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Change Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <input type="text" name="des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>


  <div class="form-group ">
    <label for="exampleInputEmail1">Category</label>
    <select name='cat'>  
        <option value="Planning">Planning</option>
        <option value="Design">Design</option>
        <option value="Construction">Construction</option>
        <option value="Finishing">Finishing</option>
    </select>
  </div>
  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority'>  
        <option value="Low">Low</option>
        <option value="Medium">Medium</option>
        <option value="High">High</option>
    </select>
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status'>  
        <option value="New">New</option>
        <option value="Under Review">Under Review</option>
        <option value="Approved">Approved</option>
        <option value="Rejected">Rejected</option>
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Assigned to</label>
    <input type="text" name="assign" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comment"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Date Updated</label>
    <input type="date" name="dateup" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="adde_btn"  class="btn btn-primary"> Add</button>
</form>
<?php
if (isset($_POST['adde_btn'])){
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
     $query="INSERT INTO changereq (datesub,sub,dep,title,des,cat,priority,status,assign,comment,dateup) 
     VALUES('$datesub','$sub','$dep','$title','$des','$cat','$priority','$status','$assign','$comment','$dateup')";
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


