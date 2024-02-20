<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['about'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    $to = 'yogalakshmi@chadura.com';
    $subject = 'New Consultation Request';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message\nDate: $date\nTime: $time";
    $headers = 'From: webmaster@example.com';

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error: Unable to send email.';
    }
}
?>
