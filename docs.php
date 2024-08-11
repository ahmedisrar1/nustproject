<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
    <form action="u.php" method="post" enctype="multipart/form-data">
        <label for="folderName">Folder Name:</label>
        <input type="text" name="folderName" id="folderName" required><br><br>
        <label for="fileToUpload">Select file to upload:</label>
        <input type="file" name="fileToUpload" id="fileToUpload" required><br><br>
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>