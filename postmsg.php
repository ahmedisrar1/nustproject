<?php
 include 'conn.php' ;

$msg = $_POST['text'];
$room= $_POST['room'];
$ip = $_POST['ip'];

$sql= "INSERT INTO `msg` ( `msg`, `room` ,`ip`, `stime`) VALUES ( '$msg', '$room' , '$ip', current_timestamp())";
mysqli_query($con, $sql);
mysqli_close($con);



?>