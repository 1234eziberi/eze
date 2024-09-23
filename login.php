<?php
// Start the session at the beginning of the script
session_start();

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['password'])) {
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
    $stmt = $conn->prepare("SELECT id, password_hash FROM members WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if email exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $password_hash);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $password_hash)) {
            // Store user information in session
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;

            // Optionally, set a success message
            $_SESSION['message'] = "Login successful! Welcome back.";

            // Redirect to a different page
            header("Location: index1.php");
            exit(); // Ensure no further code is executed after redirection
        } else {
            $_SESSION['message'] = "Invalid email or password.";
        }
    } else {
        $_SESSION['message'] = "Invalid email or password.";
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Basic reset for margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container for the login form */
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        /* Form title styling */
        .login-container h1 {
            margin-bottom: 20px;
            color: #333;
        }

        /* Styling for form groups */
        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        /* Label styling */
        .form-group label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        /* Input field styling */
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        /* Button hover effect */
        button:hover {
            background-color: #0056b3;
        }

        /* Message styling */
        .message {
            margin-top: 10px;
            color: #d9534f; /* Red color for error messages */
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Login</button>
            <div class="message">
                <!-- Display error messages or success messages here -->
                <?php
                if (isset($_SESSION['message'])) {
                    echo "<p>" . htmlspecialchars($_SESSION['message']) . "</p>";
                    unset($_SESSION['message']);
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>
