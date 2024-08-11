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
<button class="btxxn"><a href="apadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Change Request ID</th>
      <th scope="col">Approvers</th>
      <th scope="col">Current status </th>
      <th scope="col">Date submitted</th>
      <th scope="col">Due Date</th>
      <th scope="col">comments</th>
      <th scope="col">Date Updated</th>
     
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM app";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['pid']   ?></td>
            <td><?php echo $row['appr']   ?></td>
            <td><?php echo $row['status']   ?></td>
            <td><?php echo $row['datesub']   ?></td>
            <td><?php echo $row['due']   ?></td>
            <td><?php echo $row['comment']   ?></td>
            <td><?php echo $row['dateup']   ?></td>
          
            <td><a href="apedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" href="apdel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
          
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