<?php 
session_start(); 
$pageTitle = "contact";
require_once 'layout/header.php';
require_once 'classes/ConnectionDb.php';

try {
    $pdo = ConnectionDb::getConnex();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['contact_nom'];
        $email = $_POST['contact_mail'];
        $text = trim($_POST['contact_text']);

        if (empty($name) || empty($email) || empty($text)) {
            $_SESSION['message'] = 'Tous les champs doivent être remplis';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['message'] = 'Veuillez entrer une adresse e-mail valide.';
        } else {
            $query = "INSERT INTO contact (contact_nom, contact_mail, contact_text) VALUES (:contact_nom, :contact_mail, :contact_text)";
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                ':contact_nom' => $name,
                ':contact_mail' => $email,
                ':contact_text' => $text
            ]);
            $_SESSION['message'] = 'Tout est ok, nous vous contacterons rapidement.';
        }
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit;
    }
} catch(PDOException $e) {
    $_SESSION['message'] = 'Échec lors de la tentative de contact : ' . $e->getMessage();
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
