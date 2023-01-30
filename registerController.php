<?php 
include_once 'userRepository.php';
include_once 'user.php';

if(isset($_POST['registerBtn'])){
    if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['phone']) ||
    empty($_POST['email']) ||  empty($_POST['messages']) || empty($_POST['file'])){
        echo "Please fill all fields!";
    }else{
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $messages = $_POST['messages'];
        $file = $_POST['file'];
        $id = rand(100,999).$messages;

        $user = new User($id,$firstname,$lastname,$phone,$email,$messages,$file);
        $userRepository = new UserRepository();
        $userRepository->insertUser($user);
    }
}


?>