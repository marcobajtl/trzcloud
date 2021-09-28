<!DOCTYPE html>
<html lang="de">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v6.0.0-beta1/css/all.css">
    <title>TRX-Cloud</title>
</head>

<body>
<div id="particles-js">
    <div class="row heading">
        <div class="col align-self-center ctr">
            <h1>TRZ-Cloud</h1>
        </div>

        <div class="row logo">
            <div class="imglogo ctr align-middle">
                <i class="fas fa-cloud fa-10x"></i>
            </div>
        </div>
        <div class="row ctr getstarted">
            <div class="">
                <a href="#" onclick=openLogin()>Login</a>
            </div>
        </div>
        <div class="row ctr infocontainer">
            <div>
                <p>The only Cloud you will ever need.</p>
            </div>
        </div>
    </div>
    <div id="id01" class="modal">
        <form class="formbox animate" action="index.php" method="post">
            <div class="imgcontainer">
                <span onclick="closeLogin()" class="close" title="Close Modal">&times;</span>
                <i class="fa-thin fa-user fa-10x avatar"></i>
            </div>

            <div class="container">
                <div>
                    <label for="uname"><b>Username</b></label>
                    <input type="text" placeholder="Enter Username" name="uname" required>
                </div>
                <label for="psw"><b>Password</b></label>
                <div>
                    <input type="password" placeholder="Enter Password" name="passwd" id="passwordinput" required>
                    <i class="far fa-eye hidepw" id="passwordicon" onclick=togglepwvis()></i>
                </div>
                <div>
                    <button type="submit">Login</button>
                </div>
                <label>
                    <input type="checkbox" checked="checked" name="remember">
                    <p>Remember me</p>
                </label>
                <span class="psw"><a href="#" class="forgotpw">Forgot password?</a></span>
            </div>
        </form>
    </div>
</div>
<script src="js/particles.js-master/particles.js"></script>
<script src="js/particles.js-master/demo/js/app.js"></script>
<script src="js/login.js"></script>
</body>

</html>
