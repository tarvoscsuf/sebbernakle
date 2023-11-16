<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $topic = $_POST["topic"];
    $message = $_POST["message"];

    $to = "TheBetaVersionIsHere@gmail.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $name";

    mail($to, $subject, $message, $headers);
}
?>
