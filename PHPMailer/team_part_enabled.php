
 <div style="display:flex;" class="for-teams"> 

 <div id="team-paid-popup3" class="modal fade" role="dialog" >
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="modal-header">
        <h4>Register</h4>
      </div> 
      <div class="modal-body">
       <div class="container-sec">
       <form id="form_data_team_paid" method="post"> 
           <div class="row"> 
            <div class="col-25">
                
                <label class="label-input">Email</label>
            </div>

                <div class="col-75">
                <input type="text" name="email" id="email_team_paid" class="form-control">
                <div id="error_1_team_paid" class="text-danger"></div>
                <div id="error_1_1_team_paid" class="text-danger"></div>
                </div>
            </div> 
            <div class="row">
                <div class="col-25">
                <label class="label-input">Password</label>
            </div>
            <div class="col-75">
                <input type="text" name="password" id="password_team_paid" class="form-control">
                <div id="error_2_team_paid" class="text-danger"></div>
                </div> 
            </div>  

            <div class="row">
                <div class="col-25">
                <label class="label-input">Premium Type</label>
               </div>
               <div class="col-75">
                 <select name="premium_type_team_paid" id="premium_type_team_paid" class="form-control" >
                     <option value="0"> Please choose premium type </option>
                     <option value="1_19.99">$19.99 /month </option>
                     <option value="2_119.99">$119.99 /annum</option>
                 </select>
                <div id="error_3_team" class="text-danger"></div>
                </div>
                </div> 
            

            <div class="row">
                <div class="col-25">
                <label class="label-input">Number of User</label>
            </div>
            <div class="col-75">
                <input type="text" name="number_of_user" id="number_of_user" class="form-control">
                <div id="error_3_team_paid" class="text-danger"></div>
                </div> 
            </div>  

            <div class="row">
                <div class="col-25">
                <label class="label-input">Subcription Amount:</label> 
            </div>
            <div class="col-75">
                <label class="label-input" for="" id="number_of_user_Amount"></label>

               </div>
            </div>  

            <div class="row">
                <label style="display: block">&nbsp; &nbsp;</label>
                <input type="submit" id="submit_business_paid"  class="btn btn-primary btn-block button-form" style="padding: 6px 12px;">Save</button>
            </div>  
            <div class="row">
                <label style="display: block">&nbsp; &nbsp;</label> 
                <a class="btn btn-success btn-block" style="color:white;display:none;" onclick="generate_fees(6)"  id="generate_fees">Generate Fees</a>
           <div id="success_team_paid" class="text-success" style="padding:15px;"></div>
            </div>
            

            
        </form> 

      </div>

    </div>
  </div>
</div>
</div>

<div id="contact-popup3" class="modal fade" role="dialog" >
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <span class="close">&times;</span>
      <div class="modal-header">
        <h4>Contact Sale</h4>
      </div> 
      <div class="modal-body">
      <div class="container-sec">
       <form id="form_data_contact" method="post" > 
           <div class="row"> 
            <div class="col-25">
               
                <label>Email</label>
            </div>
                <div class="col-75">
                <input type="text" name="email" id="email_team_paid" class="form-control">
                <div id="error_1_team_paid" class="text-danger"></div>
                <div id="error_1_1_team_paid" class="text-danger"></div>
                </div>

            </div>  


            <div class="row">
                <div class="col-25">
                <label>Message:</label>
                </div>
                <div class="col-75"> 
                <textarea name="Message" id="Message" cols="30" rows="10"></textarea>
               </div>
               </div>
          

            <div class="row">
                <label style="display: block">&nbsp; &nbsp;</label>
                <button type="button" id="submit_business_paid"  class="btn btn-primary btn-block button-form" style="padding: 6px 12px;">Save</button>
            </div>  
            <div class="row">
                <label style="display: block">&nbsp; &nbsp;</label> 
                <a class="btn btn-success btn-block" style="color:white;display:none;" onclick="generate_fees(6)"  id="generate_fees">Generate Fees</a>
                 <div id="success_team_paid" class="text-success" style="padding:15px;"></div>
            </div>
            

          
        </form> 
  </div>   
  </div>   
      </div>

    </div>
  </div>



            <div class="pricing">
               <div class="pricing__content">
                  <div class="pricing__header">
                     <div class="pricing__title">
                        <h1 class="pricing__h">Teams </h1>
                        <div class="pricing__badge is--pro">
                           <div>Premium</div>
                        </div>
                     </div>
                  </div>
                  <div class="pricing__price">
                     <h2  class="h2-2 is--price">2-100 field workers</h2>
                     <br>
                     <div class="pricing__cta"> 
                        <button type="button"  id="getstart3" class="button is--pricing w-inline-block"   data-toggle="modal" data-target="#team-paid-popup3">
                        <div>Get started</div>
                     </button>
                        <br>
                        <h2 class="h2-2 is--price" style="font-size:28px;">$11.99</h2>
                        <div class="price-yr">/m</div>
                        &nbsp;
                        <h2 class="h2-2 is--price" style="font-size:28px;">$119.99</h2>
                        <div class="price-yr">/year</div>
                     </div>
                  </div>
                  <div class="pricing__features">
                     <div class="text-l"><strong>Best place to get started</strong></div>
                     <div class="features-list">
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Create a team for free</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Unlimited trips</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Super Administrator dashboard</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Add and Remove workers</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Add and Remove clients</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">IRS Compliant Data report</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Custom rates</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Single Billing</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Premium support</div>
                        </div>
                  
                     </div>
                  </div>
               </div>
            </div>

            <div class="spacer"></div>
            <div class="pricing">
               <div class="pricing__content">
                  <div class="pricing__header">
                     <div class="pricing__title is--two">
                        <h1 class="pricing__h">Teams Ace
                        </h1>
                      </div>
                  </div>
                  <div class="pricing__price">
                     <h2 class="h2-2 is--price">over 100 field workers</h2>
                     <br>
                     <div class="pricing__cta">
                        <div class="w-embed w-script"> 
                            <button  id="getstart4" data-tf-popup="eQGqkof8" data-tf-size="70" data-tf-auto-close="100000" data-tf-hidden="utm_source=website,utm_medium=organic,utm_campaign=teams,utm_content=survey" class="button is--pricing w-inline-block " data-tf-loaded="true"  data-toggle="modal" data-target="#contact-popup3">Contact sales</button>
                        </div>
                        <br>
                        <h2 class="h2-2 is--price" style="font-size:28px;">
                           <!--$9.99-->
                        </h2>
                        <div class="price-yr">
                           <!--/m-->
                        </div>
                        &nbsp;
                        <h2 class="h2-2 is--price" style="font-size:28px;">
                           <!--$99.99-->
                        </h2>
                        <div class="price-yr">
                           <!--/year-->
                        </div>
                     </div>
                  </div>
                  <div class="pricing__features">
                     <div class="text-l"><strong>Premium solution</strong></div>
                     <div class="features-list">
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">All fetaures of Team premium </div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Multiple Admin</div>
                        </div>
                        <div class="feature-item">
                           <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                           <div class="text-l is--dimmed">Customized Rates</div>
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </div>
   
   <script>
   $(document).ready(function(){
    $("form#form_data_contact").submit(function(event) {
        event.preventDefault();
        var email = $("#email_team_paid").val();
        var message = $("#Message").val();

        $.ajax({
            type: "POST",
            url: "contact_sales.php",
            data: "email=" + email + "&message=" + messge,
            success: function(){alert('success');}
        });
    });
});
</script>