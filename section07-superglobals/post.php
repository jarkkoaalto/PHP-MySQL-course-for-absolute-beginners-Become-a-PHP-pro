<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperGlobals 'Post' in PHP</title>
</head>
<body>
    <?php
        // POST
        // Collect data from the HTML from invisible
        if(isset($_POST)){
            echo $_POST['name'] . " your for is submitted";
        }

        print_r($_POST);
    ?>

    <form action="post.php" method="post">
        <input type="text" name="name">
        <input type="text" age="age">
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>