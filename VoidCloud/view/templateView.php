<?php
/* @var string $strFile_name
 * @var bool $boolShowHeader
 */
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/cloud.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <title>TRX-Cloud</title>
</head>

<body>


<div class="row no-marg">
    <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#news">Messages</a>
        <a href="#contact">E-Mail</a>
        <a href="logout.php">Logout</a>
        <a href="javascript:void(0);" class="icon" onclick="toggleNavbar()">
            <i class="fa fa-bars"></i>
        </a>
    </div>
</div>
<?php
include_once $strFile_name;
?>
<div class="footer fixed-bottom">
    <div class="row">
        <div class="col col-xl-4 aboutusfooter">
            <p>TRZ-Cloud <br>
                The most secure Cloud you will ever see! <br>
                27/7 Uptime <br>
                Weekly Security Updates <br>
                Best Pricing <br>
                SSD Speed <br>
                Real-Human Support anytime!
            </p>
        </div>
        <div class="col col-xl-4 navigationfooter ctr">
            <ul>
                <li><a href="index.php">Home</li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="aboutus.php">About us</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="admin.php">Admin Login</a>
            </ul>
        </div>
        <div class="col col-xl-4 socialmedia ctr align-self-center">
            <div class="sociallogo"><a href="instagram.com">Instagram</a> <i class="fa-brands fa-instagram"></i></div>
            <br>
            <div class="sociallogo"><a href="youtube.de">Youtube</a> <i class="fa-brands fa-youtube"></i></div>
            <br>
            <div class="sociallogo"><a href="discord.gg">Discord</a> <i class="fa-brands fa-discord"></i></div>
        </div>
    </div>
</div>
<script src="js/responsive.js"></script>
</body>
</html>