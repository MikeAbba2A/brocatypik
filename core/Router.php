<?php

use App\Controllers\AuthController;

// Extrait la requête actuelle


$authController = new AuthController();

switch ($_GET["action"]) {
    case 'login':
        $authController->login(); // Appelle la méthode login() d'AuthController
        break;

    case '/':
        include '../app/views/home.php'; // Charge la vue de la page d'accueil
        break;

    default:
        http_response_code(404);
        echo 'Page not found'; // Affiche une erreur 404 si la route n'est pas définie
        break;
}
