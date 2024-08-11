<?php include 'privacy.php' ?>;
<?php include 'conn.php' ?> ;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');
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
<button class="btxxn"><a href="padd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Date Created</th>
      <th scope="col">Created By</th>
      <th scope="col">Supplier Name </th>
      <th scope="col">Product/Service</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
     
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM pro";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['Datec']   ?></td>
            <td><?php echo $row['screate']   ?></td>
            <td><?php echo $row['supplier']   ?></td>
            <td><?php echo $row['product']   ?></td>
            <td><?php echo $row['quantity']   ?></td>
            <td><?php echo $row['price']   ?></td>
          
          </tr>
             
        </tbody>
       <?php }
       }
       else{
        echo "no record found";
       }
?>
<table class="table table-dark">
<thead>
<tr>
<th scope="col">#</th>

      <th scope="col">Total Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Approved Date</th>
      <th scope="col">Received Date</th>
      <th scope="col">Comments</th>
      <th scope="col">Last Updated</th>
      </tr>
      </thead>
      <?php
       $query="SELECT * FROM pro";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?><tbody>
          <tr>
          <th scope="row"><?php echo $row['id']   ?></th>
         
            <td><?php echo $row['total']   ?></td>
            <td><?php echo $row['status']   ?></td>
            <td><?php echo $row['approval']   ?></td>
            <td><?php echo $row['recieve']   ?></td>
            <td><?php echo $row['comments']   ?></td>
            <td><?php echo $row['last']   ?></td>
            <td><a href="pedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="pdel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
        </tr>
        <?php }
       }
       else{
        echo "no record found";
       }
?>
</table>
  

</body>
</html>








<?php ('include/footer.php') ?>    