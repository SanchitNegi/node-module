 <div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
		  <?php echo $this->Session->flash(); ?>
                	<div class="inner-sml-form">
                    <?php echo $this->Form->create('UsersProfile', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'UsersProfile'));
                          echo $this->Form->input('User.role_id',array('type'=>'hidden','value'=>$roleId));
                      ?>
                        	<fieldset>
                            	<legend><?php echo __('My Profile');?></legend>
                                <?php echo $this->Html->link(__('My Orders & Favourite'),array('controller'=>'orders','action'=>'myOrders',$encrypted_storeId,$encrypted_merchantId),array('class'=>'order-btn'));?>
                                <?php echo $this->Html->link(__('My Coupons'),array('controller'=>'coupons','action'=>'myCoupons',$encrypted_storeId,$encrypted_merchantId),array('class'=>'order-btn coupon-btn'));?>
                                <dl class="reg-wrap">
                                	<dt>Salutation</dt>
                                    <dd>
				      <?php 
                                       echo $this->Form->input('User.salutation',array('type'=>'select','options'=>array('Mr.'=>'Mr.','Ms.'=>'Ms.','Mrs'=>'Mrs'),'class'=>'usrname-input','label'=>false,'div'=>false));
                                       ?>
                                    </dd>
                                    
                                    <dt>First Name</dt>
                                    <dd>
				      <?php
				       echo $this->Form->input('User.fname',array('type'=>'text','class'=>'usrname-input txtbx','placeholder'=>'Enter Your First Name','maxlength'=>'50','label'=>false,'div'=>false));
				        echo $this->Form->error('User.fname');
				      ?>
				      
				    </dd>
                                    
                                    <dt>Last Name</dt>
                                    <dd>
				      <?php
					echo $this->Form->input('User.lname',array('type'=>'text','class'=>'passwrd-input txtbx','placeholder'=>'Enter Your Last Name','maxlength'=>'50','label'=>false,'div'=>false));         
					echo $this->Form->error('User.lname');
				      ?>
				      
				    </dd>
                                    
                                    <dt>Email</dt>
                                    <dd>
				      <?php 
					echo $this->Form->input('User.email',array('type'=>'text','class'=>'passwrd-input email txtbx','placeholder'=>'Enter Your Email','maxlength'=>'50','label'=>false,'div'=>false,'required'=>true,'autocomplete' => 'off','readOnly'=>true));            
					echo $this->Form->error('User.email');
				      ?>
				    </dd>
                                    
                                    <dt>Mobile Phone</dt>
                                    <dd>
				      <?php
					echo $this->Form->input('User.phone',array('type'=>'text','class'=>'passwrd-input txtbx','placeholder'=>'Mobile Phone','maxlength'=>'12','label'=>false,'div'=>false,'required'=>true));            
					echo $this->Form->error('User.phone');
				      ?>
				    </dd>
                                    
                                    <dt>DOB</dt>
                                    <dd>
				      <?php 
					echo $this->Form->input('User.dateOfBirth',array('type'=>'text','class'=>'passwrd-input date_select txtbx','placeholder'=>'Date of Birth','maxlength'=>'12','label'=>false,'div'=>false,'required'=>true,'readOnly'=>true));
					echo $this->Form->error('User.dateOfBirth');
				      ?>
				      
				    </dd>
                                    
                                    <dt>&nbsp;</dt>
                                    <dd class="checkbox-list">
                                        <span class="user-optn"> <?php echo $this->Form->input('User.is_newsletter',array('type'=>'checkbox','label'=>'Opt for newsletter notification'));?> </span>
                                        <span class="user-optnn"><?php echo $this->Form->input('User.is_emailnotification',array('type'=>'checkbox','label'=>'Opt for email notification'));?></span>
                                        <span class="user-optn"><?php echo $this->Form->input('User.is_smsnotification',array('type'=>'checkbox','label'=>'Opt for SMS notification'));?></span>
                                    </dd>
                                    
                                </dl>
                                <div class="clearfix"></div>
                                    
				<h3>	      	<?php echo $this->Form->input('User.changepassword',array('type'=>'checkbox','class'=>'passwrd-input','placeholder'=>'Date of Birth','maxlength'=>'12','label'=>'Change Password'));?>
