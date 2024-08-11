
<?php include 'privacy.php' ;
include 'conn.php' ?>;



<?php
$room = $_POST['room'];

if (strlen($room)>20)
{
    $message = "Please chose a name between 2 to 20 character";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
echo '</script>';   

}
else if(!ctype_alnum($room)){
    $message="please choose an alphanumeric topic name";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo '</script>';  
}

 $s = "SELECT * FROM `rooms` WHERE roomname='$room'";
 $result= mysqli_query($con,$s);
 if($result) {

  if(mysqli_num_rows($result)>0)
  {
    $message= "please chose a different room";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
 
    echo '</script>'; 

  }

else{

  $sql= "INSERT INTO `rooms` (`roomname`,`stime`) VALUES ('$room' , CURRENT_TIMESTAMP);";
  if(mysqli_query($con, $sql))
  {
    $message ="your topic is ready you can chat now";
    echo '<script language="javascript">';
    echo 'alert("'.$message.'");';
    echo 'window.location="http://localhost/admin/AdminLTE/rooms.php?roomname=' .$sno .'";';
    echo '</script>'; 
  }
}
 }
 else{
  echo "error:" .mysqli_error($con);
 }
?>
