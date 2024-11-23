<?php
require_once '../config/database.php';

try {
    $stmt = $pdo->query('SHOW TABLES');
    echo "Connexion réussie à la base de données : $dbName<br>";
    echo "Tables dans la base de données :<br>";
    while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
        echo "- " . $row[0] . "<br>";
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}