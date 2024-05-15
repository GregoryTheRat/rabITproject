<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Advertisements</title>
</head>
<div class="container">
    <div class="header-container">
        <h1>ADVERTS</h1>
    </div>

    <div class="table-containter">
    <table>
        <tr>
            <th>Advert id</th>
            <th>User id</th>
            <th>Title</th>
            <th>User Name</th>
        </tr>
<?php
include_once("controllers/advertController.php");
$adverts_and_user_names = AdvertController::getAdvertsAndUserNames();

foreach($adverts_and_user_names as $row) {
    echo "<tr>";
    echo "<td>". $row['advert']->getId() ."</td>";
    echo "<td>". $row['advert']->getUserId() ."</td>";
    echo "<td>". $row['advert']->getUserId() ."</td>";
    echo "<td>". $row['user_name'] ."</td>";
    echo "</tr>";
}
?>
    </table>
    </div>
</div>
    
</body>
</html>