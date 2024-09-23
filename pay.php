<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Credentials</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            background-color: #2c7873 ;
            color: #fff;
            border: none;
            padding: 15px;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        .message {
            text-align: center;
            margin-top: 20px;
            font-size: 16px;
            color: #d9534f; /* Default to red for error messages */
        }

        .message.success {
            color: #5bc0de; /* Blue color for success messages */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Check Your Credentials</h1>
        <form method="POST" action="pay.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required placeholder="enter your name e.g Hamis Abdul">
            <label for="number">Phone number:</label>
            <input type="number" id="number" name="number" required placeholder="enter your mobile payment number e.g 0750997116">
            <button type="submit">Click here to proceed</button>
        </form>

        <?php
        // Check if form was submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
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
            $number = isset($_POST['number']) ? (int)$_POST['number'] : 0;

            // Validate inputs
            if (empty($name) || !is_int($number)) {
                echo '<div class="message">Invalid input</div>';
            } else {
                // Prepare and execute the query
                $stmt = $conn->prepare("SELECT COUNT(*) FROM clients WHERE name = ? AND number = ?");
                $stmt->bind_param("si", $name, $number);
                $stmt->execute();
                $stmt->bind_result($count);
                $stmt->fetch();
                $stmt->close();
                $conn->close();

                // Check if credentials exist in the database
                if ($count > 0) {
                    echo '<div class="message success">Credentials exist in the database.</div>';
                     header("location:registration.php");
                } else {
                    echo '<div class="message">Please complete your payments.</div>';
                }
            }
        }
        ?>
    </div>
</body>
</html>

