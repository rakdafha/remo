<?php
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$dbname = "user_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$firstName = $_POST['first-name'];
$lastName = $_POST['last-name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // hash the password

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $firstName, $lastName, $email, $password);

if ($stmt->execute()) {
    // Redirect to login page after successful registration
    header("Location: login.html");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
