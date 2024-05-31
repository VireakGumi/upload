<?php
require ("./db/modal.php");
$file = $_FILES["fileToUpload"];
$storage_dir = "storage/"; // Specify the storage directory path
$file_name = basename($_FILES["fileToUpload"]["name"]);
storeFileName($file_name);
$file = getFile($file_name);


$target_file = $storage_dir . $file_name;


// Move the uploaded file to the storage directory
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file has been uploaded to storage." . "\n";
} else {
    echo "Sorry, there was an error uploading your file."  . "\n";
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
    <!-- <a href="<?php echo $file['id']?>">click me</a> -->
    <a href="./show_img.php?id=<?php echo $file['id']?>">click me</a>
</body>

</html>