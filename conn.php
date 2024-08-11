
<?php

$host="localhost";
$user="root";
$pass="";
$db="milestone";

$con=mysqli_connect($host,$user,$pass,$db);

if($con){
     "ok" ;
}
else {
    echo "db not connected";
}

?>