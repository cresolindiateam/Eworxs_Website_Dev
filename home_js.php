
   <script src="jquery/jquery.js" type="text/javascript"></script>
   <script   src="jquery/eworxs.js" type="text/javascript"></script>
 
    <script src="https://js.stripe.com/v3/"></script>
   <script>
      $(document).ready(function () {
        $('#copyright').text('© ' + (new Date()).getFullYear() + ' EWORXS');
      });

      function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
   </script>

    <script>
    $("#overlay4").hide();
            $("#submit_email").click(function() {
                    var Email = $("#email_team_contact").val();
                    var Message = $("#Message_contact").val();
                    $.ajax({
                        url: 'contact_sales.php',
                        method: 'post',
                         dataType: "json",
                        data: {
                            Email: Email,
                             Message: Message,
                            action: 'contact',
                        },
     beforeSend: function()
     {
     $("#overlay4").show();
      $(".submitemailbtn").hide();
     
   },
   complete: function(){
     $("#overlay4").hide();
     $(".submitemailbtn").show();
   },
                         success: function (data) {  
if(data.Data2){
 $("#success_team_contact").html(data.Message); 
 $("#overlay4").hide();
 $(".submitemailbtn").show();

  $("#email_team_contact").val('');
         $("#Message_contact").val('');
       
   }
   else
   {
    $("#success_team_contact").empty();
   }
if(!(data.Data2))
{
 $("#error_1_team_contact").html(data.Message); 
}
else
{
   $("#error_1_team_contact").empty(); 
}
 /*if(jQuery.inArray("Email could not be send", data.Message) !== -1)
    { 
      $("#error_1_team_contact").html("Email could not be send"); 
    }
else
{
 $("#error_1_team_contact").empty();    
}

 if(jQuery.inArray("Email not be emplty", data.Message) !== -1)
    { 
$("#error_1_team_contact").html("Email not be emplty"); 
}
else
{
 $("#error_1_team_contact").empty();    
}

 if(jQuery.inArray("Email has been sent Successfully", data.Message) !== -1)
    { 
$("#success_team_contact").html("Email has been sent Successfully"); 
}
else
{
 $("#success_team_contact").empty();    
}*/

                            /*if(data['success'] == true) {
                                $('#success_team_contact').html(data['message']);
                            } else {
                                $('#error_1_team_contact').html(data['message']);
                            }*/
                        }
                    });
            });
         
</script>

   <script>
// Get the modal
var modal = document.getElementById("fee-popup3");
// Get the button that opens the modal
var btn = document.getElementById("getstart1");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
} 
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

var modal2 = document.getElementById("self-paid-popup3");
// Get the button that opens the modal
var btn2 = document.getElementById("getstart2");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];
// When the user clicks the button, open the modal 
btn2.onclick = function() {
    modal2.style.display = "block";
} 
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal2.style.display = "none";
}

  


var modal3 = document.getElementById("team-paid-popup3");
// Get the button that opens the modal
var btn3 = document.getElementById("getstart3");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[2];
// When the user clicks the button, open the modal 
btn3.onclick = function() {   
    modal3.style.display = "block";
} 
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal3.style.display = "none";
}

var modal4 = document.getElementById("contact-popup3");
// Get the button that opens the modal
var btn4 = document.getElementById("getstart4");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[3];
// When the user clicks the button, open the modal 
btn4.onclick = function() {   
    modal4.style.display = "block";
} 
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    modal2.style.display = "none";
    modal3.style.display = "none";
    modal4.style.display = "none";
  }
}
</script>

   <script type="text/javascript">
      $(document).ready(function () {
      
      function activate(tab) {
          // switch all tabs off
          $(".w-tab-link.w--current").removeClass(" w--current");
      
          // switch this tab on
          tab.addClass("w--current");
      }
      if (localStorage) { // let's not crash if some user has IE7
          var index = parseInt(localStorage['tab'] || '0');
          activate($('.w-tab-link').eq(index));
      }
      
      // When a link is clicked
      $(".blog-tabs-link").click(function () {
          if (localStorage) localStorage['tab'] = $(this).index();
          activate($(this));
      });
      
      });
   </script>
   <script>
      $( ".teamtab" ).click(function() {
      
      $(".personal").css('display','none');
      $(".for-teams").css('display','flex');
      
       $(".teamtab").addClass("tabclassactive");
      
        $(".selftab").removeClass("tabclassactive");
      
      });
      
      $( ".selftab" ).click(function() {
      
      $(".personal").css('display','flex');
      $(".for-teams").css('display','none');
      
       $(".selftab").addClass("tabclassactive");
      
        $(".teamtab").removeClass("tabclassactive");
      });
   </script>

