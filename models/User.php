<?php
    class User {
        private $database;
        private $connexion;

        public function __construct(){
            $this -> database = new Database();
            $this -> connexion = $this -> database -> getConnexion();
        }

        // requête sql qui va insérer un nouveau user dans la base de donnée
        public function insertNewUser($name,$familyName,$email,$address,$codePostal,$city,$phone,$password,$birth){
        
            $query = "
                        INSERT INTO users(
                            name,
                            family_name,
                            email,
                            address,
                            code_postal,
                            city,
                            phone,
                            password,
                            birth
                        )
                        VALUES(
                            ?,
                            ?,
                            ?,
                            ?,
                            ?,
                            ?,
                            ?,
                            ?,
                            ?
                            )";
            $query2 = $this -> connexion -> prepare($query);
            $insertSQL = $query2 -> execute ([$name,$familyName,$email,$address,$codePostal,$city,$phone,$password,$birth]);
            
            return $insertSQL;
        }

         // requête sql qui va recupérer un user selon son email
    public function UserByEmail($email)
    {
        $query = $this -> connexion  -> prepare("
                                                SELECT
                                                    email,
                                                    password,
                                                    id_user
                                                FROM
                                                    users
                                                WHERE email = ?
                                                ");
        // exécuter 
        $query -> execute([$email]);
        // récupérer les infos de la requete 
        $client = $query -> fetch();
        
        return $client;
    }















    }
