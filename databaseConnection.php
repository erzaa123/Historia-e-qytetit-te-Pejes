<?php 

class DBConnection{
    private $server="localhost";
    private $firstname="root";
    private $lastname="";
    private $database="contactform";


    function startConnection(){
        try{
            $conn = new PDO("mysql:host=$this->server;dbname=$this->database;",$this->firstname,$this->lastname);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo "Connection Failed ".$e.getMessage();
            return null;
        }
    }
}

?>