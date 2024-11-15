<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $about = $_POST['about'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Create email content
    $to = "yogalakshmi.pa@gmail.com";
    $subject = "Contact Form Submission";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone: $phone\n";
    $message .= "Message: $about\n";
    $message .= "Date: $date\n";
    $message .= "Time: $time\n";

    // Send email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully.";
    } else {
        echo "Failed to send email.";
    }
} else {
    echo "Method not allowed.";
}
?>
