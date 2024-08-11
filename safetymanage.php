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
<button class="btxxn"><a href="safeadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Date of Incident</th>
      <th scope="col">Reported by</th>
      <th scope="col">Location</th>
      <th scope="col">Incident Type</th>
      <th scope="col">Description</th>
      <th scope="col">Severity</th>
 
    </tr>
  </thead>
  <?php
       $query="SELECT * FROM safety";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['idate']   ?></td>
            <td><?php echo $row['report']   ?></td>
            <td><?php echo $row['location']   ?></td>
            <td><?php echo $row['incident']   ?></td>
            <td><?php echo $row['des']   ?></td>
            <td><?php echo $row['severity']   ?></td>
          <?php }} ?> 
        </table>
  <table class="table table-dark">
  <th scope="col">#</th>
  <th scope="col">Actions Taken</th>
      <th scope="col">Follow-Up Required</th>
      <th scope="col">Status</th>
      <th scope="col">Assigned</th>
      <th scope="col">Comments</th>
  
  <?php
       $query="SELECT * FROM safety";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> <tbody>
             <th scope="row"><?php echo $row['id']   ?></th>
  <td><?php echo $row['action']   ?></td>
            <td><?php echo $row['follow']   ?></td>
            <td><?php echo $row['status']   ?></td>
            <td><?php echo $row['assign']   ?></td>
            <td><?php echo $row['comment']   ?></td>
            <td><a href="safeedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="safedel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
          
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