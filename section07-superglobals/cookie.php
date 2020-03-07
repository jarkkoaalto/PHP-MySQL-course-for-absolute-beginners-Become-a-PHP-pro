<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal 'cookie' in PHP</title>
</head>
<body>
    <?php
        // COOKIE
        // Small file that the webserver stores in the client computer
        // ARGUMENT COOKIES:
        // name
        // value
        // Expire
        // Path
        // Domain
        // Security

        // If you do not include an expiration date, the cookie will only be stored for the current session
        $time = time() - 86400 * 30;

        setcookie("name","Jarkko",$time);

        print_r($_COOKIE);
        echo $_COOKIE['name'];

    ?>
</body>
</html>