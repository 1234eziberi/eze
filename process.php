<?php
// Function to sanitize input data
function sanitize_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Initialize variables
    $name = $number = $email = $service = $message = "";
    $errors = [];

    // Sanitize and validate input data
    if (empty($_POST["name"])) {
        $errors[] = "Name is required.";
    } else {
        $name = sanitize_input($_POST["name"]);
    }

    if (empty($_POST["number"])) {
        $errors[] = "Phone number is required.";
    } else {
        $number = sanitize_input($_POST["number"]);
    }

    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    } else {
        $email = sanitize_input($_POST["email"]);
    }

    if (empty($_POST["service"])) {
        $errors[] = "Please select a service.";
    } else {
        $service = sanitize_input($_POST["service"]);
    }

    if (empty($_POST["message"])) {
        $errors[] = "Message is required.";
    } else {
        $message = sanitize_input($_POST["message"]);
    }

    // If there are no errors, process the form
    if (empty($errors)) {
        // Email configuration
        $to = "jifunzeHub@gmail99.com"; // Replace with your email address
        $subject = "Contact Form Submission";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        
        // Construct the email message
        $email_message = "Name: $name\n";
        $email_message .= "Phone Number: $number\n";
        $email_message .= "Service: $service\n";
        $email_message .= "Message:\n$message\n";

        // Prevent email header injection
        if (preg_match('/[\r\n]/', $name) || preg_match('/[\r\n]/', $email) || preg_match('/[\r\n]/', $message)) {
            $errors[] = "Invalid input.";
        } else {
            // Send the email
            if (mail($to, $subject, $email_message, $headers)) {
                echo '<div class="message">Thank you for your message. It has been sent.</div>';
            } else {
                $errors[] = '<div class="message-error">There was a problem sending your message. Please try again.</div>';
            }
        }
    }

    // Display errors if there are any
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }
} else {
    echo "Invalid request.";
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
    <style>
        .message{
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #d9534f; 
        }
        .message-error{

        }
    </style>
</body>
</html>
