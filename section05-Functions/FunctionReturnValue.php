<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions with return value</title>
</head>
<body>
    <?php
        // Functions with return value

        $num1 = 10;
        $num2 = 15;
        $x = 12;
        // Pass by value
        function add($num1, $num2){
            $result = $num1 + $num2;
            return $result;
        }
        echo "The number is: " . add($num1, $num2);


        function substract($num1, $num2){
            echo $num1 - $num2;
        }

        echo "<br />";
        echo "The number is: " . substract($num1, $num2);
        echo "<br />";
        // Pass by reference
        function addByValue($x){
            $x += 5;
        }

        function addByReference(&$x) {
            $x += 10;
        }

        addByValue($x);
        echo "The value is: " . $x;

        echo "<br />";
        addByReference($x);
            echo "The value is: " . $x;
    

    ?>
</body>
</html>