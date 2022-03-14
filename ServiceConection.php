<?php

class ServiceConection{
    //Propriete
    public $server = "";
    public $port = "";
    public $bdd = "";

    public $user = "";
    public $password = "";



    //Method
    public function __construct(){
        try {
            $conn = new PDO("mysql:host=$server;port=$port;dbname=$bdd", $user, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn
          } catch(PDOException $e) {
            return "Connection failed: " . $e->getMessage();
          }
    
    }


   

}