<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="firstname" placeholder="firstname..."> <br><br>
        <input type="text" name="lastname" placeholder="lastname..."> <br><br>
        <input type="number" name="phone" placeholder="phone..."> <br><br>
        <input type="text" name="email" placeholder="email..."> <br><br>
        <input type="text" name="messages" placeholder="message..."> <br><br>
        <input type="file" name="file" placeholder="file..."> <br><br>
      

        <input type="submit" name="registerBtn" value="register"> <br><br>
    </form>

   <?php include_once 'registerController.php'?>
</body>
</html>