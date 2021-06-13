<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['msg'];

    $email_from = 'Zeta Website';

    $email_subject = "Zeta Inquiries";

    $email_body = "Name: $name.\n"
                    "Email: $visitor_email.\n"
                        "Message: $message.\n";

    $to = "roberthe9606@gmail.com";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");
?>