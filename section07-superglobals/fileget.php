<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $filePath = "uploads/file.txt";
        $output = file_get_contents($filePath);
        $messages = explode("\n", $output);

        $totalMessages = 0;
        $i = 0;
        //$message = 0;

        foreach($messages as $message) {
            // echo $message . "<br />";
            $totalMessages = $totalMessages + $message;
            $i++;
        }

        echo "File contains {$i} Secret messages ";

        
    ?>
</body>
</html>