<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <a href="index">home</a>
    <br>
    <a href="advertlist">advertlist</a>
    <br>
    <a href="userlist">userlist</a>

<?php
include("router.php");
$url = $_SERVER['REQUEST_URI'];
route($url);

?>
    
</body>

</html>