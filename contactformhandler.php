<?php

    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){

        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['msg'];

            $email_from = 'Zeta Website';

            $email_subject = "Zeta Inquiries";

            $email_body .= "Name: ".$name. "\r\n";
            $email_body .= "Email: ".$email. "\r\n";
            $email_body .= "Message: " .$message. "\r\n";

            $to = "roberthe9606@gmail.com";

            /*$headers = "From : " . $email_from . "\r\n Reply-To: " . $email;*/

            mail($to,$email_subject,$email_body);
        }
    }
    header("Location: index.html");
?>