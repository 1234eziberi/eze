<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="register.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* Add your existing CSS styling here */
    </style>
</head>
<body>
    <form class="modal-content" action="register.php" method="post">
        <h2>Here you go ,you are about to create your account</h2>
        <p>Please fill in this form to create a membership account.Please remember your email and password</p>
        <hr>

        <label for="name"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="name" required>
        <label for="email"><b>Email</b></label><br>
        <input type="email" placeholder="Enter Email" name="email" required style="width:100% ; margin: 5px 0 22px 0;display: inline-block;
         border: none;background: #f1f1f1;  padding: 15px;"><br>

        <label for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="repeat_password"><b>Repeat Password</b></label>
        <input type="password" placeholder="Repeat Password" name="repeat_password" required>

        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>

        <p>By creating an account you agree to our <a href="#" class="terms-link">Terms & Privacy</a>.</p>

        <div class="clearfix">
            <button type="submit" class="signup">Sign Up</button>
        </div>
    </form>
</body>
</html>

