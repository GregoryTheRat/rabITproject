<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>USERS</h1>
<?php
    include_once("controllers/userController.php");
    $users = UserController::getUsers();
    foreach($users as $user) {
        echo "<h1>". $user->getId() ." ". $user->getName() ."</h1>";
    }
?>
</body>
</html>