<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    //$_FILES
    // How to upload files
    // 1. Upload it to the root
    // 2. Directly to the database

    // enctype ="multipart/form-data" Specifies how the form data should be encoded

   // echo $name = $_FILES['file']['name'] . "<br />";
   // echo $type = $_FILES['file']['type'] . "<br />";
   // echo $temp_location = $_FILES['file']['tmp_name'] . "<br />";
   // echo $error = $_FILES['file']['error'] . "<br />";
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
<input type="file" name="file">
<button type="submit">SUBMIT</button> 
</form>
</body>
</html>