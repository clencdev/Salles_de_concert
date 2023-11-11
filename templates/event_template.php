<?php 
require_once __DIR__ . '/../layout/header.php';

?>

<main class="bg-gray-100">

<div class="container mx-auto p-4">
    <h1 class="text-4xl mb-4">EVENT</h1>

    <div class="bg-white p-4 rounded mb-4 shadow">
        
        <img src="photo/photoevent/<?php echo $ev['photo'] ?>" alt="Article Image"  class="mb-4 w-full h-73 object-cover rounded-t">
        <div class="p-4">
            <h2 class="text-xl font-bold mb-20"><?php echo $ev['event_name'] ?></h2>
            
            <p class="text-gray-600 indent-8"><?php echo nl2br($ev['descriptions']) ?></p>
        <!-- fonction qui permet de mettr en forme mon text_content lors de l'affichage pour l'utilisateur -->
        </div>
    </div>
    

</div>

</main>