<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $names = array("John","Michael","David");

        foreach($names as $name){
            echo "<br />name is: " . $name;
        }
        
        echo "<br />";
        $person = array("Name" => "Dary","Age" => 30, "Gender" => "Male");
        foreach($person as $key => $value){
            echo $key . ": " . $value;
            echo "<br />";
        }

    ?>
</body>
</html>