<?php include 'privacy.php' ?>;
<?php 
session_start();
session_destroy();
header("location: login.php");
?>