<?php
require_once __DIR__ . '/../layout/header.php';

?>

<form method="POST"  action="login.php" class="mb-10">
  <div class="mb-6">
    <h1 class=" text-center text-xl font-semibold text-blue-600/100 dark:text-blue-500/100">Actu</h1>

    <label for="username" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
    <input type="text" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..." name="username" required>
  </div>
  <div class="mb-6">
    <label for="text_content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
    <input type="password" id="text_content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="password" required>
</input>
</div>
  


  <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Connection</button>
</form>