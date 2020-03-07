<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobals 'session' in PHP</title>
</head>
<body>
    <?php
        //SESSION
        //Good to use for sensitive information
        // Session exsits as long as the browser is open

        session_start();

        //Store information
        $_SESSION["Name"] ="Jarkko";
        $_SESSION["Age"] = 24;

        echo "Hello " . $_SESSION["Name"];

        session_destroy();
        echo "Hello " . $_SESSION["Name"];
    ?>
</body>
</html>