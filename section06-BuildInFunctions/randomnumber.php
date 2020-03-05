<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo rand();
        echo "<br />";

        echo getrandmax();
        echo "<br />";

        echo rand(1,10);
        echo "<br />";

        $min = 1;
        $max = 10;

        echo rand($min, $max);
    ?>
</body>
</html>