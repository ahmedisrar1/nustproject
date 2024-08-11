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
<button class="btxxn"><a href="dailyadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">Location</th>
      <th scope="col">Task/Activity Description </th>
      <th scope="col">Workforce Involved</th>
     
    </tr>
  </thead>
  <?php
       $query="SELECT * FROM dae";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['dates']   ?></td>
            <td><?php echo $row['stime']   ?></td>
            <td><?php echo $row['location']   ?></td>
            <td><?php echo $row['task']   ?></td>
            <td><?php echo $row['work']   ?></td>
   <?php }} ?>   
  <table class="table table-dark">
  <thead>
  <th scope="col">#</th>
  
      <th scope="col">Duration</th>
      <th scope="col">Material Used</th>
      <th scope="col">Equipment used</th>
      <th scope="col">Issues/observation</th>
      <th scope="col">Status</th>
  </thead>
      
  <?php
       $query="SELECT * FROM dae";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> <tbody>
            <th scope="row">
             <?php echo $row['id']   ?></th>
             <td><?php echo $row['duration']   ?></td>
            <td><?php echo $row['material']   ?></td>
            <td><?php echo $row['equipement']   ?></td>
            <td><?php echo $row['issues']   ?></td>
            <td><?php echo $row['status']   ?></td>
            <td><a href="dailyedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="dailydel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
          
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