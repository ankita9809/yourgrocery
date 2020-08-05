<?php

    include 'contact.html';

    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];


    $email_from = 'k.ankita037@gmail.com';

    $email_subject = "New Form Submission, Your Grocery";

    $email_body = "User Name: $name. \n";
                    "User Email: $visitor_email. \n";
                        "User Message: $message. \n";

    $to = "yourgrocery35@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject, $email_body, $headers);

    header("Location: contact.html");

?>