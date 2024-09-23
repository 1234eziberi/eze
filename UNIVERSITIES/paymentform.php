
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
    <style>
        * {box-sizing: border-box}
        body {
            background: #2c7873;
            font-family: 'Poppins', sans-serif;
        }
        .form {
            width: 80%;
            max-width: 600px;
            background-color: white;
            margin: 4% auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            background: #f1f1f1;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid white;
            background: #2c7873;
            color: white;
            cursor: pointer;
            border-radius: 4px;
            width: 100%;
        }
        input[type="submit"]:hover {
            background: #1e5c50;
        }
        button {
            border: none;
            background: #2c7873;
            color: white;
            padding: 10px;
            cursor: pointer;
            border-radius: 4px;
        }
        button:hover {
            background: #1e5c50;
        }
        .payment-form ol {
            margin: 0;
            padding: 0;
            /* list-style: none; */
        }
        .payment-form ol li {
            margin-bottom: 10px;
        }
        .payment-form input[type="text"] {
            border: none;
            background: transparent;
            cursor: text;
        }
    </style>
</head>
<body>
    <div class="form">
        <h4>You need to become a member to continue...</h4>
        <h5>Membership fee is 1000/= TZS which renews every 2 months</h5>
        <h4>Please follow the steps below to register</h4>
        <p>Please enter your name <span>e.g., Hamis Abdul</span></p>
        <form action="config.php" method="POST"> <!-- Change "your_php_file.php" to the correct PHP file name -->
            <input type="text" name="name" placeholder="Enter your name" required>
            <p>Enter Payment number <span>e.g., 0750997116</span></p>
            <input type="number" name="number" placeholder="Your payment number" required>
            <input type="submit" name="submit" value="Submit">
        </form>
        <div class="payment-form">
            <h4>Make payments with Vodacom by following these steps:</h4>
            <ol>
                <li>Dial *150*00#</li>
                <li>Select send money to Vodacom</li>
                <li>Enter the receiver number <input type="text" value="0750997116" id="myInput" readonly> <button onclick="copyToClipboard('myInput')">Copy number</button></li>
                <li>Enter amount 1000/= TZS</li>
                <li>Confirm receiver EZIBERI RAFAEL CHUMA</li>
            </ol>
            <h4>Make payments with other networks by following these steps:</h4>
            <ol>
                <li>Dial the payment menu for your network</li>
                <li>Select send money to other networks</li>
                <li>Enter the receiver number <input type="text" value="0750997116" id="myInput2" readonly> <button onclick="copyToClipboard('myInput2')">Copy number</button></li>
                <li>Enter amount 1000/= TZS</li>
                <li>Confirm receiver EZIBERI RAFAEL CHUMA</li>
            </ol>
        <a href="pay.php">Click here to proceed after making payments</a>
        </div>
    </div>
    <script>
        function copyToClipboard(elementId) {
            var copyText = document.getElementById(elementId);
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices
            document.execCommand("copy");
            alert("Copied the text: " + copyText.value);
        }
    </script>
</body>
</html>
