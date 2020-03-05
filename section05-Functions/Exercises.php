<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercises user defined functions</title>
</head>
<body>
    <?php
        // Exercise 1:
        // Create two variables 'price' and 'vat' and create a function called 'calculateVat' that takes two parameters,
        // and returns a variable 'calculatePrice'. Print out the price, vat and total price.
        $price = 100;
        $vat = 0.21;

        function calculateVat($price, $vat){
            $calculatedPrice = ($price * $vat) + $price;
            return $calculatedPrice;
        }

        echo "Price: " . $price . "<br />";
        echo "Vat: " . $vat . "<br />";
        echo "Total price: " . calculateVat($price, $vat);
        echo "<br />";
        // Exercise 2: Leap year
        // Create a variable 'year' and create a function 'aLeapYear' that checks if the year is a leap year.
        // If it is a leap year, return Boolean value. In the exercise of the control structures, we discussed what a leap year is.

        $year = 2000;
        function isLeapYear($year){
            if($year % 400 == 0|| $year % 4 == 0){
                return true;
            }else{
                return false;
            }
        }

        if(isLeapYear($year)){
            echo $year . " is a leap year";
        }else{
            echo $year . " is not a leap year";
        }

        // Exercise 3: 
        // Create two variables 'num1' and 'num2' and create four function 'addNumbers', 'substractNumbers', 'multiplyNuberes' and
        // 'divideNumberes'. The function accepts two parameters ,and return the addition, substraction, multiplicity and division of the two numbers
        $num1 = 10;
        $num2 = 15;

        function addNumbers($num1, $num2){
            return $num1 + $num2;
        }

        function substractNumbers($num1, $num2){
            return $num1 - $num2;
        }

        function dividedNumbers($num1, $num2){
            return $num1 / $num2;
        }

        function multiplyNumbers($num1, $num2){
            return $num1 * $num2;
        }
        $num1 = 10;
        $num2 = 15;
        echo "<br />Addition of " . $num1 . " and " . $num2 . " is "  . addNumbers($num1, $num2);
        echo "<br />Substraction of " . $num1 . " and " . $num2 . " is "  . substractNumbers($num1, $num2);
        echo "<br />Division of " . $num1 . " and " . $num2 . " is "  . dividedNumbers($num1, $num2);
        echo "<br />Multiply of " . $num1 . " and " . $num2 . " is "  . multiplyNumbers($num1, $num2);
        // Exercise 4:
        // Create a function 'swapNumber' that takes two parameters 'num1' and 'num3' and inside the function, that swaps the numbers.
        

        function swapNumbers ($num1, $num2){
            $temp = $num1;
            $num1 = $num2;
            $num2 = $temp;
            echo "<br />After swapping num1 = " . $num1 . " num2 = " . $num2;
        }

        swapNumbers($num1, $num2);
        echo "<br />";
        // Exercise 5:
        // Create a function 'evenOrNot' that checks if a given number 'num1' is even or odd. 
        $num1 = 9;

        function evenOrNot($num1) {
            if($num1 % 2 == 0) {
                echo $num1 . " is even";
            }else{
                echo $num1 . " is odd";
            }
        }
        evenOrNot($num1);
        echo "<br />";
        // Exercise 6:
        // Create a function 'isPrime' that checks if 'num1' is a prime number or not. Return true if it is a prime number and return false
        // if  it is not a prime number.
        $num1 = 7;

        function isPrime($num1) {
            if ($num1 == 1) {
                return false;
            }else{
                for($i = 2; $i<$num1 / 2; $i++) {
                    if ($num1 & $i == 0){
                        return false;
                    }
                }
            return 1;
            }
        }

        if (isPrime($num1)){
            echo "This number is a prime";
        }else{
            echo "This number is not a prime";
        }

    ?>
</body>
</html>