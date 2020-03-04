<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global and local scope in PHP</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 20;

        function myFunction() {
            $y = 20;
            echo $y;
        }

        echo $x;
        echo "<br />";
        myFunction($y);
    ?>
</body>
</html>