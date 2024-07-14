<?php
session_start();

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
$email = $_POST['email'];
$password = $_POST['password'];

// Prepare and execute query
$stmt = $conn->prepare("SELECT id, first_name, last_name, email, password FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        // Password is correct, set session variables
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['first_name'] = $row['first_name'];
        $_SESSION['last_name'] = $row['last_name'];
        $_SESSION['email'] = $row['email'];

        // Redirect to dashboard or any secure page
        header("Location: kenpay.php");
        exit();
    } else {
        // Incorrect password
        echo "Incorrect password. <a href='login.html'>Try again</a>";
    }
} else {
    // User not found
    echo "User not found. <a href='registration.html'>Register</a>";
}

$stmt->close();
$conn->close();
?>
