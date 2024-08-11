
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
<button class="btxxn"><a href="actadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Activity Name</th>
      <th scope="col">Activity ID</th>
      <th scope="col">Added By </th>
      <th scope="col">Start date</th>
      <th scope="col">Expected End Date</th>
      <th scope="col">Status</th>
     
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM fuck";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['sname']   ?></td>
            <td><?php echo $row['sid']   ?></td>
            <td><?php echo $row['added']   ?></td>
            <td><?php echo $row['start']   ?></td>
            <td><?php echo $row['end']   ?></td>
            <td><?php echo $row['Category']   ?></td>
          
            <td><a href="actedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" href="actdel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
          
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