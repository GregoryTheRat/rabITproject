<?php

//include the corresponding controller and call index() to display view
function route($url) {
    switch ($url) {
        case "/rabITproject/index":
            include_once "index.php";
            break;
        case "/rabITproject/advertlist":
            include "controllers/advertController.php";
            AdvertController::index();
            break;
        case "/rabITproject/userlist":
            include "controllers/userController.php";
            UserController::index();
            break;
        default:
            include_once "index.php";
    }
}