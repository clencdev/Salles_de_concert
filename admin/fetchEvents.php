<?php
header('Access-Control-Allow-Origin: *'); 
header('Content-Type: application/json');


require_once __DIR__ . "/../classes/ConnectionDb.php";

try {
    $pdo = ConnectionDb::getConnex();
    $stmt = "SELECT * FROM events"; 
    $result = $pdo->query($stmt);

    $events = [];
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $events[] = [
            'title' => $row['event_name'],
            'start' => date('Y-m-d', strtotime($row['date'])) 
        ];
    }

    header('Content-Type: application/json');
    echo json_encode($events);
} catch (PDOException $e) {
    // Retourne une réponse JSON même en cas d'erreur
    header('Content-Type: application/json');
    echo json_encode(['error' => "Erreur de connexion à la base de données: " . $e->getMessage()]);
}
