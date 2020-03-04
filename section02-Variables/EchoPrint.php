<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple ways to add variables in echo / print</title>
</head>
<body>
    <?php
        $age = 24;

        // ECHO
        // Single qoutes - variable named are echoed as it is

        // Double qoutes - Variable names are replaced by the variable values
        echo "My age is {$age}";

        echo '<br />My age is {$age}'; // print whole content

        echo '<br />My age is ' . $age;
        echo "<br />My age is " . $age;

        // Concatenate style
        print "<br />My age is " .$age;

        print"<br />My age is {$age}";
        

    ?>
</body>
</html>