
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>User Account Activation by Email Verification using PHP</title>
<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if($_GET['key'] && $_GET['token'])
{
require 'dbconfig.php';
$conn = db_connect();
$email = $_GET['key'];
$token = $_GET['token'];


$query = mysqli_query($conn,
"SELECT * FROM `companies` WHERE `verification_token`='".$token."' and `email`='".$email."'");

$d = date('Y-m-d H:i:s');
if (mysqli_num_rows($query) > 0) {
$row= mysqli_fetch_array($query);



if($row['verification_status'] == 0){



mysqli_query($conn,"UPDATE companies set verification_status=1, verified_at ='" . $d . "' WHERE email='" . $email . "'");
$msg = "Congratulations! Your email has been verified.";
}else{
$msg = "You have already verified your account with us";
}
} else {
$msg = "This email has been not registered with us";
}
}
else
{
$msg = "Danger! Your something goes to wrong.";
}
?>
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