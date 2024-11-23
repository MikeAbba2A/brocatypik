<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
    public function login()
    {
        // Affiche le formulaire de connexion
        include '../app/views/auth/login.php';
    }

    public function processLogin()
    {
        // Traite les données du formulaire
        session_start();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Vérifie les informations avec le modèle User
            $userModel = new User();
            $user = $userModel->findByEmail($email);

            if ($user && password_verify($password, $user['password'])) {
                // Authentification réussie
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header('Location: /dashboard'); // Redirige vers une page protégée
                exit();
            } else {
                // Authentification échouée
                $error = 'Email ou mot de passe incorrect.';
                include '../app/views/auth/login.php';
            }
        }
    }

    public function logout()
    {
        // Déconnexion
        session_start();
        session_destroy();
        header('Location: /login'); // Redirige vers la page de connexion
        exit();
    }
}
