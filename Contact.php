<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose email message
    $to = "rslandscape8@gmail.com"; // Your Gmail address
    $email_subject = "New Message from Rise N Shine Garden Maintenance";
    $email_body = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    // Send email
    mail($to, $email_subject, $email_body);

    // Redirect back to the contact page after sending the email
    header("Location: contact.html");
    exit;
}
?>
