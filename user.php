<?php 

class User{
    private $id;
    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $messages;
    private $file;

    function __construct($id,$firstname,$lastname,$phone,$email,$messages,$file){
         $this->id=$id;
         $this->firstname=$firstname;
         $this->lastname=$lastname;
         $this->phone=$phone;
         $this->email=$email;
         $this->messages=$messages;
         $this->file=$file;
    }


    function getId(){
        return $this->id;
    }
    function getFirstname(){
        return $this->firstname;
    }
    function getLastname(){
        return $this->lastname;
    }
    function getPhone(){
        return $this->phone;
    }
    function getEmail(){
        return $this->email;
    }
    function getMessages(){
        return $this->messages;
    }
    function getFile(){
        return $this->file;
    }
}


?>