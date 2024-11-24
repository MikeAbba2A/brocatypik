<?php

class DataBase{

    const SERVEUR = "localhost";
    const BDD = "brokatypic";
    const USER = "root";
    const MDP = "gv1re54g1ver5gv15b1rh5erb8e(e98e89b";

    private $connexion;

    public function __construct(){
        try
        {
            $this -> connexion = new PDO("mysql:host=".self::SERVEUR.";dbname=".self::BDD,self::USER,self::MDP);// -> appel à une méthode PDO
            $this -> connexion -> exec("SET CHARACTER SET utf8");// gestion des accents 
        
        } 
        catch(Exception $message)
        {
            die("erreur de connexion ".$message->getMessage());
        } 
    }

    public function getConnexion()
    {
        return $this -> connexion;
    }
}