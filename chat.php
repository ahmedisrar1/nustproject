
<?php include 'privacy.php' ;
include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');
?>



  <Script>
    if(window.history.replaceState)
    {
       window.history.replaceState(null,null.window.location.href);
    }

  </Script>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Material Messaging App Concept</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="styl.css">
</head>
<body>
<!-- partial:index.partial.html -->
<form action="claim.php" method="POST">
<body>
  <div class="container">
    <div class="row">
      <nav class="menu">
        <ul class="items">
          <li class="item">
            <i class="fa fa-home" aria-hidden="true"></i>
          </li>
          <li class="item">
            <i class="fa fa-user" aria-hidden="true"></i>
          </li>
          <li class="item">
            <i class="fa fa-pencil" aria-hidden="true"></i>
          </li>
          <li class="item item-active">
            <i class="fa fa-commenting" aria-hidden="true"></i>
          </li>
          <li class="item">
            <i class="fa fa-file" aria-hidden="true"></i>
          </li>
          <li class="item">
            <i class="fa fa-cog" aria-hidden="true"></i>
          </li>
        </ul>
      </nav>

   
      <section class="discussions">
        <div class="discussion search">
          <div class="searchbar">
            <i class="#" aria-hidden="true"></i>
   
            <input type="text" name="room" placeholder="Topic"></input>
            
          </div>
          <button class="btn btn-primary">create</button>
        </div>

        <?php
      
       $query="SELECT * FROM rooms ";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?> 
     
        <div class="discussion message-active">
          <div class="photo" style="background-image: url(https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80);">
            <div class="online"></div>
          </div>
          <div class="desc-contact">
          <a href="rooms.php?roomname=<?php echo $row['sno']; ?>">   <p style="fontsize:10px;" class="name" ><?php echo $row['roomname'] ?></p></a>
        
          </div>
          <div class="timer">12 sec</div>
        </div>
        
        <?php }
       }
       else{
        echo "no record found";
       }
?>
       
    
    </div>
  </div>
</body>
<!-- partial -->
</form>
  <script  src="script.js"></script>



<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</body>
</html>
