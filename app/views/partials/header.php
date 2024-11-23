<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Titre par défaut' ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/dropdown_menu.js"></script>
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
            <li><a href="/nouveautes">Actualités</a></li>
            <li><a href="/actualites">Actualités</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-link">Mes produits</a>
                <ul class="dropdown-menu">
                    <li><a href="/produits/tous_produits">Tous les produits</a></li>
                    <li><a href="/produits/nouveautes">Tous les produits</a></li>
                    <li><a href="/produits/ancien">Ancien</a></li>
                </ul>
            </li>

            <li><a href="/proposer_produit">Proposer un produit</a></li>
            <li><a href="/contact">Les boutiques</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/contact">Connexion</a></li>
        </ul>
    </nav>
</header>



   