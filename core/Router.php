<?php

use App\Controllers\AuthController;

// Extrait la requête actuelle
$request = $_SERVER['REQUEST_URI'];

$authController = new AuthController();

switch ($request) {
    case '/login':
        $authController->login();
        break;
    case '/process_login':
        $authController->processLogin();
        break;
    case '/logout':
        $authController->logout();
        break;
    default:
        http_response_code(404);
        echo 'Page not found.';
        break;
}
