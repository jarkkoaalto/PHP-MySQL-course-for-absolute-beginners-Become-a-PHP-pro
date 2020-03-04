<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
<?php
    $cars = array("Audi" => 50.000, "BMW" => 50.200, "Mercedes" => 60.000);
    var_dump($cars);
    echo "<br />";
    print_r($cars);
    echo "<br />";
    foreach($cars as $key => $value) {
        echo "My ". $key . " has " . $value . " mileage <br />";
    }

?>
</body>
</html>