<?php
$pageTitle = "Nos events";
require_once "layout/header.php";
require_once "classes/ConnectionDb.php";

try {

    $pdo = ConnectionDb::getConnex();

    $stmt = $pdo->query("SELECT * FROM events");
    $events = $stmt->fetchAll();
} catch (PDOException $e) {
    echo "failed " . $e->getMessage();
}

?>


<main class="mt-20">
    <h2 class=" text-center text-xl font-semibold text-blue-600/100 dark:text-blue-500/100 mb-20">Prochaines events</h2>
    <div class="row">
        <?php
        foreach ($events as $ev) {
            require "templates/allEvents_template.php";
        };
        ?>
    </div>
</main>

<?php
require_once "layout/footer.php";
