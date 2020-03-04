<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison operators</title>
</head>
<body>
    <?php
    $x = 10;
    $y = 15;

    if ($x < $y) {
        echo "This is true";
    }else{
        echo "This is false";
    }
    echo "<br />";
    if ($x != $y) {
        echo "This is true";
    }else{
        echo "This is false";
    }
    echo "<br />";
    if ($x == $y) {
        echo "This is true";
    }else{
        echo "This is false";
    }
    echo "<br />";
    if ($x > $y) {
        echo "This is true";
    }else{
        echo "This is false";
    }
    echo "<br />";

    //Spaceship
    //If the value on the is less than the value on the right, the system will return -1

    // if value of the left is equal to the value on the right, the system will return a 0.

    // if the value on the left is grater that the value on the right, the system will retrun a 1.

    1 <=> 2;
    if ($x >= $y){
        echo "This is true";
    }else{
        echo "This is false";
    }

    ?>
</body>
</html>