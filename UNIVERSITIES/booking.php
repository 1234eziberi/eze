

<!DOCTYPE html>
<html lang="en">
<head> <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membership form</title>
   
 

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #2c7873;
            border: none;
            border-radius: 4px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #218838;
        }
        .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Rooms Reservation Form</h1>
        <form action="process_booking.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="room_type">Room Type:</label>
                <select id="room_type" name="room_type" required>
                    <option value="cheaper less quality">Cheaper less standard</option>
                    <option value="Standard quality">Standard quality</option>
                    <option value="Self contained">Self Contained</option>
                </select>
            </div>
            <div class="form-group">
                <label for="check_in">Specify university</label>
                <input type="text" id="university" name="university" required>
            </div> <div class="form-group">
                <label for="price">Specify rent-price amount of your budget prefference</label>
                <input type="number" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="check_out">Specify date you need room:</label>
                <input type="date" id="check_in" name="check_in" required>
            </div>
            <button type="submit">Book Now</button>
        </form>
    </div>
</body>
</html>
