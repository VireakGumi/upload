<?php
require("./db/modal.php");
// get id
$id = $_GET['id'] ?? null;
$file_name = getFileById($id);
$storage_dir = "storage/";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show images</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-custom {
            margin: 20px;
            border: none;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="show-img">
        <img src="<?php echo $storage_dir . $file_name ?>" alt="">
    </div>
</body>

</html>