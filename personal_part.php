<div style="display:flex;"  class="personal">
   <div class="pricing">
      <div class="pricing__content">
         <div class="pricing__header">
            <div class="pricing__title">
               <h1 class="pricing__h">Self Employed </h1>
               <div class="plan-badge is--lite">
                  <div>Basic</div>
               </div>
            </div>
         </div>
         <div class="pricing__price">
            <h2 class="h2-2 is--price">$0</h2>
            <div class="text-m is--price">
            </div>
         </div>
         <br>
         <div class="pricing__cta">
            <button type="button" id="getstart1" class="button is--pricing  w-inline-block" data-toggle="modal" data-target="#fee-popup3">
               <div>Get started</div>
            </button>
            <div id="fee-popup3" class="modal fade" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <span class="close">&times;</span>
                     <div class="modal-header">
                        <h4>Register</h4>
                     </div>
                     <div class="modal-body">
                        <div class="container-sec">
                           <form id="form_data" method="post">
                              <div class="row input-center" >
                                 <div class="col-75" style="position: relative;">
                                    <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                    <div id="error_1" class="text-danger"></div>
                                    <div id="error_1_1" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="row input-center">
                                 <div class="col-75">
                                    <input type="password" name="password" id="password" class="form-control type_password" placeholder="Password">
                                    <div id="error_2" class="text-danger"></div>
                                    <div id="error_2_1" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="row input-center">
                                 <div class="col-75">
                                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control type_password" placeholder="Confirm Password">
                                    <div id="error_3" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="row">
                                 <label style="display: block">&nbsp; &nbsp;</label>
                                 <button type="button" id="submit"  class="btn btn-primary btn-block button-form fee-popup3btn" style="padding: 6px 12px;">Save</button>
                                 <div id="overlay">
                                    <img src="loading.gif" loading="lazy" alt="Loading" width="40"/>
                                    Loading...
                                 </div>
                                 <div id="success" class="text-success" style="padding:15px;"></div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
           
            <div class="features-list">
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">10 free trips</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Add and Remove clients</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Update client's address</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">IRS Compliant Data report</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Web dashboard</div>
               </div>
            </div>
            <div class="pricing__cta-bottom is--dimmed is--hide-tablet">
               <div class="text-s is--hidden">.</div>
            </div>
         </div>
      </div>
   </div>
   <div class="spacer"></div>
   <div class="pricing">
      <div class="pricing__content">
         <div class="pricing__header">
            <div class="pricing__title">
               <h1 class="pricing__h">Self Employed </h1>
               <div class="pricing__badge is--pro">premium </div>
               <br> 
            </div>
         </div>
         <div class="pricing__price">
            <h2 class="h2-2 is--price">$99.99</h2>
            <div class="price-yr">/year</div>
            <div class="text-m is--price"><span class="is--dimmed">or</span> <strong>$9.99</strong> <span class="is--dimmed">/monthly</span></div>
         </div>
         <div class="pricing__cta">
            <button type="button"  id="getstart2" class="button is--pricing w-inline-block"   data-toggle="modal" data-target="#self-paid-popup3">
               <div>Get started</div>
            </button>
             <div id="self-paid-popup3" class="modal fade" role="dialog" >
               <div class="modal-dialog">
                  <!-- Modal content-->
                  <div class="modal-content">
                     <span class="close">&times;</span>
                     <div class="modal-header">
                        <h4>Register</h4>
                     </div>
                     <div class="modal-body">
                        <form id="form_data_self_paid" method="post">
                           <div class="row input-center">
                              <div class="col-75">
                                 <input type="text" name="email" id="email_self_paid" class="form-control" placeholder="Email">
                                 <div id="error_1_self_paid" class="text-danger"></div>
                                 <div id="error_1_1_self_paid" class="text-danger"></div>
                              </div>
                           </div>
                           <div class="row input-center">
                              <div class="col-75">
                                 <input type="password" name="password" id="password_self_paid" class="form-control type_password" placeholder="Password">
                                 <div id="error_2_self_paid" class="text-danger"></div>
                                 <div id="error_2_1_self_paid" class="text-danger"></div>
                              </div>
                           </div>
                           <div class="row input-center">
                              <div class="col-75">
                                 <input type="password" name="confirmpassword" id="confirmpassword_self_paid" class="form-control type_password" placeholder="Confirm Password">
                                 <div id="error_3_self_paid" class="text-danger"></div>
                              </div>
                           </div>
                           <div class="row input-center">
                              <div class="col-75">
                                 <select name="premium_type" id="premium_type"class="form-control" >
                                    <option value="0"> Please choose premium type </option>
                                    <?php 
                                       require 'dbconfig.php';
                                           $conn = db_connect();
                                           $sql = "SELECT id,plan_type,amount,duration_type FROM plans where plan_type=1 and duration_type!=3";
                                           $exe = $conn->query($sql);
                                           $dataResults = $exe->fetch_all(MYSQLI_ASSOC);
                                           foreach ($dataResults as $dataResult) {
                                         {?>
                                    <option value="<?php echo $dataResult['duration_type'];?>">$<?php echo $dataResult['amount'];?> /<?php 
                                       if($dataResult['duration_type']==1){echo 'Monthly';} else if($dataResult['duration_type']==2){echo 'Yearly';}  ?> </option>
                                    <?php }  }?>
                                 </select>
                                 <div id="error_4_self_paid" class="text-danger"></div>
                              </div>
                           </div>
                           <div class="row">
                              <label style="display: block">&nbsp; &nbsp;</label>
                              <button type="button" id="submit_self_paid"  class="btn btn-primary btn-block button-form selfpaidbtn" style="padding: 6px 12px;">Save</button>
                              <div id="overlay2">
                                 <img src="loading.gif" loading="lazy" alt="Loading" width="40"/>
                                 Loading...
                              </div>
                           </div>
                           <div class="row">
                              <label style="display: block">&nbsp; &nbsp;</label> 
                              <a class="btn btn-success btn-block" style="color:white;display:none;" onclick="generate_fees(6)"  id="generate_fees">Generate Fees</a>
                              <div id="success_self_paid" class="text-success" style="padding:15px;"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <div class="features-list">
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Unlimited trips</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Add and Remove clients</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Update client's address</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">IRS Compliant Data report</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Web dashboard</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">In-depth reports</div>
               </div>
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Email Support</div>
               </div>
            </div>
            <div class="pricing__cta-bottom is--dimmed">
            </div>
         </div>
      </div>
   </div>
</div>