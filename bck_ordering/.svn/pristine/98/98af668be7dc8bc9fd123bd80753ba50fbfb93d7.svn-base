 <div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
                	<div class="inner-sml-form">
                    	
                        	<fieldset>
                            	<legend>Store Address</legend>
                                <address>
                                	<strong><?php echo $store_data['Store']['store_name'];?></strong><br>
                                    <?php echo $store_data['Store']['address'];?><br>
                                   <?php echo $store_data['Store']['city']." ".$store_data['Store']['state']." ".$store_data['Store']['zipcode'];?><br>
                                    <?php echo $store_data['Store']['phone'];?>
                                </address>
                                <div class="clearfix"></div>
                                <div class="btm-input-wrap clearfix">
                                    <label class="radio-wrap">
                                         <?php echo $this->Form->create('DeliveryAddress', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'Deliveryaddress','url'=>array('controller'=>'users','action'=>'ordercatCheck',$orderId)));
                  echo $this->Form->type('Store.id',array('type'=>'hidden','value'=>$store_data['Store']['id']));
            ?>
                                        <?php
                    
                                                        if(isset($time_range)){
                                                              $options = array(
                                                        '0' => 'Now',
                                                        '1' => 'Pre-Order'
                                                        );
                                                        
                                                        $attributes = array(
                                                        'legend' => false,
                                                        'value' => 0
                                                        );
                                                        }else{
                                                              $options = array(
                                                        '0' => 'Now',
                                                        
                                                        );
                                                        
                                                        $attributes = array(
                                                        'legend' => false,
                                                        'value' => 0
                                                        );
                                                        }
                                                 
                          

                                                    echo $this->Form->radio('type', $options, $attributes);?>
                     
                                        
                                        
                                    </label>
                                   
                                    <div class="clearfix"></div><br>
                                     <dl class="clearfix reg-wrap pickup_time">
                                 
				    <dt>Pick Up Time</dt>
                                        <dd>
					  <?php 
                                          echo $this->Form->input('Store.pickup_time', array('class'=>'pickup','options' => $time_ranges,'empty' =>'(choose one)','label'=>false,'type'=>'select'));
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
				       
				       
				       
				       <dl class="clearfix reg-wrap pickup_time_now">   
                                 
				    <dt>Pick Up Time</dt>
                                        <dd>
					  <?php 
                                          echo $this->Form->input('Store.pickup_time_now', array('class'=>'pickup','options' =>$time_range,'empty' =>'(choose one)','label'=>false));
                                          echo $this->Form->error('Store.pickup_time_now');
					    ?>
					  
					</dd>
					
                                   
					
					
                                    
				</dl>
                                </div>
                                  <?php echo $this->Form->submit('Deliver Here');?>
                                  <?php 
				echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/users/customerDashboard/$encrypted_storeId/$encrypted_merchantId'",'class' => 'float-left btn-cancel')); 
				?>
                                      <?php  echo $this->Form->end();?>
                            </fieldset>
                        
                    </div>
                </div>
            </div><!-- /main content end -->
        </div><!-- /right side end -->
        <div class="clearfix"></div>
        <script>
    $(document).ready(function(){
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
         
            $('.date_select').datepicker({
                  
                  dateFormat: 'mm-dd-yy',
                   minDate: 1,
                  
              });
            $('.show_time').css('display','none');
            $('.pickup_date').css('display','none');
            $('.pickup_time').css('display','none');
            $("#DeliveryAddressType1").on('click',function(){ // To Show
                $('.show_time').css('display','block');
                $('.pickup_date').css('display','block');
                $('.pickup_time').css('display','block');
		$('.pickup_time_now').css('display','none');
		
		
            });
            $("#DeliveryAddressType0").on('click',function(){// To hide
	      
                $('.pickup_time').css('display','none');
	        $('.show_time').css('display','none');
                $('.pickup_date').css('display','none');
                $('.pickup_time').css('display','none');
                $('.pickup_time_now').css('display','block');
		
		
            });
    });
   
</script>