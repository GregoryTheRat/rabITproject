<?php 
$host = "localhost";
$user_name = "rabit";
$passw = "rabit123";
$db_name = "rabitdb";

try {
   $GLOBALS['db'] = mysqli_connect($host, $user_name, $passw, $db_name);
}
catch (mysqli_sql_exception $e) { 
    echo $e;
}