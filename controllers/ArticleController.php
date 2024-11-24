<?php
//appel au model 
require "models/Article.php";
require "models/Uploads.php";

class ArticleController {
    private $article;
    private $adminController;
   
    
    public function __construct()
    {
        $this -> article = new Article();
        // $this -> adminController = new AdminController();
    }

    public function listArticle()
    {
        // récupérer les infos du model
        $categories = $this -> article -> getCategory();
        foreach($categories as $categorie)
        {
            $articles[] = $this -> article -> getArticles($categorie['cat_id']);
        }

        $template = "home";
        require "www/layout.phtml";
    }
}