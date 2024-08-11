
<?php include 'privacy.php' ?>;
<?php  include 'conn.php' ?>;


<?php
// Define the base directory for uploads
$directory_path = 'your_directory_path/';

// Ensure the base directory exists
if (!file_exists($directory_path)) {
    mkdir($directory_path, 0777, true);
}
$folderName = basename($_POST['folderName']);
// Get the uploaded file name and create a folder name based on it
$fileName = basename($_FILES["file"]["name"]);
$folderName = pathinfo($folderName, PATHINFO_FILENAME); // Use the file name (without extension) as the folder name
$targetDir = $directory_path. $folderName . '/';

// Create the folder if it doesn't exist
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Define the target file path
$targetFile = $targetDir . $fileName;
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the uploaded file is a PDF
if ($fileType != "pdf") {
    echo "Sorry, only PDF files are allowed.";
    exit;
}

// Check if file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    exit;
}

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "The file ". htmlspecialchars($fileName) . " has been uploaded to folder '$folderName'.";
} else {
    echo "Sorry, there was an error uploading your file.";
}
?>