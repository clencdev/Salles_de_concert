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
?>



<main class="contact-container">
        <h1 class="contact-title">Nous contacter</h1>

        <div class="contact-intro">
            <h2 class="contact-subtitle">Vous souhaitez avoir des informations?</h2>
            <p class="contact-text">
                Prenez contact avec nous, laissez-nous tous vos coordonnées, et nous vous contacterons rapidement.
            </p>
        </div>

        <form method="POST" action="contact.php" class="contact-form">
            <div class="form-group">
                <label for="contact_nom" class="form-label">Nom</label>
                <input type="text" id="contact_nom" class="form-input" placeholder="Votre nom complet" name="contact_nom" required>
            </div>
            <div class="form-group">
                <label for="contact_mail" class="form-label">Mail</label>
                <input type="email" id="contact_mail" class="form-input" placeholder="votreemail@example.com" name="contact_mail" required>
            </div>
            <div class="form-group">
                <label for="contact_text" class="form-label">Votre question</label>
                <textarea id="contact_text" class="form-textarea" name="contact_text" placeholder="Écrivez votre question ici..." required></textarea>
            </div>
            <button type="submit" class="contact-submit">Envoyer</button>
        </form>
    </main>