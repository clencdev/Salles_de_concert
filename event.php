<?php
$pageTitle = "event";
require_once "layout/header.php";
require_once "classes/ConnectionDb.php";

if (!isset($_GET["event_name"])) {
    http_response_code(404);
    echo "Evenement non trouvé";
    exit;
}

$eventName = $_GET["event_name"];
try {
    $pdo = ConnectionDb::getConnex();

    $stmt = $pdo->prepare("SELECT * FROM events WHERE event_name = ?");
    $stmt->execute([$eventName]);
    $ev = $stmt->fetch();

    if (!$ev) {
        http_response_code(404);
        echo 'Aucune event trouvée';
        exit;
    }
} catch (PDOException $e) {
    echo "failed :" . $e->getMessage();
    exit;
}

require_once "templates/event_template.php";
require_once "layout/footer.php";
