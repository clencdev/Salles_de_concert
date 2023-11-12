<?php
$pageTitle = "Page Admin";
require_once __DIR__ . '/../layout/header.php';
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: auth.php");
  exit;
}


?>
<div style="position: fixed; top: 10px; right: 10px;">
  <a href="logout.php" style="color: blue; text-decoration: none; font-size: 16px;" onmouseover="this.style.textDecoration='underline'" onmouseout="this.style.textDecoration='none'">Déconnexion</a>
</div>

<h1>Gestion de la section Actu, Event et du calendrier pour les réservations</h1>


<!-- Formulaire pour ajouter des actus -->
<form method="POST" enctype="multipart/form-data" action="adminProcess.php" class="mb-10">
  <div class="mb-6">
    <h1 class=" text-center text-xl font-semibold text-blue-600/100 dark:text-blue-500/100">Actu</h1>

    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre</label>
    <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." name="title" required>
  </div>
  <div class="mb-6">
    <label for="text_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Texte</label>
    <textarea type="text" id="text_content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="text_content" required>
    </textarea>
  </div>

  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload file</label>
  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="image" name="images" type="file">
  <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help"></p>


  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

<?php

?>

<form method="POST" enctype="multipart/form-data" action="adminProcessEvent.php" class="mb-10">
  <div class="mb-6">
    <h1 class=" text-center text-xl font-semibold text-blue-600/100 dark:text-blue-500/100">event</h1>

    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre</label>
    <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." name="event_name" required>
  </div>
  <div class="mb-6">
    <label for="text_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Texte</label>
    <textarea type="text" id="text_content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="descriptions" required>
    </textarea>
  </div>

  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
  <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file" name="photo">
  <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>


  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

<div id='calendar'></div>

<?php

require_once __DIR__ . '/../layout/footer.php';
