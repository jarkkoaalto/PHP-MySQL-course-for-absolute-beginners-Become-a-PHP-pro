<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $role = "Boss";

        switch ($role){
            case 'Visitor':
                echo "Welcome Visitor";
            break;
            case 'Admin':
                echo "Welcome Admin";
            break;
            case 'SuperAdmin':
                echo "Welcome SuperAdmin";
            break;
            case 'Boss':
                echo "Welcome Boss";
            break;
            default:
            echo "You are not welcome";
        break;

        }
    ?>
</body>
</html>