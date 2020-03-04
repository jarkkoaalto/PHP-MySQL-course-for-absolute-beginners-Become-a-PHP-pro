<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conditional Statement</title>
</head>
<body>
    <?php
        // Conditional Statement
        $age = 21;

        if ($age < 20){
            echo "Sorry, you are too young!<br />";
        }elseif($age > 50){
            echo "You are old to party!";
        }elseif($age < 10){
            echo "You need to be in bed";
        }elseif($age > 18 && $age <21){
            echo "You are too old to drink!";
        }
        else{
            echo "You  are old enough to go out!";
        }
        

        

        // Switch statement
    ?>
</body>
</html>