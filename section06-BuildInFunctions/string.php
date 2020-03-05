<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $str = "Today is a sunny day";

        echo strlen($str);

        // String word count
        $firstName = "My first name is Joe";
        echo "<br />";
        echo str_word_count($firstName);

        // How to find next withing a string
        $email = "info@gmail.com";

        echo "<br />";

        if (strpos($email, "@")) {
            echo "This is a valid email";
        }else{
            echo "This is a email input field!";
        }
        echo "<br />";


        // Ucworlds - Every first letter of a word is uppercase
        echo ucwords("What is your name? <br />");

        // Whole string to uppercase
        echo strtoupper("What is your name? <br />");

        // Whole string to lowercase
        echo strtolower("What is your name?<br />");
    ?>
</body>
</html>