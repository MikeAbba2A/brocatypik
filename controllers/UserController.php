<?php

require "./models/User.php";

class UserController {
    private $userController;
    // private $adminController;
    // private $order;
    
    public function __construct(){
        $this -> userController = new User();
        // $this -> adminController = new AdminController();
        // $this -> order = new Orders();
    }

    //fonction pour la creation d un nouveau user
    public function createNewAccount()
    {
        
        //appel au template
        $template = "user/userCreateAccount";
        //test si les champs sont remplit et/ou vide
        if(isset($_POST["family-name"]) && !empty($_POST["family-name"]) && isset($_POST["name"]) && !empty($_POST["name"]) && isset($_POST["email"]) && !empty($_POST["email"]) && isset($_POST["address"]) && !empty($_POST["address"]) && isset($_POST["code-postal"]) && !empty($_POST["code-postal"]) && isset($_POST["city"]) && !empty($_POST["city"]) && isset($_POST["phone"]) && !empty($_POST["phone"]) && isset($_POST["password"]) && !empty($_POST["password"]) && isset($_POST["birth"]) && !empty($_POST["birth"]))
        {
            
        //tester si le mail existe deja
            $client = $this -> userController -> UserByEmail($_POST['email']);
            
            if(!$client)
            {
                $name = htmlspecialchars($_POST["family-name"]);
                $familyName = htmlspecialchars($_POST["name"]);
                $email = htmlspecialchars($_POST["email"]);
                $address = htmlspecialchars($_POST["address"]);
                $codePostal = htmlspecialchars($_POST["code-postal"]);
                $city = htmlspecialchars($_POST["city"]);
                $phone = htmlspecialchars($_POST["phone"]);
                $password = password_hash(htmlspecialchars($_POST["password"]), PASSWORD_DEFAULT);
                $birth = htmlspecialchars($_POST["birth"]);
                
                $newUser = $this -> userController -> insertNewUser($name,$familyName,$email,$address,$codePostal,$city,$phone,$password,$birth);
                if($newUser)
                {
                    $message = "le compte à bien été crée";
                    $template = "user/connexionUser";
                }
                else
                {
                    $message = "une erreur est survenue, votre compte n'est pas enregistré.";
                }
            }
            else
                {
                    $message = " votre compte existe déja";
                }
        }
        //appel au layout
            require "www/layout.phtml";
    }




}