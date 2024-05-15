<?php
include_once("config/db.php");
include_once("models/advert.php");

class AdvertController {
    static function index() {
        include_once("views/advertlist.php");
    }

    static function getAdverts() {
    global $db;
    if (!$db) {
        echo 'ERROR: DB IS NULL';
        return;
    }
    $sql = "SELECT * FROM advertisements";
    $response = $db->query($sql);

    $advert_array = null;
    while ($row = $response->fetch_assoc()) {
        $advert = new Advert($row);
        $advert_array[] = $advert;
    }
    return $advert_array;
}

}