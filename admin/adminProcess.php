<?php

require_once __DIR__ ."/../classes/ConnectionDb.php";
require_once __DIR__ ."/../classes/FunctionUse.php";

session_start();

try
{
    $pdo = ConnectionDb::getConnex();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['title']) && isset($_POST['text_content']) && isset($_FILES['images'])){
        $titre = $_POST['title'];
        $text_content = trim($_POST['text_content']);
        $publication_date = date('Y/m/d');
        $files = $_FILES['images'];
        $files_tmp = $files['tmp_name'];
        $filename = $files['name'];
    
        $destination = __DIR__ . '/../photo/photoactu/' . $filename;

        if (empty($titre) || empty($text_content) || empty($files_tmp)) 
        {
            $error = true;
            $_SESSION['message'] = 'Tous les champs doivent être remplis';
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        }else{
            $_SESSION['message'] = 'TOut est ok article ' . $titre . ' telecharger avec succé';
            header('Location:' . $_SERVER['PHP_SELF']);
        }



        if (is_uploaded_file($files_tmp ) && $files['error'] === UPLOAD_ERR_OK)
        {
             move_uploaded_file($files_tmp, $destination); 
        }else{ 
            $error = true;
            $_SESSION['message'] = 'erreur lors du telechargement de la photo';
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;

        }
        $query = "INSERT INTO actu (title, text_content, publication_date, images) VALUES (:title, :text_content, :publication_date, :images)";
        $stmt = $pdo->prepare($query);
        
        $stmt->execute([
            ':title' => $titre,
            ':text_content'=>$text_content,
            ':publication_date' => $publication_date,
            ':images'=> $filename
            
        ]);

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
} catch(PDOException $e) {
echo 'failed' . $e->getMessage();
}
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

