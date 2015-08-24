 <div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
		  <?php echo $this->Session->flash(); ?>
                	<div class="inner-sml-form">
                    <?php
		        echo $this->Form->create('DeliveryAddress', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'Deliveryaddress'));
                          echo $this->Form->input('DeliveryAddress.id',array('type'=>'hidden','class'=>'usrname-input','div'=>false,'value'=>$addressId));
                echo $this->Form->input('DeliveryAddress.store_id',array('type'=>'hidden','class'=>'usrname-input','div'=>false,'value'=>$encrypted_storeId));
                echo $this->Form->input('DeliveryAddress.merchant_id',array('type'=>'hidden','class'=>'usrname-input','div'=>false,'value'=>$encrypted_merchantId));

                      ?>
                        	<fieldset>
                            	<legend>Update Delivery Address</legend>
                              <!--  <input type="button" value="My Orders &amp; Favourite" class="absolute-btn">-->
                                <dl class="reg-wrap clearfix">
                                	<dt>Name</dt>
                                    <dd>
				      <?php 
                                    echo $this->Form->input('DeliveryAddress.name_on_bell',array('type'=>'text','class'=>'usrname-input txtbx','label'=>false,'div'=>false,'placeholder'=>'Enter Your Name'));
                echo $this->Form->error('DeliveryAddress.name_on_bell');
                                       ?>
                                    </dd>
                                    
                                    <dt>Address</dt>
                                    <dd>
				      <?php
				       echo $this->Form->input('DeliveryAddress.address',array('type'=>'text','class'=>'usrname-input txtbx','placeholder'=>'Enter Your Address','label'=>false,'div'=>false));
                  echo $this->Form->error('DeliveryAddress.address');
				      ?>
				      
				    </dd>
                                    
                                    <dt>City</dt>
                                    <dd>
				      <?php
					 echo $this->Form->input('DeliveryAddress.city',array('type'=>'text','class'=>'passwrd-inputDefaults txtbx ','placeholder'=>'City','maxlength'=>'50','label'=>false,'div'=>false));         
                  echo $this->Form->error('DeliveryAddress.city');
				      ?>
				      
				    </dd>
                                    
                                    <dt>State</dt>
                                    <dd>
				      <?php 
					  echo $this->Form->input('DeliveryAddress.state',array('type'=>'text','class'=>'passwrd-input txtbx','placeholder'=>'State','maxlength'=>'50','label'=>false,'div'=>false,'required'=>true,'autocomplete' => 'off'));            
                  echo $this->Form->error('DeliveryAddress.state');
				      ?>
				    </dd>
                                    
                                    <dt>Zip-Code</dt>
                                    <dd>
				      <?php
					 echo $this->Form->input('DeliveryAddress.zipcode',array('type'=>'text','class'=>'passwrd-input txtbx','placeholder'=>'Zip-Code','maxlength'=>'6','label'=>false,'div'=>false,'required'=>true));            
                  echo $this->Form->error('DeliveryAddress.zipcode');

				      ?>
				    </dd>
                                    
                                    <dt>Phone Number</dt>
                                    <dd>
				      <?php 
					   echo $this->Form->input('DeliveryAddress.phone',array('type'=>'text','class'=>'passwrd-input txtbx','placeholder'=>'Phone Number','maxlength'=>'12','label'=>false,'div'=>false,'required'=>true));            
                  echo $this->Form->error('DeliveryAddress.phone');
				      ?>
				      
				    </dd>
				      <dt>&nbsp;</dt>
				 <dd>
                                <?php echo $this->Form->submit('Update',array('class'=>'float-left'));
				?>
				<?php
				echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/users/deliveryAddress/$encrypted_storeId/$encrypted_merchantId'",'class' => 'float-left btn-cancel')); 
				?>
				<?php echo $this->Form->end();
				?>
                                </dd>	
                                </dl>
				
                                 </fieldset>
                                </div>
				
                           
                        
                    </div>
                </div>
            </div><!-- /main content end -->
        </div><!-- /right side end -->
        <div class="clearfix"></div>
<script>
    $(document).ready(function() {
            $("#DeliveryAddressZipcode").focusout(function(){
                var zipCode = $(this).val();
                var CityName = $('#DeliveryAddressCity').val();
                var stateName = $('#DeliveryAddressState').val();
                var address=$("#DeliveryAddressAddress").val();
                if(zipCode && CityName  && stateName && address){
                        $.ajax({
                        type: "POST",
                        url: "/users/checkusersadddress",
                        data:  {'address':address,'zip': zipCode,'city':CityName,'state':stateName},
                        success: function(result){
                        
                        //console.log(result);
                        if(result == 1){
                        $('.error1').html("Address looks good");
                        $('.error1').css("display","inline");
                        $('.error1').css('background','#008000');
                        
                        }else{
                        $('.error1').css("display","inline");
                        $('.error1').html("Address not good");
                        $('.error1').css('background','#CC2222');
                        }
                        
                        }
                        });
                }
            });

        
        
	 
	    $("#Deliveryaddress").validate({
            rules: {
                "data[DeliveryAddress][name_on_bell]": {
                    required: true,
                    lettersonly: true, 
                  
                },
                 "data[DeliveryAddress][address]": {
                    required: true,
                  
                },
                 "data[DeliveryAddress][city]": {
                    required: true,
                    lettersonly: true, 
                },
                "data[DeliveryAddress][state]": {
                   required: true,
                    lettersonly: true, 
                },
                "data[DeliveryAddress][zipcode]": { 
                required: true,
                number:true,
                minlength:5,
                maxlength:6,
                
                },"data[DeliveryAddress][phone]": { 
                    required: true,
                    number:true,
                    minlength:10,
                    maxlength:11,
                
                },  
            },
            messages: {
                "data[DeliveryAddress][name_on_bell]": {
                    required: "Please enter your Name",
                    lettersonly:"Only alphabates allowed",
                },
                 "data[DeliveryAddress][address]": {
                    required: "Please enter your address",
                },
                "data[DeliveryAddress][city]": {
                    required: "Please enter city",
                     lettersonly:"Only alphabates allowed",
                },
                
                "data[DeliveryAddress][state]": {
                    required: "Please enter state ",
                     lettersonly:"Only alphabates allowed",
                },
                "data[DeliveryAddress][zipcode]": {
                   required: "Please enter zip-code.",
                    number:"Only numbers are allowed"
                },
                 "data[DeliveryAddress][phone]": {
                    required: "Please enter phone number.",
                    number:"Only numbers are allowed"
                },
               
            }
    });
	});
</script>
    <!--Mid Section Ends