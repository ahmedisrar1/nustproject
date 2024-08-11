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
<button class="btxxn"><a href="inspadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Title of Report </th>
      <th scope="col">Link</th>
  
     
    </tr>
  </thead>
  <?php
      
       $query="SELECT * FROM insp";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['title']   ?></td>
            <td><a href="inspview.php?id=<?php echo $row['id']; ?>">View</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="inspdel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
   <?php  ?>   
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