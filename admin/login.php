<?php
require_once __DIR__ . "/../classes/ConnectionDb.php";
session_start();

try {
    $pdo = ConnectionDb::getConnex();

    // Vérifiez si les données du formulaire ont été envoyées
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM admin WHERE username = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            header("Location: adminInterface.php");
            exit;
        } else {
            echo "Identifiants incorrects.";
        }
    } else {
        echo "Données du formulaire manquantes.";
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