</h3>
                                <div class="change-pass-wrap clearfix change_password">
                                	
                                    <dl class="clearfix reg-wrap">
                                    	<dt>Old Password</dt>
                                        <dd>
					  <?php 
					  echo $this->Form->input('User.oldpassword',array('type'=>'password','class'=>'passwrd-input txtbx','placeholder'=>'Old Password','maxlength'=>'20','label'=>false));
                                          echo $this->Form->error('User.oldpassword');
					    ?>
					  
					</dd>
                                        
                                        <dt>New Password</dt>
                                        <dd>
					  <?php
					  
					  echo $this->Form->input('User.password',array('type'=>'password','class'=>'passwrd-input txtbx','placeholder'=>'New Password','maxlength'=>'20','label'=>false,'value'=>'',));
					  echo $this->Form->error('User.password');
					  ?>
					</dd>
                                        
                                        <dt>Confirm Password</dt>
                                        <dd>
					    <?php
					       echo $this->Form->input('User.password_match',array('type'=>'password','class'=>'passwrd-input txtbx','placeholder'=>'Confirm Password','maxlength'=>'20','label'=>false));
                                               echo $this->Form->error('User.password_match');
					    ?>
					</dd>
                                    </dl>
                                	<!--<input type="button" value="Cancel">-->
                                
                                </div>
				 <div class="change-pass-wrap clearfix">
                                	
                                    <dl class="clearfix reg-wrap">
                                    	<dt>&nbsp;</dt>
                                        <dd>
					 <dd>
                                <?php echo $this->Form->submit('Save',array('class'=>'float-left'));?>
				<?php
				echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/users/customerDashboard/$encrypted_storeId/$encrypted_merchantId'",'class' => 'float-left btn-cancel')); 
				?>
					  
					</dd>
                                        
                                        
                                    </dl>
                                	<!--<input type="button" value="Cancel">-->
                                
                                </div>
				<?php //echo $this->Form->submit('Save');?>
                            </fieldset>
                        
                    </div>
                </div>
            </div><!-- /main content end -->
        </div><!-- /right side end -->
        <div class="clearfix"></div>
        
	<script>
    $(document).ready(function() {
      
      		 $('#UserPassword').css('display','none');
		 $("#UserPassword").prop('disabled', true);

      $('.change_password').css('display','none');
      
      
      $('#UserChangepassword').on('change',function() {
	  
	    
	    if($(this).prop('checked')){
	       $('.change_password').css('display','block');
	       $('#UserPassword').css('display','block');
	       $("#UserPassword").prop('disabled', false);
	     }else{
	        $('.change_password').css('display','none');
		 $('#UserPassword').css('display','none');
		 $("#UserPassword").prop('disabled', true);
	     }
	    
	});
	 $('.date_select').datepicker({
	       
	       dateFormat: 'mm-dd-yy',
	        changeMonth: true,
            changeYear: true,
	    yearRange: '1950:2015',
	       
	   });
	    $("#UsersProfile").validate({
            rules: {
                "data[User][fname]": {
                    required: true,
                    lettersonly: true, 
                },
                 "data[User][lname]": {
                    required: false,
                    lettersonly: true, 
                },
                 "data[User][email]": {
                    required: true,
                    email: true
                
                },
                "data[User][phone]": { 
                required: true,
                number:true,
                minlength:10,
                maxlength:11,
                
                },
                "data[User][password]": {
                    required: true,
                    minlength:8,
		    alphanumeric:true,
                    maxlength:20,
                },
		
                "data[User][oldpassword]": {
                    required: true,
                    minlength:8,
		    alphanumeric:true,
                    maxlength:20,
                },
                 "data[User][password_match]": { 
                required: true, equalTo: "#UserPassword", minlength: 8,maxlength:20,alphanumeric:true,
                },
            },
            messages: {
                "data[User][fname]": {
                    required: "Please enter your first name",
                    lettersonly:"Only alphabates allowed",
                },
                 "data[User][lname]": {
                    required: "Please enter your last name",
                    lettersonly:"Only alphabates Allowed",
                },
                "data[User][email]": {
                    required: "Please enter your email id ",
                    email:"Please enter valid email id ",
                    remote:"Email Alreay exist",
                },
                 "data[User][phone]": {
                    required: "Please enter your phone number.",
                    number:"Only numbers are allowed"
                },
                
                "data[User][password]": {
                     required: "Please enter your password",
		      alphanumeric:'Only Letters,numbers,underscore allowed',
		minlength:"Please enter at least 8 characters",
		    maxlength:"Please enter no more than 20 characters",
                },
		"data[User][oldpassword]": {
                     required: "Please enter your password",
		      alphanumeric:'Only Letters,numbers,underscore allowed',
		      minlength:"Please enter at least 8 characters",
		    maxlength:"Please enter no more than 20 characters",
                },
                "data[User][password_match]": {
                    required: "Please enter your password again",
                    equalTo:"Password not matched",
		       alphanumeric:'Only Letters,numbers,underscore allowed',
		      minlength:"Please enter at least 8 characters",
		    maxlength:"Please enter no more than 20 characters",
                }
               
            }
    });
	});
</script>