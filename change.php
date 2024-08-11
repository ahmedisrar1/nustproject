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
<button class="btxxn"><a href="changeadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Date submitted</th>
      <th scope="col">Submitted By</th>
      <th scope="col">Department</th>
      <th scope="col">Change Title </th>
      <th scope="col">Description</th>
      <th scope="col">Category</th>
     
    </tr>
  </thead>
  <?php
       $query="SELECT * FROM changereq";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['datesub']   ?></td>
            <td><?php echo $row['sub']   ?></td>
            <td><?php echo $row['dep']   ?></td>
            <td><?php echo $row['title']   ?></td>
            <td><?php echo $row['des']   ?></td>
            <td><?php echo $row['cat']   ?></td>
   <?php }} ?>   
  <table class="table table-dark">
  <thead>
  <th scope="col">#</th>
  <th scope="col">Priority</th>
      <th scope="col">Status</th>
      <th scope="col">Assigned to</th>
      <th scope="col">Comments</th>
      <th scope="col">Date Updated</th>
  </thead>
      
  <?php
       $query="SELECT * FROM changereq";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> <tbody>
            <th scope="row"><?php echo $row['id']   ?></th>
  <td><?php echo $row['priority']   ?></td>
            <td><?php echo $row['status']   ?></td>
            <td><?php echo $row['assign']   ?></td>
            <td><?php echo $row['comment']   ?></td>
            <td><?php echo $row['dateup']   ?></td>
            <td><a href="changeedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="changedel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
          
          </tr>
             
        </tbody>
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