<?php
// Database configuration
$host = 'localhost';
$db = 'crud';
$user = 'root'; // Change to your MySQL username
$pass = ''; // Change to your MySQL password

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from form and sanitize it
$name = htmlspecialchars(trim($_POST['name']));
$email = htmlspecialchars(trim($_POST['email']));
$password = $_POST['password'];
$repeat_password = $_POST['repeat_password'];

// Check if passwords match
if ($password !== $repeat_password) {
    die("Passwords do not match.");
}

// Hash the password
$password_hash = password_hash($password, PASSWORD_BCRYPT);

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO members (name, email, password_hash) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $password_hash);

?>

<div class="message-container">
    <?php
// Execute the query
if ($stmt->execute()) {
    echo '<div class="success-message">Registration successful! <a href="login.php">Login here</a></div>';
} else {
    // Log the error for debugging
    error_log("Database error: " . $stmt->error);
    echo '<div class="error-message">An error occurred during registration. Please try again later.</div>';
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>
</div>