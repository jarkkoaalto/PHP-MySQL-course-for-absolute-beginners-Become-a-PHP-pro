<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Multidimensional Arrays
        // $cars = array(array(),"Audi","Mercedes");
        $cars = array(
            "Expensive" => array("Audi", "Mercedes", "BMW"),
            "Inexpensive" => array("Volvo", "Ford", "Toyota")
        );


        echo $cars["Expensive"][2];
        echo "<br />";
        echo $cars["Inexpensive"][1];
    ?>
</body>
</html>