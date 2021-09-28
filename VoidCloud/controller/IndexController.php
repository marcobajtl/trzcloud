<?php
include "model/IndexModel.php";

class IndexController
{
    public static function Validate($strUsername, $strInputPassword){
        $instanceIndex = new IndexModel();
        $strPassword = $instanceIndex->checkLoginInformation($strUsername)['Password'];

        if($strPassword === $strInputPassword){
            echo "Login Success";
            setcookie( "TestCookie", "login", strtotime( '+30 days' ) );
            header("Location: index.php");
        }
    }
}