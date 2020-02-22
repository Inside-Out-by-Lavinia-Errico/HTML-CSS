<?php

    $received = $_POST['mydata'];
    $received = json_decode ($received);
    $admin = "info@lavinierrico.com";

    // form type
    $len = count($received) - 1;

    if ($received[$len] == "gi") {
        // general inquiries page
        $page = "General Inquiries";
    }else if ($received[$len] == "bl") {
        // Book Lavinia
        $page = "Book Lavinia";

    }else {
        $page = "Email Subscription";
    }

    $received[$len] = $page;
    $received = implode( "\n", $received);


    $to_email = $admin;
    $subject = "Inside Out Form Submission!";
    $message = "Form data from ".$page." page! \n";
    $message .= $received;

    $headers = 'From: info@lavinierrico.com';

    mail($to_email,$subject,$message,$headers);

    echo "true";


?>