<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Database connection
    $con = new mysqli("localhost", "root", "RiverSide100", "wtdata");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare and execute the email check query
    $stmt = $con->prepare("SELECT password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($storedPassword);
        $stmt->fetch();

        // Compare entered password with stored password
        if ($password === $storedPassword) {
            $_SESSION['email'] = $email; // Start session for the user
            header("Location: index1.php"); // Redirect to the main page
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "Email not found.";
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login - Rosh Raj Photography</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="camera.ico">
    <style>
        body {
            background-image: url('images/hero-min.jpg');
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .login-container {
            margin-top: 10%;
            max-width: 400px;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .form-control {
            border-radius: 20px;
        }
        .btn-custom {
            border-radius: 20px;
            background-color: #333;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #555;
        }
        .password-toggle {
            position: relative;
        }
        .toggle-icon {
            position: absolute;
            top: 70%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="login-container">
            <h3 class="text-center">Welcome Back</h3>
            <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group password-toggle">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password" required>
                    <span class="toggle-icon" onclick="togglePassword('password', this)">👁️</span>
                </div>
                <button type="submit" class="btn btn-custom btn-block mt-4">Login</button>
                <div class="text-center mt-3">
                    <p class="text-small">Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </form>
        </div>
    </div>
    <script>
        function togglePassword(inputId, icon) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.textContent = '🙈'; // Change to "hide" icon
            } else {
                input.type = 'password';
                icon.textContent = '👁️'; // Change back to "show" icon
            }
        }
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
