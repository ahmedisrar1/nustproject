<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>
<?php
$select= "SELECT * FROM pro WHERE id='$id'";
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
    <label for="exampleInputEmail1">Date Submitted</label>
    <input type="Date" name="Datec" value="<?php echo $row['Datec'] ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Created By</label>
    <input type="text" name="screate" value="<?php echo $row['screate'] ?>" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Supplier Name</label>
    <input type="text" name="supplier" value="<?php echo $row['supplier'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Product/Service</label>
    <input type="text" name="product" value="<?php echo $row['product'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Quantity</label>
    <input type="text" name="quantity" value="<?php echo $row['quantity'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">price</label>
    <input type="text" name="price" value="<?php echo $row['price'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Total Amount</label>
    <input type="text" name="total" value="<?php echo $row['total'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  <div class="form-group ">
    <label for="exampleInputEmail1">status</label>
    <select name='status' value="<?php echo $row['status'] ?>" >  
       
        <option value="Approved">Approved</option>
        <option value="Not Approved">Not Approved</option>
       
    </select>
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Approval Date</label>
    <input type="text" name="approval" value="<?php echo $row['approval'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
  
  <div class="form-group ">
    <label for="exampleInputEmail1">Recieved Date</label>
    <input type="date" name="recieve" value="<?php echo $row['recieve'] ?>" placeholder="YY/MM/DD" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <div class="form-group ">
    <label for="exampleInputEmail1">Comments</label>
    <input type="text" name="comments" value="<?php echo $row['comments'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group ">
    <label for="exampleInputEmail1">Last Updated </label>
    <input type="text" name="last" value="<?php echo $row['last'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="up_btn"  class="btn btn-primary"> Update</button>
</form>

<?php
if (isset($_POST['up_btn'])){
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
     $query="UPDATE pro SET Datec='$date', screate = '$create' ,supplier = '$sup',product = '$product', 
     quantity = '$quantity', price= '$price', total= '$total', status = '$status', approval= '$app', recieve= '$rec', comments= '$comments', last='$update'  WHERE id='$id'";
     $data=mysqli_query($con,$query);
     if($data){
    ?>
        <script type="text/javascript">
          alert("update suceesfully");
          window.open("http://localhost/admin/AdminLTE/procure.php","_self")
          
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