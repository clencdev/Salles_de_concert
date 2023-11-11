 <!-- Sript en php qui permet d'ajouter un admin.
 Attention à chaque lancement de la page creation d'admin. -->
 <?php
require_once __DIR__ ."/../classes/ConnectionDb.php";

// try
// {
//     $pdo = ConnectionDb::getConnex();

//     $username = 'admin';
//     $password = password_hash('test', PASSWORD_DEFAULT);

//     $sql = "INSERT INTO admin (username, password) VALUES (?, ?)";
//     $stmt = $pdo->prepare($sql);
//     $stmt->execute([$username, $password]);
// }catch(PDOException $e){
//     echo 'failed' . $e->getMessage();
//     } 
    ?>