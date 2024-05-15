<?php
include_once("config/db.php");
include_once("models/user.php");
class UserController {
    
    //display corresponding view
    static function index() {
        include_once("views/userlist.php");
    }

    static function getUsers() {
        global $db;
        if (!$db) {
            echo 'ERROR: DB IS NULL';
            return;
        }
        $sql = "SELECT * FROM users";
        $response = $db->query($sql);

        $user_array = null;
        while ($row = $response->fetch_assoc()) {
            $user = new User($row);
            $user_array[] = $user;
        }
        return $user_array;
    }
}