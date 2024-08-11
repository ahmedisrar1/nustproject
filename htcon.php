
<?php include 'conn.php' ?> ;
<?php $room = $_POST['room'] ?>;
<?php

$sql = "SELECT msg, stime, ip FROM msg WHERE room = '$room' ";


$res = "";
$result = mysqli_query($con, $sql);
if(mysqli_num_rows($result)>0)
{
    while($row = mysqli_fetch_assoc($result))
    {
          $res = $res . '<div class="Container">';
        //   $res = $res . $row['ip'];
          $res = $res ." <p> " .$row['msg'];
        $res = $res .'</p><span class="time-right"> ' .$row['stime']  . '</span></div>';
    }
}

echo $res;

?>