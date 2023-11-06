<?php 
require_once __DIR__ . '/../layout/header.php';

?>

<main class="bg-gray-100">

<div class="container mx-auto p-4">
    <h1 class="text-4xl mb-4">Blog</h1>

//article de base donnée
    <div class="bg-white p-4 rounded mb-4 shadow">
        <img src="#" alt="Article Image" class="w-full h-56 object-cover rounded-t">
        <div class="p-4">
            <h2 class="text-xl font-bold mb-2">Title from Database</h2>
            <p class="text-gray-600">Published on: Date from Database</p>
        </div>
    </div>
    <!-- Fin de la répétition -->

</div>

</main>