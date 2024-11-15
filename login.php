<?php
// Handle login logic
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rememberMe = isset($_POST["rememberMe"]);

    // Simple authentication (replace with database authentication for real application)
    $valid_email = "malasaran510@gmail.com";
    $valid_password = "1234";
    $valid_email = "yamina2005@gmail.com";
    $valid_password = "7890";

    if ($email === $valid_email && $password === $valid_password) {
        if ($rememberMe) {
            setcookie("email", $email, time() + 604800, "/"); // 7 days
            setcookie("password", $password, time() + 604800, "/"); // 7 days
        } else {
            setcookie("email", "", time() - 3600, "/");
            setcookie("password", "", time() - 3600, "/");
        }
        header("Location: ipe.html");
        exit();
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}

// Retrieve cookie values if available
$cookie_email = isset($_COOKIE["email"]) ? $_COOKIE["email"] : "";
$cookie_password = isset($_COOKIE["password"]) ? $_COOKIE["password"] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blink Bazaar - Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2>Login to Blink Bazaar</h2>
            <form method="POST" action="login.php">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($cookie_email); ?>" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password" value="<?php echo htmlspecialchars($cookie_password); ?>" required>
                </div>
                <div class="input-group remember-me">
                    <input type="checkbox" name="rememberMe" id="rememberMe" <?php echo $cookie_email && $cookie_password ? 'checked' : ''; ?>>
                    <label for="rememberMe">Remember Me</label>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="login-btn">Login</button>
                <p class="signup-text">Don't have an account? <a href="signup.php">Sign Up</a></p>
            </form>
        </div>
    </div>
</body>
</html>

<style>
/* Styles for the login page */
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

.login-container {
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

.login-box {
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

.input-group input[type="email"],
.input-group input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    box-sizing: border-box;
}

.input-group.remember-me {
    display: flex;
    align-items: center;
}

.input-group.remember-me input {
    margin-right: 5px;
}

.forgot-password {
    text-align: right;
    margin-bottom: 15px;
}

.forgot-password a {
    color: #007bff;
    text-decoration: none;
    font-size: 12px;
}

.forgot-password a:hover {
    text-decoration: underline;
}

.login-btn {
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

.login-btn:hover {
    background-color: #e7ce51;
}

.signup-text {
    text-align: center;
    margin-top: 15px;
    font-size: 14px;
}

.signup-text a {
    color: #007bff;
    text-decoration: none;
}

.signup-text a:hover {
    text-decoration: underline;
}
</style>
