<?php
require_once __DIR__ . "/../classes/ConnectionDb.php";

session_start();

try {
    $pdo = ConnectionDb::getConnex();

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['event_name']) && isset($_POST['descriptions']) && isset($_FILES['photo'])) {
        $event = $_POST['event_name'];
        $description = trim($_POST['descriptions']);
        $files = $_FILES['photo'];
        $files_tmp = $files['tmp_name'];
        $filename = $files['name'];

        $destination = __DIR__ . '/../photo/photoevent/' . $filename;

        if (empty($event) || empty($description) || empty($files_tmp)) {
            $error = true;
            $_SESSION['message'] = 'Tous les champs doivent être remplis';
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $_SESSION['message'] = 'TOut est ok article ' . $titre . ' telecharger avec succé';
            header('Location:' . $_SERVER['PHP_SELF']);
        }



        if (is_uploaded_file($files_tmp) && $files['error'] === UPLOAD_ERR_OK) {
            move_uploaded_file($files_tmp, $destination);
        } else {
            $error = true;
            $_SESSION['message'] = 'erreur lors du telechargement de la photo';
            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        }
        $query = "INSERT INTO events (event_name, descriptions, photo) VALUES (:event_name, :descriptions, :photo)";
        $stmt = $pdo->prepare($query);

        $stmt->execute([
            ':event_name' => $event,
            ':descriptions' => $description,
            ':photo' => $filename

        ]);

        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
} catch (PDOException $e) {
    echo 'failed' . $e->getMessage();
}
if (isset($_SESSION['message'])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
