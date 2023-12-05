<?php
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'dbconfig.php';

$error = [];
$success = [];
$empty = [];
$last_inserted_id = [];
$email = '';
$total_users = 1;

if (isset($_REQUEST['email']) && $_REQUEST['email'] !== '') {
    $email = $_REQUEST['email'];
} else {
    $error[] = 'Please Enter Email';
}

$password = md5($_REQUEST['password']);

$conn = db_connect();

if (empty($error)) {
    $sql = mysqli_query($conn, "SELECT id FROM companies WHERE email='$email'");
    if (mysqli_num_rows($sql) >= 1) {
        $empty[] = "email already exists";
        $success_array = ["Data2" => $empty];
        echo json_encode($success_array);
    } else {
        $token = md5($_POST['email']) . rand(10, 9999);
        $sql = "INSERT INTO companies (email,password,role,no_of_workers,verification_token,status,verification_status)
                VALUES ('$email', '$password', 2, '$total_users', '$token', 1, 0)";




        if ($conn->query($sql) === TRUE) {

            echo "hello";
            $success[] = "New record created successfully";
            $last_inserted_id[] = $conn->insert_id;

            $link = "<a href='http://eworxs.app/devwebsite/verify-email.php?key=$_POST[email]&token=$token'>Click and Verify Email</a>";

            // $mail = new PHPMailer\PHPMailer\PHPMailer();
            // $mail->IsMail();
            // $mail->Host = 'localhost';
            // $mail->SMTPAuth = false;
            // $mail->Port = 25;
            // $mail->SMTPSecure = 'none';
            // $mail->setFrom('support@eworxs.app', 'Eworxs Support');
            // $mail->addAddress($email);
            // $mail->Subject = 'Click On This Link to Verify Email';
            // $mail->isHTML(true);
            // $mailContent = "<p>Click On This Link to Verify Email</p>$link";
            // $mail->Body = $mailContent;


$apiKey = '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';
$senderEmail = 'info@eworxs.app';
$recipientEmail = $email;
$subject = 'Click On This Link to Verify Email';
$message = '<p>Click On This Link to Verify Email</p>'.$link;

// Define the SendGrid API endpoint
$sendgridApiUrl = 'https://api.sendgrid.com/v3/mail/send';

// Create an array of data to send in the request
$data = array(
    'personalizations' => array(
        array(
            'to' => array(
                array(
                    'email' => $recipientEmail
                )
            )
        )
    ),
    'from' => array(
        'email' => $senderEmail,
       
    ),
    'subject' => $subject,
    'content' => array(
        array(
            'type' => 'text/html',
            'value' => $message
        )
    )
);

$data = json_encode($data);

// Set up cURL to make the POST request
$ch = curl_init($sendgridApiUrl);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Authorization: Bearer ' . $apiKey,
    'Content-Type: application/json'
));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL request
$response = curl_exec($ch);

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Close the cURL session
curl_close($ch);

echo $response;die;

if ($httpCode == 202) {
//     echo "Email sent successfully!";
// } else {
//     echo "Error sending email: " . $response;
// }




            // if ($mail->send()) {
                $company_id = $conn->insert_id;

                // Set the default subscription plan (self, free)
                $plan_sql = "SELECT id FROM plans WHERE plan_type='1' AND duration_type=3 AND status = 1";
                $plan_exe = $conn->query($plan_sql);

                if ($plan_exe->num_rows > 0) {
                    $dataResult = $plan_exe->fetch_all(MYSQLI_ASSOC);
                    $plan_id = $dataResult[0]['id'];

                    $sql2 = "INSERT INTO company_subscriptions (plan_id,company_id,no_of_workers,status)
                            VALUES ('$plan_id','$company_id',1,1)";
                    $conn->query($sql2);

                    $success_array3 = ["Data3" => $success, "last_inserted_id" => $conn->insert_id];
                    echo json_encode($success_array3);
                }
            }
        }
    }
} else {
    $error_array = ["Data" => $error];
    echo json_encode($error_array);
}
?>