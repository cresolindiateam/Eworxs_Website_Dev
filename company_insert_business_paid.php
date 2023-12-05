<?php
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");
require 'dbconfig.php';
require_once('stripe-php-master/init.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$email = $_REQUEST['email'] ?? '';
$password = md5($_REQUEST['password'] ?? '');
$premium_type_team_paid = $_REQUEST['premium_type_team_paid'] ?? '';
$number_of_user = $_REQUEST['number_of_user'] ?? '';

$company_name = '';
$last_inserted_id = array();
$error = array();
$success = array();
$empty = array();

if (empty($email)) {
    $error[] = 'Please Enter Email';
} else {
    $conn = db_connect();
    $total_users = $number_of_user;
    $premium_type_data = explode("_", $premium_type_team_paid);
    $premium_type = $premium_type_data[0];

    if (empty($error)) {
        $sql = mysqli_query($conn, "SELECT id FROM companies WHERE email='$email'");
        if (mysqli_num_rows($sql) >= 1) {
            $empty[] = "email already exists";
            $success_array = array("Data2" => $empty);
            echo json_encode($success_array);
        } else {
            $token = md5($_POST['email']) . rand(10, 9999);
            $sql = "INSERT INTO companies (email,password,role,no_of_workers,verification_token,status,verification_status) VALUES ('$email', '$password',2,'$total_users','$token',1,0";
            if ($conn->query($sql) === TRUE) {
                $success[] = "New record created successfully";
                $last_inserted_id[] = $conn->insert_id;
                $link = "<a href='http://eworxs.app/verify-email.php?key=".$_POST['email']."&token=".$token."'>Click and Verify Email</a>";

                // $mail = new PHPMailer\PHPMailer\PHPMailer();
                // $mail->IsMail();
                // $mail->Host = 'localhost';
                // $mail->SMTPAuth = false;
                // $mail->Port = 25;
                // $mail->SMTPSecure = 'none';
                // $mail->setFrom('support@eworxs.app', 'Eworxs Support');
                // $mail->addAddress($email);
                // $mail->Subject = 'Click On This Link to Verify Email ';
                // $mail->isHTML(true);
                // $mailContent = '<p>Click On This Link to Verify Email</p>'.$link;
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

if ($httpCode == 202) {
                // if ($mail->send()) {
                    $company_id = $conn->insert_id;
                    if ($premium_type == 1) {
                        $duration_type = $premium_type;
                    }
                    if ($premium_type == 2) {
                        $duration_type = $premium_type;
                    }

                    $plan_sql = "SELECT id,amount FROM plans WHERE plan_type='2' and duration_type=".$duration_type." and status = 1";
                    $plan_exe = $conn->query($plan_sql);
                    if ($plan_exe->num_rows > 0) {
                        $dataResult = $plan_exe->fetch_all(MYSQLI_ASSOC);
                        $plan_id = $dataResult[0]['id'];
                        $amount = $dataResult[0]['amount'];
                    }
                    // $sql2 = "INSERT INTO company_subscriptions (plan_id,company_id,created_at,status) VALUES ('$plan_id','$company_id',now(),1)";
                    // $conn->query($sql2);
                    $cust_id = getCustomerId($conn, $conn->insert_id);

                    $sql = "SELECT id,plan_id,amount FROM plans WHERE id='$plan_id'";
                    $exe = $conn->query($sql);
                    $dataResult = $exe->fetch_all(MYSQLI_ASSOC);
                    $plan_id_st = $dataResult[0]['plan_id'];
                    $plan_id_amount = $dataResult[0]['amount'];
                    $total_amount = number_format((float)$plan_id_amount, 2, '.', '');

                    $stripe = setStripeApiKeyAndGetStripeClient();
                    $result = $stripe->checkout->sessions->create([
                        'success_url' => 'https://eworxs.app/plan_success_data.php?company_id='.$company_id.'&plan_id='.$plan_id.'&no_of_workers='.$total_users,
                        'cancel_url' => 'https://eworxs.app/plan_failed.php',
                        'line_items' => [
                            [
                                'price' => $plan_id_st,
                                'quantity' => $number_of_user,
                            ],
                        ],
                        'mode' => 'subscription',
                    ]);
                    if (isset($result->id)) {
                        $checkoutId = $result->id;
                        $sql = "update companies set checkout_session_id ='$checkoutId' WHERE id='$company_id'";
                        $conn->query($sql);
                    } else {
                        $checkoutId = '';
                    }
                    $success_array3 = array("Data3" => $success, "last_inserted_id" => $last_inserted_id, 'checkoutId' => $checkoutId, 'status' => 1, 'Message' => 'Payment done');
                    echo json_encode($success_array3);
                }
            }
        }
    } else {
        $error_array = array("Data" => $error);
        echo json_encode($error_array);
    }
}

function getCustomerId($db, $company_id)
{
    $sql = "SELECT cust_id,email,company_name FROM companies WHERE id='$company_id'";
    $exe = $db->query($sql);
    if ($exe->num_rows > 0) {
        $dataResult = $exe->fetch_all(MYSQLI_ASSOC);
        $cust_id = $dataResult[0]['cust_id'];
        $email = $dataResult[0]['email'];
        $company_name = $dataResult[0]['company_name'];
        if ($cust_id != "") {
            return $cust_id;
        } else {
            return createCustomer($db, $company_id, $company_name, $email);
        }
    }
}

function createCustomer($db, $company_id, $name, $email)
{
    $stripe = setStripeApiKeyAndGetStripeClient();
    try {
        $customer = $stripe->customers->create([
            'description' => 'Customer'.$company_id,
            'name' => $name,
            'email' => $email,
        ]);
        if (isset($customer->id)) {
            $custId = $customer->id;
            $sql = "UPDATE companies SET cust_id='$custId' WHERE id='$company_id'";
            $exe = $db->query($sql);
            if ($exe == 1) {
                return $custId;
            } else {
                return null;
            }
        } else {
            return null;
        }
    } catch (Exception $e) {
        return null;
    }
}

function setStripeApiKeyAndGetStripeClient()
{
    $stripeApiKey = 'sk_test_k11gZlDKwJ3iUInZzkVlcivP00eWZkWKVm';
    \Stripe\Stripe::setApiKey($stripeApiKey);
    return new \Stripe\StripeClient($stripeApiKey);
}
?>
