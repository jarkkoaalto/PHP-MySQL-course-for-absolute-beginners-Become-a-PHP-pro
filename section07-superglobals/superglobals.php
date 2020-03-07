<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to superglobals</title>
</head>
<body>
    <?php
        //SuperGlobals
        // GLOBALS
        // $_POST
        // $_GET
        // $_SERVER
        // $_COOKIE
        // $_SESSION
        // $_FILES

        $x = 100;
        $y = 200;

        function add(){
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        add();
        echo $z;
    ?>
</body>
</html>