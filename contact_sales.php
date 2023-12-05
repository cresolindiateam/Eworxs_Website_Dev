<?php
require("PHPMailer/src/PHPMailer.php");
require("PHPMailer/src/SMTP.php");
require("PHPMailer/src/Exception.php");

$email = $_REQUEST['Email'] ?? '';
$message1 = $_REQUEST['Message'] ?? '';

if (!empty($email)) {



  
$apiKey = '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';
$senderEmail = 'info@eworxs.app';
$recipientEmail = $email;
$subject = 'Hello Eworxs, A New Enquiry has been Arrived.';

$bodyContent = '
    <html>
        <head>
            <title>A New Enquiry has been Arrived</title>
        </head>
        <body>
            <h1>A New Enquiry has been Arrived</h1>
            Hello Eworxs, I am here to inform you that a new enquiry has been received. Please check the details.
            <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;">
                <tr style="background-color: #e0e0e0;">
                    <th>Email:</th><td>'.$email.'</td>
                </tr>
                <tr style="background-color: #e0e0e0;">
                    <th>Message:</th><td>'.$message1.'</td>
                </tr>
                <tr style="background-color: #e0e0e0;">
                    <th>Website:</th><td><a href="http://eworxs.app/">Eworxs</a></td>
                </tr>
            </table>
        </body>
    </html>';

$message = $bodyContent;


 

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

            



    // $subject = "Hello Eworxs, A New Enquiry has been Arrived.";
    // $mail = new PHPMailer\PHPMailer\PHPMailer();
    // $mail->IsMail();
    // $mail->Host = 'localhost';
    // $mail->SMTPAuth = false;
    // $mail->Port = 25;
    // $mail->SMTPSecure = 'none';
    // // Sender info
    // $mail->setFrom('support@eworxs.app', 'Eworxs Support');
    // // Add a recipient
    // $mail->addAddress($email);
    // // Set email format to HTML
    // $mail->isHTML(true);
    // // Mail subject
    // $mail->Subject = 'New Enquiry Received';
    // Mail body content
    // $bodyContent = '
    // <html>
    //     <head>
    //         <title>A New Enquiry has been Arrived</title>
    //     </head>
    //     <body>
    //         <h1>A New Enquiry has been Arrived</h1>
    //         Hello Eworxs, I am here to inform you that a new enquiry has been received. Please check the details.
    //         <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;">
    //             <tr style="background-color: #e0e0e0;">
    //                 <th>Email:</th><td>'.$email.'</td>
    //             </tr>
    //             <tr style="background-color: #e0e0e0;">
    //                 <th>Message:</th><td>'.$message.'</td>
    //             </tr>
    //             <tr>
    //                 <th>Website:</th><td><a href="http://eworxs.app/">Eworxs</a></td>
    //             </tr>
    //         </table>
    //     </body>
    // </html>';
    // $mail->Body = $bodyContent;
    
    // Send email and handle errors
    // if (!$mail->send()) {
        $status = true;

        $message = "Email has been sent successfully";
    } else {

          $status = false;
        $message = "Email could not be sent: " ;
      
    }
} else {
    $status = false;
    $message = "Email should not be empty";
}

$success_array = array("Data2" => $status, "Message" => $message);
echo json_encode($success_array);
?>
