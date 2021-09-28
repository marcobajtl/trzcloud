<?php
include "model/Model.php";

class IndexModel extends Model
{
    function returnDataBaseInfo()
    {
        return new mysqli("localhost", "root", "", "voidcloud");
    }

    public function checkLoginInformation($username){
        $objDatabase = $this->returnDataBaseInfo();
        $objStatement = $objDatabase->prepare("SELECT Password FROM Benutzerdaten WHERE Username = '".$username."'");
        $objStatement->execute();
        $result = $objStatement->get_result();
        $strPw = $result->fetch_all(MYSQLI_ASSOC);
        return $strPw[0];
    }

}