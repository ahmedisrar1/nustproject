
<?php include 'privacy.php'?>  
<?php include 'conn.php' ?>;
<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');
?>
<?php  
error_reporting(0);
ini_set('display_errors',0);

?>



<?php $roomname = $_GET['roomname'] ?>

<?php
 $sql = "SELECT * FROM `rooms` WHERE roomname= '$roomname'";
 $result = mysqli_query($con,$sql);

?> 



<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.anyClass{
   height: 350px;
   overflow-y: scroll;
}
</style>
</head>
<body>

<h2>Chat Messages - <?php echo $roomname ?> </h2>

    <div class="ses">
 <div class="container">
    <div class="anyClass">

  </div>      
</div> 


<input type="text" class="form-control"  name="usermsg" id="usermsg" placeholder="add message"><br>
<button class="btn btn-default" name="submitmsg" id="submitmsg">Send</button>

</div>
 


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<script type="text/javascript">

setInterval(runFunction, 1000) ;
        function runFunction()
        {
          $.post("htcon.php", {room:'<?php echo $roomname ?>'},
          function (data,status){
            document.getElementsByClassName('anyclass')[0].innerHTML =data;
          }
        )
        }



var input = document.getElementById("usermsg");

input.addEventListener("keypress", function(event) {
 
  if (event.key === "Enter") {
  
    event.preventDefault();
  
    document.getElementById("submitmsg").click();
  }
});



$("#submitmsg").click(function(){
    var clientmsg = $("#usermsg").val();
  $.post("postmsg.php", {text:clientmsg,room:'<?php echo $roomname  ?>',ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
  function(data,status){
    document.getElementsByClassName('anyclass')[0].innerHTML=data;});
    $("#usermsg").val("");
  return false;
  });


</script>

</body>
</html>





<?php ('include/footer.php') ?>    