<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // DATE
        // 'd' = day
        // 'j' = day without zeros
        // 'D' = day of week 
        // 'l' = full day of the week
        // 'm' = Monthas a number with zeros
        // 'n' = Month as a number without zeros
        // 'M' = Month
        // 'F' = Full month
        // 'y' = Two-digit year
        // 'Y' = Full year

        echo date('d');
        echo "<br />";
        echo date('j');
        echo "<br />";
        echo date('D');
        echo "<br />";
        echo date('l');
        echo "<br />";
        echo date('m');
        echo "<br />";
        echo date('n');
        echo "<br />";
        echo date('M');
        echo "<br />";
        echo date('F');
        echo "<br />";
        echo date('y');
        echo "<br />";
        echo date('Y');
        echo "<br />";
        echo date('d/m/Y');
        echo "<br />";

        // Times
        // 'g' = Hour in 12 - hours format without zeros
        // 'h' = Hour in 12 - format with zeros
        // 'G' = hours in 24 - hours format
        // 'H' = hours in 24 - hour format with zeros
        // 'a' = am/pm in lowercase
        // 'A' = an/pm in uppercase
        // 'i' = minutes without leading zeros
        // 's' = seconds without leading zers

        echo date('H:i:s a');
        echo "<br />";
        // Set timezone
        date_default_timezone_set('Europe/Helsinki');
        echo "<br />";
        $time = strtotime("4:00 December 03 2019");
        echo $time;
        echo "<br />";
        echo date('m/d/Y H:i:s a', $time);
    ?>
</body>
</html>