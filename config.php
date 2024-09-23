

<?php
session_start();

// Generate and verify CSRF token
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
//         die('Invalid CSRF token');
//     }
// }

// Database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve and sanitize form data
$name = htmlspecialchars(trim($_POST['name']));
$number = (int)$_POST['number']; // Cast to integer for safety

// Validate inputs
if (empty($name) || !is_int($number)) {
    die("Invalid input");
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO clients (name, number) VALUES (?, ?)");
$stmt->bind_param("si", $name, $number);

// Execute the statement
if ($stmt->execute()) {
    // Redirect to a success page
    header("Location: paymentform.php");

    // if(isset($_POST['number'])){
    //     echo " name and Phonenumber submitted Proceed with payments";
    // }
    // else{
    //     echo "Please submit  the credentials";
    // }
    exit(); // Ensure no further code is executed
} else {
    // Handle error, maybe redirect to an error page
    header("Location: error.php?msg=" . urlencode($stmt->error));
    exit(); // Ensure no further code is executed
}

// Close connections
$stmt->close();
$conn->close();
?>
