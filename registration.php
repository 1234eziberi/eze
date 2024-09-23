<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Add your existing CSS styling here */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 500px;
        }

        .modal-content h2 {
            font-weight: 600;
        }

        .modal-content p {
            margin: 0 0 20px;
        }

        .modal-content label {
            display: block;
            margin: 10px 0 5px;
            font-weight: 600;
        }

        .modal-content input[type="text"],
        .modal-content input[type="email"],
        .modal-content input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .modal-content input[type="checkbox"] {
            margin-right: 5px;
        }

        .modal-content .signup {
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }

        .modal-content .signup:hover {
            background: #0056b3;
        }

        .modal-content .terms-link {
            color: #007bff;
            text-decoration: none;
        }

        .modal-content .terms-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form class="modal-content" action="register.php" method="post">
        <h2>Create Your Account</h2>
        <p>Please fill in this form to create a membership account. Remember your email and password.</p>
        <hr>

        <fieldset>
            <legend>Personal Information</legend>

            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Enter Name" name="name" required aria-label="Full Name">

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter Email" name="email" required aria-label="Email Address">

            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter Password" name="password" required aria-label="Password" minlength="8">

            <label for="repeat_password">Repeat Password</label>
            <input type="password" id="repeat_password" placeholder="Repeat Password" name="repeat_password" required aria-label="Repeat Password">

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </fieldset>

        <p>By creating an account, you agree to our <a href="#" class="terms-link">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="submit" class="signup">Sign Up</button>
        </div>
    </form>
</body>
</html>

