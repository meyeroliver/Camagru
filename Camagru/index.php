<?php

?>
<html>

<head>
    <title> CAMAGRU </title>
</head>

<body>
    <div id = "header">
        <div id = "r_header">
            <img src="./pictures/logo.jpg">
        </div>
       <div id = "l_header">
            <div id = "sign_in">
                <form action = "./server/control_index.php" method = "post">
                    <div id = "username">
                        <p>USERNAME</p>
                        <input type = "text" name = "username">
                    </div>
                    <div id = "password">
                        <p>PASSWORD</p>
                        <input type = "text" name = "password">
                        <a href="url">Forgot password?</a>
                    </div>
                   <div id = "login">
                        <input type="submit" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id = "main">
        <div id = "welcome_image">

        </div>
        <div = "register">

        </div>
    </div>

</body>
</html>