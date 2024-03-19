<?php
    // these values are usually filled by a form
    $subject = "Hello World";
    $message = "Dit is het eerste mail bericht via PHP";
    $email = "nickolas.ciochina@student.graafschapcollege.nl"; // sender mail address - use your own!

    // Recipient email address
    $to = 'recipient@example.com'; // Replace 'recipient@example.com' with the actual recipient's email address

    // Create email headers
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Sending email
    if (mail($to, $subject, $message, $headers)) {
        echo '<p class="success">Your message has been sent successfully!</p>';
    } else {
        echo '<p class="error">Unable to send email. Please try again!</p>';
    }
?>
