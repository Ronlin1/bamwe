<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Set the recipient email address
    $to = "twinomwerobert@gmail.com";

    // Set the subject for the email
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    $success = mail($to, $subject, $email_message, $headers);

    if ($success) {
        echo "Your message has been sent successfully. We will get back to you shortly.";
    } else {
        echo "Sorry, there was an error in sending your message. Please try again.";
    }
}
?>
