<?php
if ($_SERVER["message"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $phone   = htmlspecialchars($_POST['phone']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Admin email where messages should go
    $to = "lalit.zanthiumtechnosoft@gmail.com";  

    // Email subject
    $email_subject = "New Contact Form Message: " . $subject;

    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n"
                . "Here are the details:\n"
                . "Name: $name\n"
                . "Phone: $phone\n"
                . "Subject: $subject\n"
                . "Message:\n$message";

    // Headers
    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: $name <$phone>\r\n";

    // Send mail
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
}
?>
