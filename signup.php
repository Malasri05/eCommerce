<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blink Bazaar - Sign Up</title>
    <link rel="stylesheet" href="signup.css">
</head>
<body>
    <div class="signup-container">
        <div class="signup-box">
            <h2>Create an Account</h2>
            <form method="POST" action="signup.php">
                <div class="input-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your full name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Create a password" required>
                </div>
                <div class="input-group">
                    <label for="confirm-password">Confirm Password</label>
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm your password" required>
                </div>
                <button type="submit" class="signup-btn">Sign Up</button>
                <p class="login-text">Already have an account? <a href="login.php">Login</a></p>
            </form>
        </div>
    </div>

    <?php
    // PHP logic to handle form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm-password"];

        // Simple validation (expand as needed for your project)
        if ($password === $confirm_password) {
            // Redirect to ipe.html after successful sign-up
            header("Location: ipe.html");
            exit();
        } else {
            echo "<script>alert('Passwords do not match. Please try again.');</script>";
        }
    }
    ?>
</body>
</html>

<style>
/* Styles for the signup page */
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.signup-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    max-width: 400px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    padding: 20px;
}

.signup-box {
    width: 100%;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.input-group {
    margin-bottom: 15px;
}

.input-group label {
    display: block;
    font-size: 14px;
    color: #555;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    box-sizing: border-box;
}

.signup-btn {
    width: 100%;
    padding: 10px;
    background-color: #000;
    color: #fff;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.signup-btn:hover {
    background-color: #e7ce51;
}

.login-text {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
}

.login-text a {
    color: #007bff;
    text-decoration: none;
}

.login-text a:hover {
    text-decoration: underline;
}
</style>
