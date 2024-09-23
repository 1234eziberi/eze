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

// Check if token and passwords are set
if (!isset($_GET['token']) || !isset($_POST['password']) || !isset($_POST['repeat_password'])) {
    die("Invalid request.");
}

$token = $_GET['token'];
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

// Validate passwords
if ($password !== $repeat_password) {
    die("Passwords do not match.");
}

// Hash the new password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// Check if token exists and is valid
$stmt = $conn->prepare("SELECT email FROM password_resets WHERE token = ? AND created_at > NOW() - INTERVAL 1 HOUR");
$stmt->bind_param("s", $token);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 0) {
    die("Invalid or expired token.");
}

$stmt->bind_result($email);
$stmt->fetch();

// Update the password
$stmt = $conn->prepare("UPDATE members SET password_hash = ? WHERE email = ?");
$stmt->bind_param("ss", $password_hash, $email);
$stmt->execute();

// Delete the reset token
$stmt = $conn->prepare("DELETE FROM password_resets WHERE token = ?");
$stmt->bind_param("s", $token);
$stmt->execute();

echo "Your password has been updated successfully.";

$stmt->close();
$conn->close();
?>

