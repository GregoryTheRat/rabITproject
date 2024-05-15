<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisements</title>
</head>
<>
    <h1>ADVERTS</h1>

<?php
include_once("controllers/advertController.php");
$adverts = AdvertController::getAdverts();

?>
    
</body>
</html>