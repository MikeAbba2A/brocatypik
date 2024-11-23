<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Titre par défaut' ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js" defer></script>
</head>
<body>
    <header>
        <div class="top-bar">
            <p>Livraison France entière du plus petit au plus grand meuble - Belgique / Luxembourg & Corse sur devis</p>
        </div>
        <div class="logo-container">
            <img src="/images/logo.png" alt="Logo">
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="/nouveautes">Nouveautés</a></li>
                <li class="dropdown">
                    <a href="#">Mobilier</a>
                    <ul class="dropdown-menu">
                        <li><a href="/mobilier/chaises">Chaises</a></li>
                        <li><a href="/mobilier/tables">Tables</a></li>
                    </ul>
                </li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>