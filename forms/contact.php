<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Email tujuan (ganti dengan email kamu)
    $to = "fachrezandi123@gmail.com";

    // Header email
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Isi email
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Subject: $subject\n\n";
    $body .= "Message:\n$message\n";

    // Kirim email
    if (mail($to, $subject, $body, $headers)) {
        echo "Your message has been sent. Thank you!";
    } else {
        echo "Failed to send message. Please try again.";
    }
}
?>
