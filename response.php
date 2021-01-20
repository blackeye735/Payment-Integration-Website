<?php
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $visitor_email = $_POST["email"];
    $country = $_POST["country"];
    $message = $_POST["message"];

    $email_from = "arghorkm35@gmail.com"

    $email_subject = "New Form Submission"

    $email_body = "User Name: $fname + $lname.\n",
                   "User Email: $visitor_email.\n",
                   "Country: $country.\n",
                   "User Message: $message.\n";

    $to = "arghochakraborty735@gmail.com";

    $headers = "From: $email_from \r\n";
    $headers = "Reply-To: $visitor_email \r\n";

    mail($to, $email_subject, $email_body, $headers);

    header("Location: contact.html");
?>
