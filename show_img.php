<?php 
require ("./db/modal.php");
$file_name = getFileById($_GET['id'])['file_name'];
$storage_dir = "storage/";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="show-img">
        <img src="<?php echo $storage_dir . $file_name?>" alt="">
    </div>
</body>
</html>