<?php
$pageTitle = "Nos actus";
require_once "layout/header.php";
require_once "classes/ConnectionDb.php";

try {


    $pdo = ConnectionDb::getConnex();


    $stmt = $pdo->query("SELECT * FROM actu ");
    $actus= $stmt->fetchAll();
}catch(PDOException $e) {
    echo 'failed' . $e->getMessage();
}
?>

<body>
    <main>
    <h2 class=" text-center text-xl font-semibold text-blue-600/100 dark:text-blue-500/100">Actu</h2>
        <div class="row">
            <?php 
            foreach($actus as $actu) 
            {
                require "templates/actu_template.php";
            };
            ?>
        </div>
    </main>
</body>