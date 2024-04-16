<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "thelegendmoges@gmail.com";
    $subject = "Message from your website";
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully. Thank you!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
