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
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>


<body>
 
  <h2 style="text-align:center"> Project info</h2>
<button class="btxxn"><a href="goals.php">Add New</a> </button>






    <?php
       $query="SELECT * FROM proj";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>
    <button><a href="new.php?id=<?php echo $row['id']; ?>">edit</a></button>

    <?php }
       }
       else{
        echo "no record found";
       }
?>
      



      <div class="new">


      <div class="table" style="font-size :20px;">Project Description</div>
      
    
     
   
   <?php
       $query="SELECT * FROM proj";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  
            
            <div class="table"><?php echo $row['project']   ?></div>
            
          
       
       <?php }
       }
       else{
        echo "no record found";
       }
?>
 
 


    <div class="table" style="font-size :20px;">Project Goals</div>
      
    
     
   
   <?php
       $query="SELECT * FROM proj";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  
            <div class="table" ><?php echo $row['goals']   ?></div>

           
          
          
       
       <?php }
       }
       else{
        echo "no record found";
       }
?>
 
 


      <div class="table">Project Scope</div>
      
    
  
   <?php
       $query="SELECT * FROM proj";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> 
            <div class="table"><?php echo $row['scope']   ?></div>
            
           
          
     
       <?php }
       }
       else{
        echo "no record found";
       }
?>
 
 


</div>
  
<h2 style="text-align:center"> key Stakeholder</h2>
<button class="btxxn"><a href="addskt.php">Add New</a> </button>
<table class="table table-dark" id="middlecol">
  <thead>
    <tr>

      <th scope="col">Sr. No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col"> Role</th>
    
     
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM brand";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
            <td><?php echo $row['sname']   ?></td>
            <td><?php echo $row['email']   ?></td>
            <td><?php echo $row['srole']   ?></td>
            <td><a href="editab.php?id=<?php echo $row['id']; ?>">edit</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" href="del.php?id=<?php echo $row['id']; ?>">Delete</a> </td>

          
          
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