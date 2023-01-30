<?php
include_once 'userRepository.php';

$userId = $_GET['id'];

$userRepository = new UserRepository();

$user = $userRepository->getUserById($userId);




?>


<form action="" method="POST">
        <input type="text" name="id" value="<?=$user['id']?>" readonly> <br><br>
        <input type="text" name="firstname" value="<?=$user['firstname']?>"> <br><br>
        <input type="text" name="lastname" value="<?=$user['lastname']?>"> <br><br>
        <input type="number" name="phone" value="<?=$user['phone']?>"> <br><br>
        <input type="text" name="email" value="<?=$user['email']?>"> <br><br>
        <input type="text" name="messages" value="<?=$user['messages']?>"> <br><br>
        <input type="file" name="file" value="<?=$user['file']?>"> <br><br>
      

        <input type="submit" name="save" value="save"> <br><br>
</form>


<?php
if(isset($_POST['save'])){
    $id = $userId;
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $messages = $_POST['messages'];
    $file = $_POST['file'];

    $userRepository->updateUser($id,$firstname,$lastname,$phone,$email,$messages,$file);
    header("location:dashboard.php");
}

?>