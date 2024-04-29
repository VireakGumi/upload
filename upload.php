<?php
$file = $_FILES["fileToUpload"];
$storage_dir = "storage/"; // Specify the storage directory path
$target_file = $storage_dir . basename($_FILES["fileToUpload"]["name"]);

// Move the uploaded file to the storage directory
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file has been uploaded to storage.";
} else {
    echo "Sorry, there was an error uploading your file.";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?php echo $target_file?>">click me</a>
    <!-- <a href="./show_img.php?file_name=<?php echo basename($_FILES["fileToUpload"]["name"])?>">click me</a> -->
</body>

</html>