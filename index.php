<?php 
$pageTitle = "index";
require_once 'layout/header.php';
require_once 'classes/ConnectionDb.php';

try {


    $pdo = ConnectionDb::getConnex();


    $stmt = $pdo->query("SELECT * FROM actu");
    $actus= $stmt->fetchAll();

    $stmtEvents = $pdo->query("SELECT photo, event_name FROM events");
    $eventsData = $stmtEvents->fetchAll();

}catch(PDOException $e) {
    echo 'failed' . $e->getMessage();
}
?>
<main>
    
<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
        <?php foreach ($eventsData as $event) { ?>
        <a href="event.php?event_name=<?php echo $event['event_name'];?>">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="photo/photoevent/<?php echo $event['photo']; ?>" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                <div class="absolute top-0 left-0 w-full text-white text-left py-2 px-4" style="background-color: rgba(0, 0, 0, 0.5); font-size: 40px;">
                    <?php echo $event['event_name']; ?>
                </div>
            </div>
        </a>

    <?php } ?>
        
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 6" data-carousel-slide-to="5"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 7" data-carousel-slide-to="6"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 8" data-carousel-slide-to="7"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 9" data-carousel-slide-to="8"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 10" data-carousel-slide-to="9"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<h2 class=" text-center text-xl font-semibold text-blue-600/100 dark:text-blue-500/100">Actu</h2>

<div class="row">

<?php
//Changement de methode de boucle, on utilise la boucle for, pour afficher 6 elemetns sur la page index
    for ($i = 0; $i < 6; $i++)
    {
        $actu = $actus[$i];
    require 'templates/actu_template.php';
    }
?>
</div>
</main>


<?php
require_once "layout/footer.php";