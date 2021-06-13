<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['msg'];

    $email_from = 'Zeta Website';

    $email_subject = "Zeta Inquiries";

    $email_body = "Name: " . $name . "\r\n Email: " . $email . "\r\n Message: " . $message;

    $to = "roberthe9606@gmail.com";

    $headers = "From : " . $email_from . "\r\n Reply-To: " . $email;

    if($email != NULL)
        mail($to,$email_subject,$email_body,$headers);
    }
    header("Location: index.html");
?>