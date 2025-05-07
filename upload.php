<?php
require ("./db/modal.php");
$file = $_FILES["fileToUpload"];
$storage_dir = "storage/"; // Specify the storage directory path
// get file type
$file_type = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
// generate a unique file name
$file_name = uniqid() . '.' . $file_type;
// store file

$target_file = $storage_dir . $file_name;

// Move the uploaded file to the storage directory
if (!file_exists($storage_dir)) {
    mkdir($storage_dir, 0777, true);
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists." . "\n";
    return;
}
elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    storeFileName($file_name);
    echo "The file has been uploaded to storage." . "\n";
} else {
    echo "Sorry, there was an error uploading your file."  . "\n";
    return;
}

$images = getImages();

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
    <!-- <div class="show-img">
        <img src="<?php echo $storage_dir . $file_name ?>" alt="">
    </div> -->
    <div class="container">
        <div class="row">
            <?php
            foreach ($images as $image) {
            ?>
                <div class="col-md-4">
                    <div class="card card-custom">
                        <img src="<?= $storage_dir . $image['file_name']?>" class="card-img-top" alt="Image">
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>