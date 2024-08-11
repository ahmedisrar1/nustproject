<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;

<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>




<!DOCTYPE html>
<html>
<head>
    <title>Create Folder</title>
    <link rel="stylesheet" href="custom.css">
</head>
<body>

    <div class="table">
    <?php
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $directory_name = $_POST['foldername'];
    $directory_path = "your_directory_path/" . $directory_name; // Replace with your desired directory path

    // Create folder if it does not exist
    if (!file_exists($directory_path)) {
        if (mkdir($directory_path, 0777, true)) {
            // Insert folder info into database
            echo "folder created succesfully";
            $stmt = ("INSERT INTO `folders` ( `folder_name`, `created_at`) VALUES ( '$directory_name', current_timestamp());");
           $query = mysqli_query($con,$stmt);
           if(mysqli_query($con,$stmt)){
            echo 'window.location="http://localhost/admin/AdminLTE/docupload.php?folder_name=' .$id.'";';
           }
        } else {
            echo "Failed to create folder.<br>";
        }
    } else {
        echo "Folder '$directory_name' already exists.<br>";
    }
}
?>
    <form action="" method="post">
        <label for="foldername">Folder Name:</label>
        <input type="text" id="foldername" name="foldername" required>
        <input type="submit" value="Create Folder">
    </form>
    <table class="table-dark">
  <thead>
    <tr>

      <th scope="col">#</th>
      <th scope="col">Folder</th>
      <th scope="col">Created At</th>
   
     
    </tr>
  </thead>
   <?php
       $query="SELECT * FROM folders";
       $data=mysqli_query($con, $query);
       $result=mysqli_num_rows($data);
       if($result){
        while($row=mysqli_fetch_array($data)){
        ?>  <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']   ?></th>
              <td><?php echo $row['folder_name']   ?></td> 
            <td><?php echo $row['created_at']   ?></td>
            <td><a  href="docupload.php?folder_name=<?php echo $row['id']; ?>">Upload</a> </td>
            <td><a onclick="return confirm('are you sure you eant to delete')" href="docdel.php?id=<?php echo $row['id']; ?>">Delete</a> </td>
          
          </tr>
             
        </tbody>
       <?php }
       }
       else{
        echo "no record found";
       }
?>
 
 
</table>
</div>
</body>
</html>










<?php ('include/footer.php') ?>    