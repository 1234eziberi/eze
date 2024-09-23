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

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO room_reservation (name, email, room_type, university,room_price , check_in) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $email, $room_type, $university, $number, $check_in);

// Get data from form and sanitize it
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$room_type = filter_input(INPUT_POST, 'room_type', FILTER_SANITIZE_STRING);
$university = filter_input(INPUT_POST, 'university', FILTER_SANITIZE_STRING);
$number = filter_input(INPUT_POST, 'number', FILTER_SANITIZE_STRING);
$check_in = filter_input(INPUT_POST, 'check_in', FILTER_SANITIZE_STRING);

// Validate email
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("Invalid email format");
}

// Execute the query
if ($stmt->execute()) {
    $message = '<div class="message">Booking successful!<br>Return <a href="PROJECT1/index2.php">Home</a></div>';
} else {
    $message = '<div class="message">Error: ' . htmlspecialchars($stmt->error) . '</div>';
}

// Close connections
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Status</title>
    <link rel="stylesheet" href="university.css">
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <style>
        .message {
            text-align: center;
            margin-top: 50px;
            font-size: 1.5em; /* Adjust font size for better readability */
            color: #218838; 
        }
    </style>
</head>
<body>
    <?php echo $message; ?>
</body>
</html>
