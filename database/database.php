<?php 
 


//Connexion à la base de données avec PDO
$servername = "localhost";
$username = "root";
$password = ""; 
$database = "projet_bts_2025";

try {
    
    $pdo = new PDO("mysql:host=$servername;dbname=$database;charset=utf8", $username, $password);

    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Message de succès
    echo "<div style='background-color:#e6aaec;text-align:center; color:#8d079c;'>Connexion à la base de données réussie</div>";
} catch (PDOException $e) {
    //  les erreurs de connexion
    echo "<div style='color:red;'>La connexion à la base de données a échoué :</div> " . $e->getMessage();
}



?>
