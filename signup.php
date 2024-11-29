<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $confirmPassword = trim($_POST['confirmPassword']);

    // Verify passwords match
    if ($password !== $confirmPassword) {
        $error = "Passwords do not match.";
    } else {
        // Database connection
        $con = new mysqli("localhost", "root", "RiverSide100", "wtdata");

        // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Check if email already exists
        $stmt = $con->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            // Email already exists
            $error = "This email is already registered. Please log in or use a different email.";
        } else {
            // Insert new user if email does not exist
            $stmt->close();
            $stmt = $con->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);

            if ($stmt->execute()) {
                // Redirect to index.php after successful signup
                header("Location: index1.php");
                exit();
            } else {
                $error = "Error during registration: " . $stmt->error;
            }
        }

        // Close statement and connection
        $stmt->close();
        $con->close();
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Signup - Rosh Raj Photography</title>
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
        .signup-container {
            margin-top: 5%;
            max-width: 500px;
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
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
        <div class="signup-container">
            <h3 class="text-center">Create an Account</h3>
            <form method="POST" action="signup.php">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" placeholder="Enter your username" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group password-toggle">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Enter a password" required>
                    <span class="toggle-icon" onclick="togglePassword('password', this)">👁️</span>
                </div>
                <div class="form-group password-toggle">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm your password" required>
                    <span class="toggle-icon" onclick="togglePassword('confirmPassword', this)">👁️</span>
                </div>
                <?php if (isset($error)): ?>
                    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
                <?php endif; ?>
                <button type="submit" class="btn btn-custom btn-block mt-4">Sign Up</button>
                <div class="text-center mt-3">
                    <p class="text-small">Already have an account? <a href="login.php">Login</a></p>
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
