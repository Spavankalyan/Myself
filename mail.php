<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Validate form data (you can add more validation as per your requirements)
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        echo "Please fill in all the required fields.";
        exit;
    }

    // Send email
    $to = 'saginalapavankalyan@gmail.com'; // Replace with your own email address
    $headers = "From: $name <$email>" . "\r\n";
    $body = "Subject: $subject\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error occurred. Please try again later.";
    }
}
?>
