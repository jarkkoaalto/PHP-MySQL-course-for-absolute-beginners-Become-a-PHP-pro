<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Array functions
        $personalInfo = array("Name" => "Joe", "Age" => 33, "City" => "Amsterdam");
        $moreInfo = array("State" => "NH", "Weight" => 85);

        $personalInfo = array_merge($personalInfo, $moreInfo);
        
        foreach($personalInfo as $key => $value){
            echo $key . " : " . $value . "<br />";
        }

        print_r($personalInfo);

        echo "<br />";
        // Print only keys
        print_r(array_keys($personalInfo));

        echo "<br />";
        $cars = array("Volkswagen", "Audi", "Mercedes");
        array_push($cars, "Volvo");

        print_r($cars);

        echo "<br />";

        // Search inside of an array
        echo array_search("Mercedes", $cars);
        echo "<br />";
        // count the number of items in a array
        echo count($cars);
    ?>
</body>
</html>