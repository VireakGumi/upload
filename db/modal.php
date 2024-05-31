<?php
require ("./db/db.php");

function storeFileName($fileName) {
    global $pdo;
    $statement = $pdo->prepare("insert into file (file_name) values (:file_name)");
    $statement->execute([
        ':file_name' => $fileName
    ]);
    return $statement->rowCount() > 0;
}

function getFile($fileName) { 
    global $pdo;
    $statement = $pdo->prepare("select * from file where file_name = :file_name");
    $statement->execute([
        ':file_name' => $fileName
    ]);
    return $statement->fetch();
}
function getFileById($id) { 
    global $pdo;
    $statement = $pdo->prepare("select * from file where id = :id");
    $statement->execute([
        ':id' => $id
    ]);
    return $statement->fetch();
}