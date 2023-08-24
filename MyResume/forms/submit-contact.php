<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set your email address to receive form submissions
    $to = "your_email@example.com";
    $subject = "New Contact Form Submission";
    $headers = "From: $email";
    
    $mailBody = "Name: $name\nEmail: $email\nMessage:\n$message";
    
    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
}
?>
