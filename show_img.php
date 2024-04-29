<?php 
$file_name = $_GET['file_name'];
$storage_dir = "storage/";
echo $storage_dir . $file_name;
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