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
    <title>KENPAY</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
</head>
<body>
    <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fa fa-bars"  id="btn"></i>
                    <i class="fa fa-times" id="cancel"></i>
                </label>

            <div class="sidebar">
                
                <header class="sidebar-header"><a href="#"><img src="KENYA.png" alt=""><span class="nav-item">KENCOIN</span></a></header>
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i><span class="nav-item">Home</span></a></li>
                    <li><a href="#"><i class="fa fa-user"></i><span class="nav-item">Profile</span></a></li>
                    <li><a href="#"><i class="fa fa-wallet"></i><span class="nav-item">Wallet</span></a></li>
                    <li><a href="#"><i class="fa fa-chart-bar"></i><span class="nav-item">Analytics</span></a></li>
                    <li><a href="#"><i class="fa fa-tasks"></i><span class="nav-item">Tasks</span></a></li>
                    <li><a href="#"><i class="fa fa-cog"></i><span class="nav-item">Settings</span></a></li>
                    <li><a href="#"><i class="fa fa-question-circle"></i><span class="nav-item">Question</span></a></li>
                    <li><a href="logout.php" class="logout"><i class="fa fa-sign-out-alt"></i><span class="nav-item">LOGOUT</span></a></li>
                </ul>
        </div>
    <!-- Navigation Header -->
    <header>
        <div class="logo">
            <h1>KENPAY</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="account.html">Account</a></li>
                
                <li class="dropdown">
                    <a href="#" class="dropbtn">Follow Us <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="#"><i class="fab fa-facebook"></i> Facebook</a>
                        <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
                        <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
                        <a href="#"><i class="fab fa-linkedin"></i> LinkedIn</a>
                        <!-- Add more social media links with icons as needed -->
                    </div>
                </li>
            </ul>
        </nav>
    </header>

    <script>
        function toggleFormContainer() {
            var loginContainer = document.getElementById('login-container');
            var registerContainer = document.getElementById('register-container');
            
            // Toggle visibility of login and register containers
            if (loginContainer.style.display === 'none' && registerContainer.style.display === 'none') {
                loginContainer.style.display = 'block';
            } else {
                loginContainer.style.display = 'none';
                registerContainer.style.display = 'none';
            }
        }

        function toggleForm() {
            var loginContainer = document.getElementById('login-container');
            var registerContainer = document.getElementById('register-container');
            
            // Toggle between login and register forms
            if (loginContainer.style.display === 'none') {
                loginContainer.style.display = 'block';
                registerContainer.style.display = 'none';
            } else {
                loginContainer.style.display = 'none';
                registerContainer.style.display = 'block';
            }
        }
    </script>
    <!-- Body Content -->
    <main>
        <div class="button-container">
            <button class="kencoin" onclick="location.href='kencoin.html'">Kencoin</button>
            <button class="spin" onclick="location.href='spin.html'"></button>
            <button class="remotask" onclick="location.href='remotask.html'">Remotask</button>
            <button class="referrals" onclick="referrals()">Referrals</button>
        </div>
    </main>

    <!-- Footer -->
<footer>
            <div class="row">
                <div class="contdiv">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate program</a></li>
                    </ul>
                </div>
                <div class="contdiv">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">Training</a></li>
                        <li><a href="#">Trading signals</a></li>
                        <li><a href="#">Affiliation programs</a></li>
                        <li><a href="#">Withrawals & Deposits</a></li>
                       
                    </ul>
                </div>
                <div class="contdiv">
                    <h4>online Services</h4>
                    <ul>
                        <li><a href="#">Bitcoin</a></li>
                        <li><a href="#">Forex Trading</a></li>
                        <li><a href="#">Withrawals</a></li>
                        <li><a href="#">Deposits</a></li>
                    </ul>
                </div>
                <div class="contdiv">
                    <h4>Follow us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-telegram"></i></a>
                    </div>
                </div>
            </div>
        
</footer>

    <script src="index.js"></script>
</body>
</html>
