<?php

if (isset($_COOKIE["TestCookie"])) {
    $strFile_name = "cloudView.php";
    include "view/templateView.php";
} else {
    include "view/startView.php";
    include "controller/IndexController.php";
    if (isset($_POST["uname"])) {
        IndexController::Validate($_POST["uname"], $_POST["passwd"]);
    }
}




