<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       

    if(isset($_POST['submit'])) {
        $myFile = fopen("uploads/file.txt", "a");
        // echo $myFile;
        $txt  = "This is secret message. It is secret " . $_POST['years'] . " years!\n";
        fwrite($myFile, $txt);
        fclose($myFile);
    }   
    ?>


    <form action="fileput.php" method="post">
    <input type="text" name="years">
    <input type="submit" name="submit">
    </form>
</body>
</html>