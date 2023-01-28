<?php
include("configcontact.php");
extract($_POST);
$query = "INSERT INTO `contact-data`(`firstname`, `lastname`, `phone`, `email`, `messages`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Something went wrong".$mysqli->error;
}
echo "Thank You For Contacting Us ";
$mysqli->close();


?>