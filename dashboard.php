
<?php 
session_start();

if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin']!=true ){
  header("location: login.php");
  exit;
}
?>




<?php 
include('include/header.php');
include('include/topbar.php');
include('include/sidebar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and Embed iFrame</title>
    <style>
        .container {
            position: relative;
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }
        iframe {
            width: 100%;
            height: 400px;
            border: 1px solid #ccc;
        }
        .input-box {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="input-box">
            <input type="text" id="urlInput" placeholder="Enter URL here" style="width: 80%;">
            <button onclick="updateIframe()">Search</button>
        </div>
        <iframe id="iframe" src="https://www.google.com/?igu=1" frameborder="0"></iframe>
    </div>

    <script>
        function updateIframe() {
            const url = document.getElementById('urlInput').value;
            document.getElementById('iframe').src = url;
        }
    </script>
</body>
</html>