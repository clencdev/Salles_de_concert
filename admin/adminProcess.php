<?php

require_once __DIR__ ."/../classes/ConnectionDb.php";
require_once __DIR__ ."/../classes/FunctionUse.php";



try {
    $pdo = ConnectionDb::getConnex();

    $title = $_POST['title'];
    $text_content = $_POST['text_content'];
    $image = $_FILES['image'];

    $destination = __DIR__ .'/photo/photoactu/' . $image['name'];

    if (!is_uploaded_file($image['tmp_name']) || $image['error'] !== UPLOAD_ERR_OK) {
        FunctionUse::redirect('error.php');
    }

    if (!move_uploaded_file($image['tmp_name'], $destination)) {
        FunctionUse::redirect('error.php');
    }

    $publication_date = date('Y-m-d H:i:s');

    $query = "INSERT INTO actu (`title`, `text_content`, `image`) VALUES (:title, :text_content, :image)";
    $stmtInsert = $pdo->prepare($query);  

    $stmtInsert->execute([
        'title' => $title,
        'text_content' => $text_content,
        'image' => $image['name']  
    ]);

    echo "tout est ok";

} catch (PDOException $e) {  
    FunctionUse::redirect("error.php");
}
