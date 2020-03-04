<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions with arguments / parameters</title>
</head>
<body>
    <?php

    $num1 = 5;
    $num2 = 5;

    // Parameters
        function calculator($num1 = 5, $num2= 20){
            echo $num1 * $num2;
        }

        // Arguments
        calculator();
    ?>
</body>
</html>