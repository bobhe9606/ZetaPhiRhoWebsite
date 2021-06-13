<?php
    $name = $POST['name'];
    $visitor_email = $_POST['email'];
    $message = $POST['msg'];

    $email_from = 'Zeta Website'

    $email_subject = "Zeta Inquiries"

    $email_body = "Name: $name.\n"
                    "Email: $visitor_email.\n"
                        "Message: $message.\n"

    $to = "roberthe9606@gmail.com"

?>