<?php
// Database configuration
$host = 'localhost';
$db = 'crud';
$user = 'root'; // Change to your MySQL username
$pass = ''; // Change to your MySQL password

// Create connection with error reporting
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if email is set
if (!isset($_POST['email'])) {
    die("Email is required.");
}

$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format.");
}

// Check if email exists in the database
$stmt = $conn->prepare("SELECT id FROM members WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    die("No user found with that email address.");
}

// Generate a unique token
$token = bin2hex(random_bytes(32));

// Save the token and email to the database
$stmt = $conn->prepare("INSERT INTO password_resets (email, token, created_at) VALUES (?, ?, NOW()) ON DUPLICATE KEY UPDATE token = VALUES(token), created_at = VALUES(created_at)");
$stmt->bind_param("ss", $email, $token);
$stmt->execute();

// Send reset email
$reset_link = "http://jifunzehub.com/reset_password.php?token=$token";
$subject = "Password Reset Request";
$message = "To reset your password, please click the link below:\n\n$reset_link";
$headers = "From: no-reply@jifunzehub.com";

if (mail($email, $subject, $message, $headers)) {
    echo "A password reset link has been sent to your email address.";
} else {
    echo "Failed to send the password reset email.";
}

$stmt->close();
$conn->close();
?>