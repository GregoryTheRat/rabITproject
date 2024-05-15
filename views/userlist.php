<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Users</title>
</head>
<body>
<div>
    <div class="header-container">
        <h1>USERS</h1>
    </div>

    <div class="table-container">
    <table>
        <tr>
            <th>User id</th>
            <th>User name</th>
        </tr>
<?php
    include_once("controllers/userController.php");
    $users = UserController::getUsers();

    foreach($users as $user) {
        echo "<tr>";
        echo "<td>". $user->getId() ."</td>";
        echo "<td>". $user->getName() ."</td>";
        echo "</tr>";
    }
?>
    </table>
    </div>
</div>
</body>
</html>