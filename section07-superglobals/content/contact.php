<?php
if (isset($_POST['submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    $myMail = "aaa.bbb@mail.com";
    $header = "From: " . $email;
    $message2 = "You have received a message from" . $name . ".\n\n" . $message;
    // 1 : Email you sending it to
    // 2. Subject
    // 3. Is the message
    mail($myMail, $subject, $message2, $header);
    header("Location: index.php?mailsend");
}
?>
