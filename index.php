<?php
session_start();

require "config/Database.php";
require "UserController.php";

$userController = new UserController();

if(array_key_exists('action', $_GET)){
    switch($_GET["action"]){
        case "login" :
            $userController -> createNewAccount();
            break;

        default: 
            break;
    }
}