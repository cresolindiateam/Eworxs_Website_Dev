<div style="display:none;" class="for-teams">
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
                     <div class="row input-center">
                        <div class="col-75">
                           <input type="text" placeholder="Email" name="email" id="email_team_paid" class="form-control">
                           <div id="error_1_team_paid" class="text-danger"></div>
                           <div id="error_1_1_team_paid" class="text-danger"></div>
                        </div>
                     </div>
                     <div class="row input-center" >
                        <div class="col-75">
                           <input type="password" placeholder="Password" name="password" id="password_team_paid" class="form-control type_password">
                           <div id="error_2_team_paid" class="text-danger"></div>
                           <div id="error_2_1_team_paid" class="text-danger"></div>
                        </div>
                     </div>
                     <div class="row input-center">
                        <div class="col-75">
                           <input type="password" name="confirmpassword" id="confirmpassword_team_paid" class="form-control type_password" placeholder="Confirm Password">
                           <div id="error_4_team_paid" class="text-danger"></div>
                        </div>
                     </div>
                     <div class="row input-center">
                        <div class="col-75">
                           <select name="premium_type_team_paid" id="premium_type_team_paid" class="form-control" >
                              <option value="0"> Please choose premium type </option>
                              <?php 
                                 $sql = "SELECT id,plan_type,amount,duration_type FROM plans where plan_type=2";
                                 $exe = $conn->query($sql);
                                 $dataResults = $exe->fetch_all(MYSQLI_ASSOC);
                                 foreach ($dataResults as $dataResult) {
                                 { ?>
                              <option value="<?php echo $dataResult['duration_type'].'_'.$dataResult['amount'];?>">$<?php echo $dataResult['amount'];?> /<?php 
                                 if($dataResult['duration_type']==1){echo 'Monthly';} else if($dataResult['duration_type']==2){echo 'Yearly';}  ?> </option>
                              <?php }  }?> 
                           </select>
                           <div id="error_3_team" class="text-danger"></div>
                        </div>
                     </div>
                     <div class="row input-center">
                        <div class="col-75">
                           <input type="text" placeholder="Number of Worker" name="number_of_user" id="number_of_user" class="form-control">
                           <div id="error_3_team_paid" class="text-danger"></div>
                        </div>
                     </div>
                     <div class="row input-center">
                        <div class="col-75">
                           <label for="" id="number_of_user_Amount" class="label-input"></label>
                        </div>
                     </div>
                     <div class="row">
                        <label style="display: block">&nbsp; &nbsp;</label>
                        <button type="button" id="submit_business_paid"  class="btn btn-primary btn-block button-form businesspaidpremium" style="padding: 6px 12px;">Save</button>
                        <div id="overlay3">
                           <img src="loading.gif" loading="lazy" alt="Loading" width="40"/>
                           Loading...
                        </div>
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
               <h4>Get started</h4>
            </div>
            <div class="modal-body">
               <div class="container-sec">
                  <form id="form_data_contact" method="post">
                     <div class="row input-center">
                        <div class="col-75">
                           <input type="text" placeholder="Email" name="email" id="email_team_contact" class="form-control">
                        </div>
                        <div id="error_1_contact_paid" class="text-danger"></div>
                        <div id="error_1_1_contact_paid" class="text-danger"></div>
                     </div>
                     <div class="row input-center">
                        <div class="col-75">
                           <textarea name="Message" placeholder="Message" name="Message" id="Message_contact" cols="30" rows="10"></textarea>
                           <div id="error_1_contact_paid" class="text-danger"></div>
                        </div>
                     </div>
                     <div class="row">
                        <label style="display: block">&nbsp; &nbsp;</label>
                        <input type="button" id="submit_email" name=""  class="btn btn-primary btn-block button-form submitemailbtn" style="padding: 6px 12px;" value="Save"/>
                        <div id="overlay4" >
                           <img src="loading.gif" alt="Loading" loading="lazy" width="40"/>
                           Loading...
                        </div>
                        <div id="error_1_team_contact" class="text-danger"></div>
                        <div id="success_team_contact" class="text-success" style="padding:15px;">
                        </div>
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
            <h2 class="h2-2 is--price">$119.99</h2>
            <div class="price-yr">/worker/year</div>
            <br>
            <div class="text-m is--price"><span class="is--dimmed">or </span><span class="is--bold">$11.99</span><span class="is--dimmed"> /worker/monthly</span></div>
            <div class="pricing__cta">
               <button type="button"  id="getstart3" class="button is--pricing w-inline-block"   data-toggle="modal" data-target="#team-paid-popup3">
                  <div>Get started</div>
               </button>
            </div>
         </div>
         <div class="pricing__features">
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
               <h1 class="pricing__h">Teams   </h1>
               <div class="pricing__badge is--ace">
                  <div>Ace</div>
               </div>
            </div>
         </div>
         <div class="pricing__price">
            <h2 class="h2-2 is--price">$229.99</h2>
            <div class="price-yr">/worker/year</div>
            <br>
            <div class="text-m is--price"><span class="is--dimmed">or </span><span class="is--bold">$22.99</span><span class="is--dimmed"> /worker/monthly</span></div>
            <div class="pricing__cta">
               <div class="w-embed w-script"> 
                  <button  id="getstart4" data-tf-popup="eQGqkof8" data-tf-size="70" data-tf-auto-close="100000" data-tf-hidden="utm_source=website,utm_medium=organic,utm_campaign=teams,utm_content=survey" class="button is--pricing w-inline-block " data-tf-loaded="true"  data-toggle="modal" data-target="#contact-popup3">Get started
                  </button>
               </div>
            </div>
         </div>
         <div class="pricing__features">
            <div class="features-list">
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">All features of Team Premium </div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Customized Rates</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Dedicated support team</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
</div>