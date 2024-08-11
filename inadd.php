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
    <input type="date" name="dates" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Submitted By</label>
    <input type="text" name="sub" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Suggestion Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Suggestion Description</label>
    <input type="text" name="des" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Priority</label>
    <select name='priority'>  
        <option value="low">Low</option>
        <option value="medium">Medium</option>
        <option value="High">High</option>
    </select>
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status'>  
        <option value="New">New</option>
        <option value="Under Review">Under Review</option>
        <option value="Implemented">Implemented</option>
        <option value="Rejected">Rejected</option>
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Reviewed By</label>
    <input type="text" name="review" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Review Date</label>
    <input type="date" name="rdate" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <button type="submit" name="added_btn"  class="btn btn-primary"> Add</button>
</form>
<?php
if (isset($_POST['added_btn'])){
     $date = $_POST['dates'];
     $sub = $_POST['sub'];
     $title = $_POST['title'];
     $des = $_POST['des'];
     $priority = $_POST['priority'];
     $status = $_POST['status'];
     $review = $_POST['review'];
     $rdate = $_POST['rdate'];
     $comment = $_POST['comment'];
     $query="INSERT INTO inno (dates,sub,title,des,priority,status,review,rdate,comment) 
     VALUES('$date','$sub','$title','$des','$priority','$status','$review','$rdate','$comment')";
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


