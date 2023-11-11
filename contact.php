<?php
$pageTitle = "contact";
require_once "layout/header.php";
?>


<main class="contact-container">
        <h1 class="contact-title">Nous contacter</h1>

        <div class="contact-intro">
            <h2 class="contact-subtitle">Vous souhaitez avoir des informations?</h2>
            <p class="contact-text">
                Prenez contact avec nous, laissez-nous tous vos coordonnées, et nous vous contacterons rapidement.
            </p>
        </div>

        <form method="POST" action="contactProcess.php" class="contact-form">
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