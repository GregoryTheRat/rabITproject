<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Main Page</title>
</head>
<body>
    <div class="link-container">
        <a href="index">home</a>
        <a href="advertlist">advertlist</a>
        <a href="userlist">userlist</a>
    </div>
<?php
include("router.php");

//sending url request to router
$url = $_SERVER['REQUEST_URI'];
route($url);

?>
    
</body>

</html>