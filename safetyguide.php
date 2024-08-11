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
 
  <h2 style="text-align:center"> Safety Guidlines</h2>
<button class="btxxn"><a href="safetyadd.php">Add New</a> </button>





    <?php
       $query="SELECT * FROM guide";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>
    <button><a href="safetyedit.php?id=<?php echo $row['id']; ?>">edit</a></button>

    <?php }
       }
       else{
        echo "no record found";
       }
?>
      



<div class="new">


      <div class="table" style="font-size :20px;">General Safety Guidlines</div>
      
    
     

   <?php
       $query="SELECT * FROM guide";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  
            
            <div class="table"><?php echo $row['safety']   ?></div>
            
          
       
       <?php }
       }
       else{
        echo "no record found";
       }
?>
 
 



      <div class="table" style="font-size :20px;">Emergency Procedures</div>
      
    
     
   
   <?php
       $query="SELECT * FROM guide";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  
            <div class="table" ><?php echo $row['emergency']   ?></div>

           
          
          
         
       <?php }
       }
       else{
        echo "no record found";
       }
?>
 
 



      <div class="table" style="font-size :20px;">Equipement Safety Guidlines</div>
      
    
     
  
   <?php
       $query="SELECT * FROM guide";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> 
            <div class="table" ><?php echo $row['equip']   ?></div>
            
           
          
          
         
       <?php }
       }
       else{
        echo "no record found";
       }
?>
</div>
 
 
