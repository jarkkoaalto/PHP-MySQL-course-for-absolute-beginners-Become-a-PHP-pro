<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Exercise 1. Sorting array
        // Create a array 'NUMBERS' and use a build in function that sorts an array in decending
        $numbers = array("Milk" => 3, "Cheese" => 4, "Pepsi" => 3);
        arsort($numbers);
        print_r($numbers);
        echo "<br />";
        //Exercise 2: Birthday count
        // Create a simple 'birday contdown' script that counts the number of days between
        // current day and your birthday
        $targetDays = mktime(0,0,0, 07,20,2020);
        $today = time();
        $differience = ($targetDays - $today);
        $days = ($differience / 86400);
        echo "Days till next birthday: " . $days . "days!";
        echo "<br />";
        //Exercise 3: Generating random float numbers
        // Create a random number function 'randNumber' that generated random float numbers
        $randNumber = rand(0,100) / 10;
        echo $randNumber;
        echo "<br />";

        //Exercise 4: Lowercase checks
        // Create a variable 'str' whit a long piece of text and create a function 'lowercaseCheck' that converts
        // the string to all lowercase. Echo out the text with lowecse
        $str = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa aspernatur voluptatum eaque nisi harum eligendi consequuntur, illum quos rem in perferendis voluptatibus voluptas, nobis mollitia quam veniam veritatis soluta laboriosam?";
        function lowercaseCheck($str){
            echo strtolower($str);
        }
        lowercaseCheck($str);
        echo "<br />";

        //Exercise 5: Search insife of a text
        // create a variable with a long piece of text and create a function 'searchText' that has 2 parameters 'str'
        // and 'punctation'. Find out the amount of punctations,  inside of the string. This method has no return value
        $punctuation = 0;
        function searchText($str, $punctuation){
            for($i = 0; $i < strlen($str); $i++){
                if($str[$i] = "."){
                    $punctuation++;
                }
            }
            echo "The text has " . $punctuation . " punctuation";
        }
        searchText($str, $punctuation);
        echo "<br />";
        //Exercise 6: Lowest and highest value
        // Create an array 'onlyNumbers' that has an integer value inside of it. Use the min and max function in order to get the highest
        // and lowest in an array.
        $onlyNumbers = array(9,5,2,4,6,7,3,1,4,55,66,77);
        echo "The lowest value is " . min($onlyNumbers) . "and the highest value is " . max($onlyNumbers);
        echo "<br />";
        //Exercise 7: String repeat
        // Create a variable 'str' and repeat is 8 times with a function
        $str = "My name is Joe";
        echo "<br />" . str_repeat($str, 8);
    ?>
</body>
</html>