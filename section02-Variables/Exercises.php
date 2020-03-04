<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exersices</title>
</head>
<body>
    <?php
        // Exercise 1. Personal information
        // Create two variables (x,y) add them and multiply it by 5. Assign the output to a new variable z
        $x = 9;
        $y = 6;

        $z = ($x + $y) * 8;
        echo "The total is " . $z;
        echo "<br />";

        // Exercise 2. Value added tax
        // Create two variables price and vat. create new variable 'totalPrice' and calculate the vat on the price and
        // print out the price, bat and total price.
        $price = 100;
        $vat = 0.25;
        $totalPrice= ($price * $vat) + $price;

        echo "Price: " . $price . "<br />";
        echo "VAT: " . $vat . "<br />";
        echo "TotalPrice: " .$totalPrice . "<br />";

        // Exercise 3. Average
        // Create three variables x,y,z and calculate the average 'average' of the numbers and print it out the screen. 
        // Be aware that the average is a decimal number, so use a function number_format in PHP.
        $x = 4;
        $y = 9;
        $z = 4;

        $average = ($x + $y + $z) / 3;
        // echo number_format($average, 2, ', ', ' ');
        echo "The average is: " . $average;
        echo "<br />";

        // Exercise 4. Countries and capitals
        // Create an array 'countries' that display 5 counties and the capital names.
        $countries = array("Neatherland" => "Amsterdam", "Germany" => "Berlin", "Thailand" => "Bankok", "Danmark" => "Copenhagen", "Canada" => "Toronto");
        foreach($countries as $key => $value){
            echo "The capital of " . $key . " is " .$value . "<br />";

        }
        echo "<br />";

        // Exercise 5. Centimeters to inches
        // Create a integer cmToInch that converts a number of centimeters "cm" to inches "inch" 
        $cm = 150;
        $cmToInch = $cm * 0.39;

        echo $cm . " centimeters is " . $cmToInch . " inches";
        echo "<br />";

        // Exercises 6. Expenses
        // Create  an array "expences" with your biggest expenses of the month. Loop through the array and add the expences in an integer 'totalAmount'. 
        // Finally, display the total expenses that you had and the amount of values 'amountOfExpenses' you had stored inside of you array.

        $expences = array(40,70,20,85,40);

        $totalAmount = 0;
        $amountOfExpenses = 0;

        foreach ($expences as $expense) {
            $totalAmount = $expense + $totalAmount;
            $amountOfExpenses = $amountOfExpenses + 1;
        }
        echo "My " .$amountOfExpenses . " biggest expenses were " . $totalAmount;

        // Exersise 6 Weater conditions
        // Create an array 'weather' of wather conditions with the following values rain, sunshine, cloud, hail,sleet, snow,wind. Using array variabe for all the wather condition echo the following 
        // statement to the browser
        $weather = array("Rain","Sunshine","Clouds","Hail","Sleet","Snow","Snow","Wind");

        echo "We've seen all kinds of weather this month. At the begining of the month, we had " .$weather[5] . " and " .$weather[6] . "Then came" . $weather[1] . " with a few " . $weather[2] . " and come " . $weather[0] . ", At least  we didin't get any " .$weather[3] . " or " . $weather[4]; 

    ?>
</body>
</html>