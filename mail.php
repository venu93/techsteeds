<?php

if (isset($_POST['submit'])) {
    $to = "eshwarrao018@gmail.com";
    $name = $_REQUEST['name'];
    $mobile = $_REQUEST['mobile'];
    $email = $_REQUEST['email'];
    $msg = $_REQUEST['msg'];
    $subject = "Mail Function";
    $message = "Hello";
    $from = 'eshwarrao018@gmail.com';
    $headers = 'From: eshwarrao018@gmail.com' . "\r\n" .
    'Reply-To: eshwarrao018@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers); 
        echo "Mail Sent.";
    }

?>