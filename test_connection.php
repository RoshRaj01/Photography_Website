<?php
$conn = new mysqli('localhost', 'root', 'RiverSide100', 'wtdata'); // Adjust if a password is required

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}

$conn->close();
?>
