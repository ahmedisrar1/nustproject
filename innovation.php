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
<button class="btxxn"><a href="inadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Date submitted</th>
      <th scope="col">Submitted By</th>
      <th scope="col">Suggestion Title </th>
      <th scope="col">Suggestion Description</th>
      <th scope="col">Priority</th>
     
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM inno";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['dates']   ?></td>
            <td><?php echo $row['sub']   ?></td>
            <td><?php echo $row['title']   ?></td>
            <td><?php echo $row['des']   ?></td>
            <td><?php echo $row['priority']   ?></td>
           
          
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
 <th scope="col">Status</th>
      <th scope="col">Reviewed By</th>
      <th scope="col">Review Date</th>
      <th scope="col">Comments</th>
      </tr>
      </thead>
      <?php
       $query="SELECT * FROM inno";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
          <th scope="row"><?php echo $row['id']   ?></th>
          <td><?php echo $row['status']   ?></td>
            <td><?php echo $row['review']   ?></td>
            <td><?php echo $row['rdate']   ?></td>
            <td><?php echo $row['comment']   ?></td>
            <td><a href="inedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="indel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
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