<?php
ini_set('date.timezone', 'Asia/Kolkata');

require 'dbconfig.php';


$db = db_connect();
// sql to delete a record
if(isset($_REQUEST['editclientid']))
{
  $id=$_REQUEST['editclientid'];
   $sql = "SELECT * FROM company_clients WHERE  id= $id";
 

   $exe = $db->query($sql);
  $data = $exe->fetch_all(MYSQLI_ASSOC);
 


$first_name = $data[0]['first_name'];
$last_name = $data[0]['last_name'];
$email = $data[0]['email'];
$phone = $data[0]['phone'];
$password = $data[0]['password'];
$phone = $data[0]['phone'];
$company_name = $data[0]['company_name'];
$status = $data[0]['status']; 
$work_rate = $data[0]['work_rate']; 
$mileage_rate =$data[0]['mileage_rate']; 
$due_date_range=$data[0]['due_date_range'];
$postal_code=$data[0]['postal_code'];
$office_address=$data[0]['office_address'];
$status=$data[0]['status'];
$company_id=$data[0]['company_id'];
$clock_setting=$data[0]['clock_setting'];
$return_milegae=$data[0]['return_mileage'];

$data1= array("firstName"=>$first_name,"lastName"=>$last_name,"email"=>$email,"phone"=>$phone,"password"=>$password,"company_name"=>$company_name,"status"=>$status, "work_rate"=>$work_rate,"mileage_rate"=>$mileage_rate , 
"date_range"=>$due_date_range,"postal_code"=>$postal_code,
"office_address"=>$office_address,"status"=>$status,"company_id"=>$company_id,"clock_setting"=>$clock_setting,"return_milegae"=>$return_milegae);


echo json_encode($data1);
}

?>