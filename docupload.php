
<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;

<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <style>
        .upload-container {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            text-align: center;
        }
        #fileInput {
            display: none;
        }
    </style>
</head>
<body>

<div class="upload-container">
    <h2>Upload a PDF File</h2>
    <button id="uploadButton" type="button">Choose File</button>
    <form id="uploadForm" action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" id="fileInput" name="file" accept=".pdf">
        <br><br>
        <p id="fileName"></p>
        <button type="submit">Submit</button>
    </form>
</div>

<script>
    document.getElementById('uploadButton').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function() {
        var fileName = this.files[0].name;
        document.getElementById('fileName').innerText = 'Selected file: ' + fileName;
    });
</script>

</body>
</html>