<?php 
   ini_set('date.timezone', 'Asia/Kolkata');
   require_once('stripe-php-master/init.php');
   require 'dbconfig.php';
   session_start(); 
   
   $plan_id=$_REQUEST["plan_id"];
   $company_id = $_REQUEST['company_id'];
   $noofworkers = $_REQUEST['no_of_workers']; 
   $db = db_connect();   
   $checkoutsessionid='';
    $plan_sql = "SELECT checkout_session_id FROM companies where id= ".$company_id;
          $plan_exe = $db->query($plan_sql);
          if($plan_exe->num_rows>0){ 
            $dataResult = $plan_exe->fetch_all(MYSQLI_ASSOC);
          
            $checkoutsessionid = $dataResult[0]['checkout_session_id'];
          } 
   $sqlInsert = "INSERT INTO company_subscriptions(plan_id,subscription_id,company_id,no_of_workers,status)VALUES('$plan_id','','$company_id','$noofworkers',1)";
   $exeInsert = $db->query($sqlInsert);
   $last_id = $db->insert_id;
   if(!empty($last_id)){ 
     $sql = "update companies set status=1 WHERE id='$company_id'";
     $db->query($sql); 
     $db->close();
     $data1= array("Status"=>1,"Message"=>"Plan has been purchased.");
     //echo json_encode($data1);
   
   ?>
<script type="text/JavaScript">  
   alert("Plan has been purchased");
   window.location.href='index.php';
</script>";
<?php 
   } else{   $db->close();
     $data1= array("Status"=>0,"Message"=>"Plan did not purchase.");?>
<script type="text/JavaScript">  
   alert("Plan did not purchased"); 
   window.location.href="index.php";
</script>
<?php }
   ?>