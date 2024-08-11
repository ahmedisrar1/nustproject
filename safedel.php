<?php include 'privacy.php' ?>;
<?php include 'conn.php' ;
$id= $_GET['id'] ;
$query = "DELETE FROM safety WHERE id= '$id'";
$data = mysqli_query($con, $query);
if($data){
    ?>
    <script type="text/javascript">
    alert("data deleted sucesfully");
    window.open("http://localhost/admin/AdminLTE/safetymanage.php","_self")
    </script>
    <?php
}   
else {
    ?>
     <script type="text/javascript">
    alert("please try again")
    </script>
    <?php
}
?>