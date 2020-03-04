<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
        // $cars1 = "BMW";
        // $cars2 = "Audi";
        // $cars3 = "Mercedes";

        $cars1 = array("BMW","Audi","Mercedes");

        echo $cars1[1];
        echo $cars1[0];
        echo $cars1[2];
        echo "<br />";

        $mycar = array("Audi",2015, 64.223);

        var_dump($mycar);
        echo "<br />";

        print_r($mycar);

        $cars2 = array("Volvo","Chevy". "Volkswagen");

        $cars = array_merge($cars1, $cars2);
        echo "<br />";
        print_r($cars);

    ?>
</body>
</html>