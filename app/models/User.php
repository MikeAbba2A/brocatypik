<?php

namespace App\Models;

use PDO;

class User
{
    private $pdo;

    public function __construct()
    {
        // Initialise la connexion à la base de données
        require '../config/database.php'; // Charge la connexion PDO
        $this->pdo = $pdo;
    }

    public function findByEmail($email)
    {
        // Récupère un utilisateur par email
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $stmt->execute(['email' => $email]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
