<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creating a working contact form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Get in Touch</h1>
    <p>Please fill in the fields</p>
    <form action="contact.php" method="post">
    <input type="text" name="name" placeholder="Full name">
    <input type="text" name="email" placeholder="E-mail">
    <input type="text" name="subject" placeholder="Subject">
    <textarea name="message" placeholder="Enter Message"></textarea>
    <button type="submit" name="submit">SEND E-MAIL</button>
    </form>
    
</body>
</html>