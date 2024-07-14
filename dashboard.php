<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['first_name']; ?></h1>
    <p>This is your secure dashboard.</p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>
