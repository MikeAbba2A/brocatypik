<?php

const UPLOADS_DIR = 'www/images/';                   // UPLOADS_DIR Répertoire ou seront uploadés les fichiers
    const FILE_EXT_IMG = ['jpg','jpeg','gif','png', 'JPG'];            // FILE_EXT_IMG  extensions acceptées pour les images
    const MIME_TYPES = array
    (
                        // images
                        'png' => 'image/png',
                        'jpeg' => 'image/jpeg',
                        'jpg' => 'image/jpeg',
                        'svg' => 'image/svg+xml',
                        // adobe
                        'pdf' => 'application/pdf',
    );

class Article{
    private $database;
    private $connexion;
    
    public function __construct()
    {
        $this -> database = new DataBase();
        $this -> connexion = $this -> database -> getConnexion();
        
    }

    public function getCategory()
    {
        $query = $this -> connexion -> prepare("
                                                SELECT
                                                    *
                                                FROM
                                                    products
                                                ");
        // exécuter 
        $query -> execute();
        // récupérer les infos de la requete 
        $categories = $query -> fetchAll();
        
        return $categories;
    }

    public function getArticles($cat)
    {
        $query = $this -> connexion -> prepare("
                                                SELECT
                                                    id_article,
                                                    name_article,
                                                    description_article, 
                                                    photo_article,
                                                    photo_article2,
                                                    stock_article,
                                                    price_article,
                                                    category_article,
                                                    alt_photo1,
                                                    alt_photo2
                                                FROM
                                                    products
                                                WHERE category_article = ?
                                                ORDER BY id_article DESC
                                                LIMIT 1
                                                ");
        // exécuter 
        $query -> execute([$cat]);
        // récupérer les infos de la requete 
        $articles = $query -> fetchAll();
        
        return $articles;
    }




}