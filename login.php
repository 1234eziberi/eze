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
$email = htmlspecialchars(trim($_POST['email']));
$password = $_POST['password'];

// Prepare and execute the query
$stmt = $conn->prepare("SELECT password_hash FROM members WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();

// Check if email exists
if ($stmt->num_rows > 0) {
    $stmt->bind_result($password_hash);
    $stmt->fetch();

    // Verify the password
    if (password_verify($password, $password_hash)) {
        echo "Login successful! Welcome back.";
        // Redirect or start a session here
    } else {
        echo "Invalid email or password.";
    }
} else {
    echo "Invalid email or password.";
}

// Close connections
$stmt->close();
$conn->close();
?>
