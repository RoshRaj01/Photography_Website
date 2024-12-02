<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    
    // Verify passwords match
    if ($password !== $confirmPassword) {
        die("Passwords do not match.");
    }

    // Database connection
    $con = new mysqli("localhost", "root", "RiverSide100", "wtdata");

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Prepare and execute the insert statement (without confirmPassword)
    $stmt = $con->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "New record created successfully";
        header("Location: index1.php"); // Redirect to the main page after signup
        exit();
    } else {    
        echo "Error: " . $stmt->error;
    }

    // Close statement and connection
    $stmt->close();
    $con->close();
}
?>
