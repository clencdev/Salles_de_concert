<?php
$pageTitle = "Actualité";
require_once "layout/header.php";
require_once "classes/ConnectionDb.php";

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    http_response_code(404);
    echo 'actu non trouvé';
    exit;
}


['id' => $id] = $_GET;
try {


    $pdo = ConnectionDb::getConnex();


    $stmt = $pdo->prepare("SELECT * FROM actu WHERE actu_id = ?");
    $stmt->execute([$id]);
    $actu = $stmt->fetch();

    // Verifie si l'id existe
    if (!$actu) {
        http_response_code(404);
        echo 'Aucune actu trouvée pour cet ID';
        exit;
    }
} catch (PDOException $e) {
    echo 'failed' . $e->getMessage();
}



require_once 'templates/blog_template.php';
