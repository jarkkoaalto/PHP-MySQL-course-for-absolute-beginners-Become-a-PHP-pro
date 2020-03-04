<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop</title>
</head>
<body>
    <?php
       
       for($x = 1;$x < 10;$x++){
            echo "<br />The number is" . $x;
        }

        echo "<br />";
        
        $deposit = 1000;
        $interest = 0.05;

        for($years = 1; $years <= 5; $years++){
            $deposit = ($deposit * $interest);
            echo "The total amount after " . $years . " years is: " . $deposit;
            echo "<br />";
        }
    ?>
</body>
</html>