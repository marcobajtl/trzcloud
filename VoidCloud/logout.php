<?php
if (isset($_COOKIE['TestCookie'])) {
    setcookie('TestCookie', null, -1);
}
header("Location: index.php");
exit();