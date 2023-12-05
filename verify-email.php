<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['key']) && isset($_GET['token'])) {
    require 'dbconfig.php'; // Include your database configuration file
    $conn = db_connect(); // Create a database connection function in dbconfig.php

    $email = $_GET['key'];
    $token = $_GET['token'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT * FROM companies WHERE verification_token = ? AND email = ?");
    $stmt->bind_param("ss", $token, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if ($row['verification_status'] == 0) {
            // Update verification status and verified_at timestamp
            $d = date('Y-m-d H:i:s');
            $stmt = $conn->prepare("UPDATE companies SET verification_status = 1, verified_at = ? WHERE email = ?");
            $stmt->bind_param("ss", $d, $email);
            $stmt->execute();
            $msg = "Congratulations! Your email has been verified.";
        } else {
            $msg = "You have already verified your account with us.";
        }
    } else {
        $msg = "This email is not registered with us.";
    }
} else {
    $msg = "Danger! Something went wrong.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>User Account Activation by Email Verification using PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-3">
    <div class="card">
        <div class="card-header text-center">
            Account Activation by Email Verification
        </div>
        <div class="card-body">
            <p><?php echo $msg; ?></p>
            <p>Go to Home Page <a href="http://eworxs.app/">Eworxs</a></p>
        </div>
    </div>
</div>
</body>
</html>
