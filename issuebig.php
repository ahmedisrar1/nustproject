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
<button class="btxxn"><a href="issueadd.php">Add New</a> </button>
<table class="table table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Issue Title</th>
      <th scope="col">Issue Description</th>
      <th scope="col">Issue Category </th>
      <th scope="col">Priority</th>
      <th scope="col">Status</th>
      
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM issue";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['ititle']   ?></td>
            <td><?php echo $row['ides']   ?></td>
            <td><?php echo $row['icat']   ?></td>
            <td><?php echo $row['priority']   ?></td>
            <td><?php echo $row['status']   ?></td>
          
          
          </tr>
             
        </tbody>
       <?php }
       }
       else{
        echo "no record found";
       }
?>
 
 
</table>
<table class="table table-dark">
  <thead>
    <tr>
    <th scope="col">#</th>
    <th scope="col">Assigned To</th>
      <th scope="col">Due Date</th>
      <th scope="col">Date Created</th>
      <th scope="col">Last updated</th>
      <th scope="col">Comments</th>
      </tr>
      </thead>
      <?php
       $query="SELECT * FROM issue";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
          <th scope="row"><?php echo $row['id']   ?></th>
          <td><?php echo $row['assigned']   ?></td>
            <td><?php echo $row['duedate']   ?></td>
            <td><?php echo $row['datecreate']   ?></td>
            <td><?php echo $row['lastupdate']   ?></td>
            <td><?php echo $row['comments']   ?></td>
            <td><a href="issueedit.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" 
            href="issuedel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>

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