<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'joshfox@foxwebdev.com';

$email_subject = "New Form Submission";

$email_body = "Username: $name.\n".
                "User Email: $email.\n".
                    "User Message: $message.\n";

$to = "joshfox@foxwebdev.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.php");






