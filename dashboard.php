<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>



</head>
<body>
    
<div class="container my-5">
    <h2>List of Users</h2>
</div>

<table border="1">
        <tr>
            <th>ID</th>
            <th>Firstame</th>
            <th>Lastname</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Messages</th>
            <th>File</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        include_once 'userRepository.php';
        $userRepository  = new UserRepository();
        $contactdata = $userRepository->getAllUsers();
        foreach($contactdata as $user){
           echo 
           "
           <tr>
               <td>$user[id]</td>
               <td>$user[firstname]</td>
               <td>$user[lastname]</td>
               <td>$user[phone]</td>
               <td>$user[email]</td>
               <td>$user[messages]</td>
               <td>$user[file]</td>
               <td><a href='edit.php?id=$user[id]'>Edit</a></td>
               <td><a href='delete.php?id=$user[id]'>Delete</a></td>

           </tr>
           ";
        }
        
        
        ?>
    </table>

</body>
</html>