<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical operators</title>
</head>
<body>
    <?php
        // Logical operators
        // And --- Both X and y are true
        // && --- Both x and y are true
        // Or --- Either X or Y are true
        // || --- Either X or Y are true
        // Xor --- Either X or Y are thue, not both
        // ! --- True if X is not true
        // 1 = True - 0 = false

        $x = 10;
        $y = 10;

        if($x == $y or 1 == 1) {
            echo "True";
        }else{
            echo "False";
        }
        echo "<br />";
        if($x == $y and 1 == 1) {
            echo "True";
        }else{
            echo "False";
        }
        echo "<br />";
        if($x == $y && 1 == 1) {
            echo "True";
        }else{
            echo "False";
        }
        echo "<br />";
        if($x == $y || 1 == 1) {
            echo "True";
        }else{
            echo "False";
        }
        echo "<br />";
        if($x == $y xor 1 == 1) {
            echo "True";
        }else{
            echo "False";
        }
        echo "<br />";
        if(!$x == $y xor 1 == 1) {
            echo "True";
        }else{
            echo "False";
        }
        echo "<br />";
    ?>
</body>
</html>