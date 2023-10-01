<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate the email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        return;
    }

    // Create the email content
    $to = 'milad.izadi3000@gmail.com';  // Replace with your email address
    $subject = 'Contact Us Form Submission';
    $body = "Name: $name\nEmail: $email\nMessage:\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us. We will get back to you soon!";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
}
?>
