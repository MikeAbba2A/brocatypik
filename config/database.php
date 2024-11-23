<?php
$dbHost = '127.0.0.1'; // Serveur local
$dbName = 'brocatypik'; // Remplace par le nom de ta base de données
$dbUser = 'root'; // Utilisateur par défaut
$dbPass = 'gv1re54g1ver5gv15b1rh5erb8e(e98e89b'; // Mot de passe vide par défaut sur WAMP

try {
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données !";
} catch (PDOException $e) {
    die('Erreur de connexion à la base de données : ' . $e->getMessage());
}