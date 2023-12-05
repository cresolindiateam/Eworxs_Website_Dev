<div style="display:none;"  class="personal">
   <div class="pricing">
      <div class="pricing__content">
         <div class="pricing__header">
            <div class="pricing__title">
               <h1 class="pricing__h">Self Employed </h1>
               <div class="plan-badge is--lite">
                  <div>Basic</div>
               </div>
            </div>
            <div class="text-l is--dimmed is--pricing">Perfect for starting to move off 
            </div>
         </div>
         <div class="pricing__cta">
            <button type="button" id="getstart1" class="button is--pricing is--secondary w-inline-block" data-toggle="modal" data-target="#fee-popup3">
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
                        <form id="form_data" method="post">
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                    <div id="error_1" class="text-danger"></div>
                                    <div id="error_1_1" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" id="password" class="form-control">
                                    <div id="error_2" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <label style="display: block">&nbsp; &nbsp;</label>
                                 <button type="button" id="submit"  class="btn btn-primary btn-block" style="padding: 6px 12px;">Save</button>
                              </div>
                              <div id="success" class="text-success" style="padding:15px;"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
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
                           <div class="row">
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" id="email_self_paid" class="form-control">
                                    <div id="error_1_self_paid" class="text-danger"></div>
                                    <div id="error_1_1_self_paid" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" id="password_self_paid" class="form-control">
                                    <div id="error_2_self_paid" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Premium Type</label>
                                    <select name="premium_type" id="premium_type"class="form-control" >
                                       <option value="0"> Please choose premium type </option>
                                       <option value="1">$9.99 /month </option>
                                       <option value="2">$99.99 /annum</option>
                                    </select>
                                    <div id="error_3" class="text-danger"></div>
                                 </div>
                              </div>
                              <div class="col-md-3">
                                 <label style="display: block">&nbsp; &nbsp;</label>
                                 <button type="button" id="submit_self_paid"  class="btn btn-primary btn-block" style="padding: 6px 12px;">Save</button>
                              </div>
                              <div class="col-md-3">
                                 <label style="display: block">&nbsp; &nbsp;</label> 
                                 <a class="btn btn-success btn-block" style="color:white;display:none;" onclick="generate_fees(6)"  id="generate_fees">Generate Fees</a>
                              </div>
                              <div id="success_self_paid" class="text-success" style="padding:15px;"></div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <h2 class="h2-2 is--price" style="font-size:28px;">0$</h2>
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
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">Email Support</div>
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
            <div class="text-l is--dimmed is--pricing">Perfect for starting to move off</div>
         </div>
         <div class="pricing__cta">
            <button type="button"  id="getstart2" class="button is--pricing w-inline-block"   data-toggle="modal" data-target="#self-paid-popup3">
               <div>Get started</div>
            </button>
            <br>
            <h2 class="h2-2 is--price" style="font-size: 28px;">$9.99</h2>
            <div class="price-yr">/month</div>
            &nbsp;
            <h2 class="h2-2 is--price" style="font-size: 28px;">$99.99</h2>
            <div class="price-yr">/annum</div>
            <div class="features-list">
               <div class="feature-item">
                  <img src="img/checkbox.svg" loading="lazy" alt="" class="feature-checkbox">
                  <div class="text-l is--dimmed">10 free trips</div>
               </div>
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