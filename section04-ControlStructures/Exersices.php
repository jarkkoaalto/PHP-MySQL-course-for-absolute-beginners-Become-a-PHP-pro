<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercioses</title>
</head>
<body>
    <?php
        // Exercise 1: Create two variables with two integer numbers. Print out which one is the highest and lowest value.
        $x = 10;
        $y = 15;

        if($x > $y) {
            $highest = $x;
            $lowest = $y;
            echo "Highest value is: " . $highest;
            echo "<br />";
            echo "Lowest value is: " . $lowest;
        }elseif($x < $y){
            $highest = $y;
            $lowest = $x;
            echo "Highest value is: " . $highest;
            echo "<br />";
            echo "Lowest value is: " . $lowest;
        }
        echo "<br />";
        // Exercise 2:
        // Create a variable with a value in-between number 1 till 4 (Reject any other value). Based on the value print out "Spades", "Hearts", "Diamonds" and "Clubs"
        $t = 1;
        switch($t){
            case 1:
                echo "Spades";
            break;
            case 2:
                echo "Hearts";
            break;
            case 3:
                echo "Diamonds";
            break;
            case 4:
                echo "Clubs";
            break;
            default: "Sorry value is not exceptable";
            break;
        }
        echo "<br />";
        // Exarsice 3:
        // The americaan grading system works with the letter A, B, C, D and F whereas C or higher means that you're passed the subject. 
        // Create a variable that shows the amount of points a student scores and based on that number, output the letter that a student got.
        // Also, show if the student passed the exam or not. 
        $score = 80;
        if($score >= 90 && $score <= 100){
            echo "You received a A! You passed the exam!<br />";
        }elseif($score >= 80 && $score <= 89){
            echo "You received a B! You passed the exam!!<br />";
        }elseif($score >= 70 && $score <= 79){
            echo "You received a C! You passed the exam!!<br />";
        }elseif($score >= 60 && $score <= 69){
            echo "You received a D! You passed the exam!!<br />";
        }else{
            echo "You received an F! You failed this course!<br />";
        }
        //Exercise 4
        //A Car manufacturer is replacing its machines. The machines will only be replaced if on or more of the following conditions is met:
        // The machine has more than 10.000 working hours
        // The machine old than  7 years
        // the machine has more than 25 failure per years
         
        $machineHours = 8000;
        $machineAge = 8;
        $machineFailures = 24;

        if($machineHours >= 10000 || $machineAge > 7 || $machineFailures >= 25){

            echo "Machine needs to be replaced<br />";
        }else{
            echo "Machine is in perfect condtition <br />";
        }

        //Exersice 5.
        //Create a variable with a year. Create a program that shows if the year is leap year
        $year = 2000;

        if($year % 400 == 0 || $year % 4 == 0){
            echo $year . " is a leap year";
        }else{
            echo $year . " is not a leap year";
        }
        echo "<br />";

        // Exercise 6:
        // Write a program tha displays the multiplication table of a given integer .Create a variable of the beginning and ending of the loop.
        $x = 1;
        $y = 20;

        while ($x <= $y) {
            $multiplication = $x * $y;
            echo $x . " * " . $y . " is " . $multiplication . "<br>";
            $x++;

        }

        // Exercise 7.
        // Write a program to get the fibonacci series from 0 to 50.
        $num1 = 0;
        $num2 = 1;
        $counter = 0;

        while($counter < 11){
            echo ' '. $num1;
            $num3 = $num2 + $num1;
            $num1 = $num2;
            $num2 = $num3;
            $counter++;

        }

        

    ?>
</body>
</html>