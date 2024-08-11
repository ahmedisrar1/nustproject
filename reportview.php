<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>

<?php  $id = $_GET['id']   ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="custom.css">

</head>
<body>
<h4 class="table"> Site Visit Report</h4>
<table class="table table-light">
  <thead>
    <tr>

      
      <th scope="col">Feilds</th>
      <th scope="col">Report</th>
    
     
    </tr>
  </thead>
  <?php
       $query="SELECT * FROM report WHERE id = '$id'";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
              <th> Date </th>
              <th> <?php echo $row['sdate'] ?>  </th>
              
   <?php }} ?>
   <thead>
    <tr>

      
      <th scope="col">Project Name</th>
      <?php
       $query="SELECT * FROM report WHERE id = '$id'";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> 
      <th scope="col"><?php echo $row['project'] ?></th>
    
     
    </tr>
  </thead>   
  <?php }} ?>
  <thead>
    <tr>

      
      <th scope="col">Site Location</th>
      <?php
       $query="SELECT * FROM report WHERE id = '$id'";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> 
      <th scope="col"><?php echo $row['slocation'] ?></th>
    
     
    </tr>
  </thead>   
  <?php }} ?>
  <thead>
    <tr>

      
      <th scope="col">Visitor Name</th>
      <?php
       $query="SELECT * FROM report WHERE id = '$id'";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> 
      <th scope="col"><?php echo $row['vname'] ?></th>
    
     
    </tr>
  </thead>   
  <?php }} ?>
  <thead>
    <tr>

      
      <th scope="col">Purpose of Visit</th>
      <?php
       $query="SELECT * FROM report WHERE id = $id";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> 
      <th scope="col"><?php echo $row['pvisit'] ?></th>
    
     
    </tr>
  </thead>   
  <?php }} ?>
  
        </table>

  <h4 class="table">  Visit Details</h4>
  <table class="table table-light">
  <thead>
  
  
      <th scope="col">Time</th>
      <th scope="col">Area/Zone</th>
      <th scope="col">Activity/Obeservation</th>
      <th scope="col">Notes/Comments</th>
  
  </thead>
      
  <?php
       $query="SELECT * FROM report WHERE id = '$id'";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> <tbody>
            
             <td><?php echo $row['stime']   ?></td>
            <td><?php echo $row['area']   ?></td>
            <td><?php echo $row['activity']   ?></td>
            <td><?php echo $row['notes']   ?></td>
         
       
          </tr>
             
        </tbody>
       <?php }
       }
       else{
        echo "no record found";
       }
?>
</table>
  

<h4 class="table">  Findings</h4>
  <table class="table table-light">
  <thead>
  
  
      <th scope="col">Item No.</th>
      <th scope="col">Description of Findings</th>
      <th scope="col">Status</th>
      <th scope="col">Remarks/Comments</th>
  
  </thead>
      
  <?php
       $query="SELECT * FROM report WHERE id = '$id'";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> <tbody>
            
             <td><?php echo $row['id']   ?></td>
            <td><?php echo $row['des']   ?></td>
            <td><?php echo $row['status']   ?></td>
            <td><?php echo $row['remarks']   ?></td>
         
       
          </tr>
             
        </tbody>
       <?php }
       }
       else{
        echo "no record found";
       }
?>
</table>


<h4 class="table">  Recommendations</h4>
  <table class="table table-dark">
  <thead>
  
  
      <th scope="col">No.</th>
      <th scope="col">Recommendations</th>
      <th scope="col">Priority</th>
      <th scope="col">Due Date</th>
  
  </thead>
      
  <?php
       $query="SELECT * FROM report WHERE id = '$id'";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> <tbody>
            
             <td><?php echo $row['id']   ?></td>
            <td><?php echo $row['rec']   ?></td>
            <td><?php echo $row['priority']   ?></td>
            <td><?php echo $row['due']   ?></td>
         
       
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
