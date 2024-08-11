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
    <input type="Date" name="Datec" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created By</label>
    <input type="text" name="screate" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Supplier Name</label>
    <input type="text" name="supplier" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Product/Service</label>
    <input type="text" name="product" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Quantity</label>
    <input type="text" name="quantity" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">price</label>
    <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Total Amount</label>
    <input type="text" name="total" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status'>  
       
        <option value="Under Review">Approved</option>
        <option value="Implemented">Not Approved</option>
       
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Approval Date</label>
    <input type="text" name="approval" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Recieved Date</label>
    <input type="date" name="recieve" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comments" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Last Updated </label>
    <input type="text" name="last" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="ad_btn"  class="btn btn-primary"> Add</button>
</form>
<?php
if (isset($_POST['ad_btn'])){
     $date = $_POST['Datec'];
     $create= $_POST['screate'];
     $sup = $_POST['supplier'];
     $product = $_POST['product'];
     $quantity = $_POST['quantity'];
     $price = $_POST['price'];
     $total = $_POST['total'];
     $status = $_POST['status'];
     $app = $_POST['approval'];
     $rec = $_POST['recieve'];
     $comments = $_POST['comments'];
     $update = $_POST['last'];
     $query="INSERT INTO pro (Datec,screate,supplier,product,quantity,price,total,status,approval,recieve,comments,last) 
     VALUES('$date','$create','$sup','$product','$quantity','$price','$total','$status','$app','$rec','$comments','$update')";
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
