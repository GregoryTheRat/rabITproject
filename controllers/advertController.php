<?php
include_once("config/db.php");
include_once("models/advert.php");

class AdvertController {

    //display corresponding view
    static function index() {
        include_once("views/advertlist.php");
    }

    /*Query the DB for all adverts and matching user names,
      then store them in an associative array*/
    static function getAdvertsAndUserNames() {
    global $db;

    if (!$db) {
        echo 'ERROR: DB IS NULL';
        return;
    }
    $sql = "SELECT advertisements.id, advertisements.userid, users.name, advertisements.title
            FROM advertisements, users WHERE advertisements.userid = users.id";
    $response = $db->query($sql);

    //returned associative array
    $advert_and_name_array = null;

    //each row is parsed as an associative array
    while ($row = $response->fetch_assoc()) {
        $advert_columns = array('id'=>$row['id'], 'userid'=>$row['userid'], 'title'=>$row['title']);
        $advert = new Advert($advert_columns);
        $user_name = $row['name'];

        $advert_and_name_array[] = array('advert'=>$advert, 'user_name'=>$user_name);
    }
    return $advert_and_name_array;
}

}