<?php
$pageTitle="Page Admin";
require_once __DIR__ . '/../layout/header.php';


?>

<form method="POST" enctype="multipart/form-data" action="adminProcess.php">
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
<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="image_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>


  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form>

<?php

?>
//
<!-- form>
  <div class="mb-6">
    <h1 class=" text-center text-xl font-semibold text-blue-600/100 dark:text-blue-500/100">event</h1>

    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">titre</label>
    <input type="text" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." name="title" required>
  </div>
  <div class="mb-6">
    <label for="text_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Texte</label>
    <textarea type="text" id="text_content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
    </textarea>
</div>
  
<label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload file</label>
<input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" aria-describedby="file_input_help" id="file_input" type="file">
<p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">SVG, PNG, JPG or GIF (MAX. 800x400px).</p>


  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
</form> -->

<?php

require_once __DIR__ . '/../layout/footer.php';