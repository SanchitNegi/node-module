 <div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
                    <?php echo $this->Session->flash(); ?>
                	<div class="inner-sml-form">
                    	
                        	<fieldset>
                            	<legend>My Delivery Address</legend>
                                <?php if($checkaddress){?>
                                <dl class="reg-wrap md-address clearfix">
                                	<dt>Name</dt>
                                    <dd><?php echo $checkaddress['DeliveryAddress']['name_on_bell'];?></dd>
                                    
                                    <dt>Address</dt>
                                    <dd><?php echo $checkaddress['DeliveryAddress']['address'];?></dd>
                                    
                                    <dt>City</dt>
                                    <dd><?php echo $checkaddress['DeliveryAddress']['city'];?></dd>
                                    
                                    <dt>State</dt>
                                    <dd><?php echo $checkaddress['DeliveryAddress']['state'];?></dd>
                                    
                                    <dt>Zipcode</dt>
                                    <dd><?php echo $checkaddress['DeliveryAddress']['zipcode'];?></dd>
                                    
                                    <dt>Ph no.</dt>
                                    <dd><?php echo $checkaddress['DeliveryAddress']['phone'];?></dd>
                                </dl>
                                
                                <div class="clearfix"></div>
                                <?php echo $this->Html->link('Edit',array('controller'=>'users','action'=>'updateAddress',$encrypted_storeId,$encrypted_merchantId),array('class'=>'button-link'));?>
                               <?php }else{?>
                                <dl class="delivery-address-book">
                                	
                                    <dt>No Address is added yet, please add your delivery address</dt>
                                    <dd><?php echo $this->Html->link('Add Address',array('controller'=>'users','action'=>'addAddress',$encrypted_storeId,$encrypted_merchantId),array('class'=>'button-link'));?></dd>

                                    
                                </dl>
                                <?php }?>
                            </fieldset>
                            <div class="btm-input-wrap clearfix">
                                 <?php  if(($checkaddress) && ($this->Session->check('Order.order_type'))){?> 
                               <?php echo $this->Form->create('DeliveryAddress', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'Deliveryaddress','url'=>array('controller'=>'users','action'=>'ordercatCheck',$orderId)));
                            	  echo $this->Form->type('DeliveryAddress.id',array('type'=>'hidden','value'=>$checkaddress['DeliveryAddress']['id']));?>
                                 <?php
                     
                                    $options = array(
                                    '0' => 'Now',
                                    '1' => 'Pre-Order'
                                    );
                                    
                                    $attributes = array(
                                    'legend' => false,
                                    'value' => 0,
                                    'class'=>'radio-wrap'
                                    );

                            echo $this->Form->radio('type', $options, $attributes);?>
                                
                                
                               
                                <div class="clearfix"></div>
				  <dl class="clearfix reg-wrap pickup_time">
                                 
				    <dt>Pick Up Time</dt>
                                        <dd>
					  <?php 
                                          echo $this->Form->input('Store.pickup_time', array('class'=>'pickup usrname-input','options' => $time_range,'empty' =>'(choose one)','label'=>false));
                                          echo $this->Form->error('Store.pickup_time');
					    ?>
					  
					</dd>
					
                                   
					     <dt>Pick Up Date</dt>
                                    <dd>
                                     <?php 
					  echo $this->Form->input('Store.pickup_date',array('type'=>'text','class'=>'passwrd-input txtbx date_select','placeholder'=>'Date','label'=>false,'div'=>false,'required'=>true,'readOnly'=>true));
					  echo $this->Form->error('Store.pickup_date');
					  ?>
				    </dd>
					
					
                                    
				</dl>
                                
                                    <input type="submit" value="Deliver here">
                                
                                
                                   <?php
				//echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/users/customerDashboard/$encrypted_storeId/$encrypted_merchantId'",'class' => 'float-left btn-cancel')); 
				?>
                              <?php  }?>  
                            </div>
                       
                    </div>
                </div>
            </div><!-- /main content end -->
        </div><!-- /right side end -->
        <div class="clearfix"></div>
	<script>
	       $(document).ready(function(){
			      
                $('.date_select').datepicker({
                  
                  dateFormat: 'mm-dd-yy',
                   minDate: 1,
                  
              });
		
		   $("#Deliveryaddress").validate({
                rules: {
                    "data[Store][pickup_time]": {
                        required: true,
                    
                    },
                    "data[Store][pickup_date]": {
                        required: true,
                    },
                },
                messages: {
                    "data[Store][pickup_time]": {
                        required: "Please select pickup time"
                    },
                    "data[Store][pickup_date]": {
                        required: "Please enter your pickup date",
                    
                    }
                }
            });
	           $('.show_time').css('display','none');
            $('.pickup_date').css('display','none');
            $('.pickup_time').css('display','none');
            $("#DeliveryAddressType1").on('click',function(){ // To Show
                $('.show_time').css('display','block');
                $('.pickup_date').css('display','block');
                $('.pickup_time').css('display','block');
            });
            $("#DeliveryAddressType0").on('click',function(){// To hide
                $('.show_time').css('display','none');
                $('.pickup_date').css('display','none');
                $('.pickup_time').css('display','none');
            });
	       });
               
	</script>