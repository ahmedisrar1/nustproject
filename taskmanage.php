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
<button class="btxxn"><a href="taskadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Task Name</th>
      <th scope="col">Task Description</th>
      <th scope="col">Created Date </th>
      <th scope="col">Deadline</th>
      <th scope="col">Assigned To</th>
      <th scope="col">Priority</th>
      <th scope="col">status</th>
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM task";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['tname']   ?></td>
            <td><?php echo $row['tdes']   ?></td>
            <td><?php echo $row['createdate']   ?></td>
            <td><?php echo $row['deadline']   ?></td>
            <td><?php echo $row['assigned']   ?></td>
            <td><?php echo $row['priority']   ?></td>
            <td><?php echo $row['status']   ?></td>
          
            <td><a href="taskedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="taskdel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
          
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