<script type="text/javascript">
 $("#overlay2").hide();  

$('#submit_self_paid').click(function(e) {  
var email = $("#email_self_paid").val(); 
var password = $("#password_self_paid").val(); 
var confirmpassword = $("#confirmpassword_self_paid").val(); 
var premium_type = $("#premium_type").val(); 

if(email=='')
{
  $("#error_"+1+"_self_paid").html("Please Enter Email");
  return false;
}
else
{
  $("#error_"+1+"_self_paid").empty();
}
 
if(!isEmail(email))
{
  $("#error_"+1+"_self_paid").html("Email not Valid");
  return false;
}
else
{
  $("#error_"+1+"_self_paid").empty();
}


if(password=="")
{ 
    $("#error_2_self_paid").html("Please Enter Password");
     return false;
}
else
{
  $("#error_2_self_paid").empty();
}

var match =  password.match(/^(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/);
if( match == null){
$("#error_"+2+"_1_self_paid").html("Please enter atleast 1 Number, 1 Special Character and Minimum 8 Characters.");
    return false;
} 
else
{
    $("#error_"+2+"_1_self_paid").empty();
}

if(confirmpassword=="")
{ 
    $("#error_3_self_paid").html("Please Enter Confirm Password");
     return false;
}
else
{
  $("#error_3_self_paid").empty();
}

if(confirmpassword!=password)
{ 
    $("#error_3_self_paid").html("Confirm Password Should be Same as Password");
     return false;
}
else
{
  $("#error_3_self_paid").empty();
}

 
if(premium_type==0)
{ 
    $("#error_"+4+"_self_paid").html("Please choose premium");
     return false;
}
else
{
  $("#error_"+4+"_self_paid").empty();
}
 
 // $("#submit_self_paid").prop('disabled', true);


 $.ajax({ 
    url:"company_insert_self_paid.php",
    method: 'post',
    dataType: "json",
    data: $('#form_data_self_paid').serialize(),
         beforeSend: function()
     {
     $("#overlay2").show();
     $(".selfpaidbtn").hide();
        // $("#submit_self_paid").prop('disabled', true);
  
   },
   complete: function(){
   
     $("#overlay2").hide();
     $(".selfpaidbtn").show();
     // $("#submit_self_paid").prop('disabled', false);
   },

    success: function (result) {  
        console.log("deepak goud");
       console.log(result);
       console.log(result.Message)
      
    if(jQuery.inArray("email already exists", result.Data2) !== -1)
    { 
      $("#error_1_1_self_paid").html("Email Already Exists"); 
      $("#overlay2").hide();
      $(".selfpaidbtn").show();
    }  else { 
      $("#error_1_1_self_paid").empty(); 
    } 
    if(jQuery.inArray("New record created successfully", result.Data3) !== -1)
    { 
        
           console.log(result.Message);
           console.log("ajay2222222");
      $("#success_self_paid").html("Your account has been created successfully, Please check your email to verification"); 
       $("#overlay2").hide();
       $(".selfpaidbtn").show();
      if(result.status==1){
         
          gotoCheckout(result.checkoutId);
        }else{
          alert(result.Message);
        } 


    }  else { 
      $("#success_self_paid").empty(); 
    } 

    console.log(result.last_inserted_id);  
    $("#last_inserted_id").val(result.last_inserted_id);  
    $("#generate_fees").hide();
    if(result.last_inserted_id.length>0)
    {
        $("#generate_fees").show();
    } 

    // if(jQuery.inArray('New record created successfully',result.Data3) !== -1)
    //  {  
    //    if(result.status==1){
    //       gotoCheckout(result.checkoutId);
    //     }else{
    //       alert(result.Message);
    //     } 
    //  }   
    }
  });  
});


//submit_business_paid
 $("#overlay3").hide(); 
$('#submit_business_paid').click(function(e) {  



var email = $("#email_team_paid").val(); 
var password = $("#password_team_paid").val();  
var confirmpassword = $("#confirmpassword_team_paid").val();  
var premium_type_team_paid = $("#premium_type_team_paid").val(); 
var users = $("#number_of_user").val(); 
 
if(email=='')
{
  $("#error_"+1+"_team_paid").html("Please Enter Email");
  return false;
}
else
{
  $("#error_"+1+"_team_paid").empty();
}

if(!isEmail(email))
{
  $("#error_"+1+"_team_paid").html("Email not Valid");
  return false;
}
else
{
  $("#error_"+1+"_team_paid").empty();
}

 
if(password=="")
{ 
    $("#error_2_team_paid").html("Please Enter Password");
    return false;
}
else
{
  $("#error_2_team_paid").empty();
}
 
 var match =  password.match(/^(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/);
if( match == null){
$("#error_"+2+"_1_team_paid").html("Please enter atleast 1 Number, 1 Special Character and Minimum 8 Characters.");
    return false;
} 
else
{
    $("#error_"+2+"_1_team_paid").empty();
}

 
 
if(confirmpassword=="")
{ 
    $("#error_4_team_paid").html("Please Enter Confirm Password");
    return false;
}
else
{
  $("#error_4_team_paid").empty();
}
 
if(confirmpassword!=password)
{ 
    $("#error_4_team_paid").html("Confirm Password Should be Same as Password");
    return false;
}
else
{
  $("#error_4_team_paid").empty();
}


if(premium_type_team_paid==0)
{ 
    $("#error_3_team").html("Please choose premium");
    return false;
}
else
{
  $("#error_3_team").empty();
}


if(users=="")
{  
  $("#error_3_team_paid").html("Please enter number of users");
  return false;
}
else
{
  $("#error_3_team_paid").empty();
}
 
if(users>100){
      $("#number_of_user").val(''); 
      $("#error_3_team_paid").html("Can't add more then 100 users");
      return false;
   } 
 


 $.ajax({
    url:"company_insert_business_paid.php",
    method: 'post',
    dataType: "json", 
    data: $('#form_data_team_paid').serialize(),

       beforeSend: function()
     {
     $("#overlay3").show();
     $(".businesspaidpremium").hide();
   },
   complete: function(){
     $("#overlay3").hide();
     $(".businesspaidpremium").show();
   },

    success: function (result) {  

/*console.log(result);
        return false;*/
       
    if(jQuery.inArray("email already exists", result.Data2) !== -1)
    { 
      $("#error_1_1_team_paid").html("Email Already Exists"); 

       $("#overlay3").hide();
     $(".businesspaidpremium").show();

    }  else { 
      $("#error_1_1_team_paid").empty(); 
    } 
    if(jQuery.inArray("New record created successfully", result.Data3) !== -1)
    { 
      $("#success_team_paid").html("Your account has been created successfully, Please check your email to verification"); 

       $("#overlay3").hide();
       $(".businesspaidpremium").show();

      if(result.status==1){
          gotoCheckout(result.checkoutId);
        }else{
          alert(result.Message);
        } 


    }  else { 
      $("#success_team_paid").empty(); 
    } 

    console.log(result.last_inserted_id);  
    $("#last_inserted_id").val(result.last_inserted_id);  
    $("#generate_fees").hide();
    if(result.last_inserted_id.length>0)
    {
        $("#generate_fees").show();
    } 

    if(jQuery.inArray('New record created successfully',result.Data3) !== -1)
     {  
       if(result.status==1){
          gotoCheckout(result.checkoutId);
        }else{
          alert(result.Message);
        } 
     }   
    }
  });  
});

 
 

function gotoCheckout(session_id){
    console.log("i am gotocheckout function");
    //old pk-->pk_test_uZCvVbgO2A8quJcDkekDlyM700wctvZzLf
  var stripe = Stripe('pk_test_uZCvVbgO2A8quJcDkekDlyM700wctvZzLf');
  stripe.redirectToCheckout({
    // Make the id field from the Checkout Session creation API response
    // available to this file, so you can provide it as parameter here
    // instead of the {{CHECKOUT_SESSION_ID}} placeholder.
    //"cs_test_a1LQjOqHOFk7Utqw7HuaS8g6YM2mP9bbFDarLCtZ1KIVwOsFJZRQ4W3E0N"
    sessionId: session_id
  }).then(function (result) {
    alert(result);
    // If `redirectToCheckout` fails due to a browser or network
    // error, display the localized error message to your customer
    // using `result.error.message`.
  });
}


 $("#overlay").hide();


 $('#submit').click(function(e) {  
var email = $("#email").val(); 


var password = $("#password").val(); 
var confirmpassword = $("#confirmpassword").val(); 
if(email=='')
{
  $("#error_"+1).html("Please Enter Email");
  return false;
}
else
{
  $("#error_"+1).empty();
}


if(!isEmail(email))
{
  $("#error_"+1).html("Email not Valid");
  return false;
}
else
{
  $("#error_"+1).empty();
}



if(password=="")
{ 
    $("#error_"+2).html("Please Enter Password");
    return false;
}
else
{
  $("#error_"+2).empty();
}
 
  
var match =  password.match(/^(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/);
if( match == null){
$("#error_"+2+"_1").html("Please enter atleast 1 Number, 1 Special Character and Minimum 8 Characters.");
    return false;
} 
else
{
    $("#error_"+2+"_1").empty();
}



if(confirmpassword=="")
{ 
    $("#error_"+3).html("Please Enter Confirm Password");
    return false;
}
else
{
  $("#error_"+3).empty();
}


if(confirmpassword!=password)
{ 
    $("#error_"+3).html("Confirm Password Should be Same as Password");
    return false;
}
else
{
  $("#error_"+3).empty();
}



 $.ajax({
    url:"company_insert.php",
    method: 'post',
    dataType: "json",
    data: $('#form_data').serialize(),

     beforeSend: function()
     {
        
     $("#overlay").show();
    $(".fee-popup3btn").hide();
           
   },
   complete: function(){
     $("#overlay").hide();
     $(".fee-popup3btn").show();
   },

    success: function (result) {  



    if(jQuery.inArray("email already exists", result.Data2) !== -1)
    { 
    $("#error_"+1).html("Email Already Exists"); 
    $("#overlay").hide();
     $(".fee-popup3btn").show();
    } 

     else { 
    $("#error_"+1).empty(); 
    } 

    if(jQuery.inArray("New record created successfully", result.Data3) !== -1)
    { 
    $("#success").html("Your account has been created successfully, Please check your email to verification"); 
         $("#email").val('');
         $("#password").val('');
         $("#confirmpassword").val('');
         
    }

    else 
    { 
    $("#success").empty(); 
    } 
    console.log(result.Data3);  
    $("#last_inserted_id").val(result.last_inserted_id);  
    $("#generate_fees").hide();
    if(result.last_inserted_id.length>0)
    {
        $("#generate_fees").show();
    } 
    if(jQuery.inArray('New record created successfully',result.Data3) !== -1)
     { 
        $("#error_"+0).empty(); 
        $("#error_"+1).empty(); 
        $("#error_"+2).empty(); 
        $("#error_"+3).empty(); 
        $("#error_"+1+"_"+1).empty(); 
     }   
    }
  });  
});

$("#premium_type_team_paid").change(function(){
   var idAmount = $(this).val();
   var string = idAmount.split("_");
   var Amount = string[1]; 
   var users = $("#number_of_user").val(); 
   if(users>100){
      $("#number_of_user").val(''); 
      $("#error_3_team_paid").html("Can't add more then 100 users");
      return false;
   }else {
      $("#error_3_team_paid").html("");
   }
   var amount = users*Amount;
   $("#number_of_user_Amount").html('Subcription Amount: '+amount.toFixed(2));

});

$("#number_of_user").keyup(function(){
   var users = $(this).val();
   if(users>100){
      $(this).val('');
      $("#error_3_team_paid").html("Can't add more then 100 users");
      return false;
   } else {
      $("#error_3_team_paid").html("");
   }
   var idAmount = $("#premium_type_team_paid").val();
   var string = idAmount.split("_");
   var Amount = string[1];  
   var amount = users*Amount;
   $("#number_of_user_Amount").html('Subcription Amount: '+amount.toFixed(2));
});




   

// document.addEventListener("DOMContentLoaded", function () {
//       var modal = document.getElementById("team-paid-popup3");

//       function isMobile() {
//         return window.innerWidth <= 768; // Adjust this value based on your needs
//       }
//       function hideModal() {
//         modal.style.display = "none";
//       }
//       // Close the modal when clicking outside of it
//       document.body.addEventListener("click", function (event) {
//         if (isMobile() && !modal.contains(event.target)) {
//           hideModal();
//         }
//       });
//     });

// document.addEventListener("DOMContentLoaded", function () {
//       var modal = document.getElementById("team-paid-popup3");

//       function isMobile() {
//         return window.innerWidth <= 768; // Adjust this value based on your needs
//       }
//       function hideModal() {
//         modal.style.display = "none";
//       }
//       // Close the modal when clicking outside of it
//       document.body.addEventListener("click", function (event) {
//         if (isMobile() && !modal.contains(event.target)) {
//           hideModal();
//         }
//       });
//     });

// document.addEventListener("DOMContentLoaded", function () {
//       var modal = document.getElementById("contact-popup3");

//       function isMobile() {
//         return window.innerWidth <= 768; // Adjust this value based on your needs
//       }
//        function hideModal() {
//         modal.style.display = "none";
//       }
//       // Close the modal when clicking outside of it
//       document.body.addEventListener("click", function (event) {
//         if (isMobile() && !modal.contains(event.target)) {
//           hideModal();
//         }
//       });
//     });


  </script>

