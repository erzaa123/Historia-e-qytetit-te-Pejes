<?php 
include 'databaseConnection.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }

    function insertUser($contactdata){
        $conn = $this->connection;

        $id = $contactdata->getId();
        $firstname = $contactdata->getFirstname();
        $lastname = $contactdata->getLastname();
        $phone = $contactdata->getPhone();
        $email = $contactdata->getEmail();
        $messages = $contactdata->getMessages();
        $file = $contactdata->getFile();

        $sql = "INSERT INTO contactdata (id,firstname,lastname,phone,email,messages) VALUES (?,?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
        $statement->execute([$id,$firstname,$lastname,$phone,$email,$messages,]);
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    function getAllUsers(){
        $conn = $this->connection;

        $sql = "SELECT * FROM contactdata";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByFirstnameAndEmail($firstname,$email){
      
    }

    function getUserById($id){
      $conn = $this->connection;

      $sql = "SELECT * FROM contactdata WHERE id='$id'";
      $statement=$conn->query($sql);
      $user = $statement->fetch();

      return $user;
    }


    function updateUser($id,$firstname,$lastname,$phone,$email,$messages,$file){
        $conn = $this->connection;

        $sql = "UPDATE contactdata SET firstname=?,lastname=?,phone=?,email=?,messages=?,file=? where id=?";

        $statement = $conn->prepare($sql);

        $statement->execute([$firstname,$lastname,$phone,$email,$messages,$file,$id]);
        echo "<script> alert('User has been updated successfuly!') </script>";
    }

    function deleteUserById($id){
        $conn = $this->connection;

        $sql = "DELETE FROM contactdata WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }
}


?>