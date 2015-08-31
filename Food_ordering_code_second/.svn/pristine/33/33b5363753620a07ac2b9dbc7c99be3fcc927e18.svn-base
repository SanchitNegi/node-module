<?php ?>
  <div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
                	<div class="inner-sml-form online-order-frame">
                    	
                        	<div class="online-order clearfix">
	                        	<fieldset class="single-col">
                                    <legend>Order Overview</legend>
                                    
                                    <div class="clearfix">
                                    	<div class="order-overview-lt">
					  
                                        	<h2>Order Name</h2>
                                        	<div class="responsive-table">
                                                <table class="table table-striped">
						  <?php
							$total_sum=0;
							$ordertype="";
							
							foreach($finalItem as $item){
							    
							     $ordertype=$item['order_type'];
							    $total_sum=$total_sum+$item['Item']['final_price'];
							    
							    
							    ?>
							    <tr>
							    <td>Item (<?php echo $item['Item']['quantity'];?> X <?php echo $item['Item']['name'];?>)<br/><?php echo @$item['Item']['OfferItemName'];?></td>
							    <td class="text-center">$<?php echo number_format($item['Item']['final_price'],2);?></td>
							   
							    </tr>
							
						       <?php  }?>
					    <?php
                                               if(isset($_SESSION['delivery_fee']) && $ordertype==3 && ($_SESSION['delivery_fee']>0)){
                                                  $total_sum=$total_sum+$this->Session->read('delivery_fee');
                                                ?>
                                                
                                                <tr><td class="total">Delivery Fee</td>
                                                <td class="total text-center">$<?php echo number_format($this->Session->read('delivery_fee'),2);?></td></tr>
                                                <?php }?>
                                                 <?php
						 //echo $_SESSION['service_fee'];die;
                                               if(isset($_SESSION['service_fee']) && ($_SESSION['service_fee']>0)){
                                                  $total_sum=$total_sum+$this->Session->read('service_fee');
                                                ?>
                                                
                                                <tr><td class="total">Service Fee</td>
                                                <td class="total text-center">
					  $<?php echo number_format($this->Session->read('service_fee'),2);?></td></tr>
                                                <?php }?> 
                                                
                                                <tr><td class="total">Discount</td>
                                                <td class="total text-center">
                                                $<?php if(isset($_SESSION['Coupon'])){ 
                                                    if($_SESSION['Coupon']['Coupon']['discount_type'] == 1){ // Price
                                                        echo $discount_amount = $_SESSION['Coupon']['Coupon']['discount'];
                                                        $total_sum= $total_sum- $discount_amount;
                                                    } else { // Percentage
                                                        echo $discount_amount = $total_sum *$_SESSION['Coupon']['Coupon']['discount']/100;
                                                        $total_sum=$total_sum-$discount_amount;

                                                    } } else { echo $discount_amount = 0;
                                                    $total_sum=$total_sum-$discount_amount;
                                                    
                                                    }
                                                    $_SESSION['Discount'] = $discount_amount;
                                               
                                                   ?>
                                                
                                            	</tr><tr><td class="total">Total</td>
                                                <td class="total text-center">$<?php echo number_format($total_sum,2);?></td>
                                            </tr>
                                            
					  </table>
                                            </div>
                                            	<?php echo $this->Form->create('Payment',array('controller'=>'payments','action'=>'paymentSection'));?>
                                            <div class="special-comment clearfix">
                                            
						<span>Special Comment</span>
                                                <div><?php echo $this->Form->input('User.comment',array('type'=>'textarea','label'=>false));?>
</div>
                                            </div>
                                            
                                            <div class="payment-method">
                                            	<label><input type="radio" name="payment" checked="checked" value=1 class="credit"> <span>Pay by credit card</span> </label>
                                                <?php if(AuthComponent::User()){ ?>
                                                    <label><input type="radio" name="payment" value=2 class="cod"> <span>Cash on Delivery</span> </label>
                                                <?php } ?>
                                                    <div class="creditcard-payment">
							
					  <?php echo $this->Session->flash();?>
							<dl class="reg-wrap clearfix">
							<dt>Card Number</dt>
							<dd>
								      <?php 
								    echo $this->Form->input('cardnumber',array('type'=>'text','class'=>'usrname-input txtbx','label'=>false,'div'=>false,'placeholder'=>'Card Number'));
						     echo $this->Form->error('cardnumber');
								       ?>
						      </dd>
							<dt>CVV</dt>
							<dd>
								      <?php 
								    echo $this->Form->input('cvv',array('type'=>'text','class'=>'usrname-input txtbx','label'=>false,'div'=>false,'placeholder'=>'CVV'));
						
								       ?>
						      </dd>
							<dt>Expiry-Date</dt>
							<dd>
								      <?php 
								    echo $this->Form->input('expiryDate',array('type'=>'text','class'=>'usrname-input txtbx date_select','label'=>false,'div'=>false,'placeholder'=>'Expiry Date(mmyy)'));
						
								       ?>
						      </dd>
					              </dl>
							
							
							
							
							
					    </div>
					    
					    
					    </div>
                                            
                                            <div class="button-box"> <input class="btn btn-primary" type="submit" value="Proceed to Payment" />
					    <?php
					   				//echo $this->Form->input('Continue Shopping', array('type' => 'button','onclick'=>"window.location.href='/products/items/$encrypted_storeId/$encrypted_merchantId'",'class' => 'btn btn-default','label'=>false,'div'=>false)); 
          
					    //<input class="btn btn-default" type="button" value="Continue Section" />
					    ?>
					    <input class="btn btn-default" type="button" value="Continue Shopping" onclick="window.location.href='/products/items/<?php echo $encrypted_storeId;?>/<?php echo $encrypted_merchantId;?>';"/>
					    </div>
                               </form>         
				    </div>
                                        
                                        <?php if($delivery_address){?>
					<div class="order-overview-rt">
					  	<?php
					
					 
					  ?>
                                        	
                                                <?php 
                                                if(AuthComponent::User()){ ?>
                                                    <h2>Delivery Address</h2>
                                                    <address>
                                                    <?php foreach($delivery_address as $result){
                                                        echo $result['name_on_bell'].'<br>'.$result['address']
                                                        .'<br>'.$result['city'].', '.$result['state']
                                                        .','.$result['zipcode'].'<br>'.$result['phone']; 
                                                    }?></address>
                                               <?php } else {
                                                    if($_SESSION['Order']['order_type'] == 3){?>
                                                         <h2>Delivery Address</h2>
                                                    <address>
                                                    <?php foreach($delivery_address as $result){
                                                        echo $result['email'].'<br>'.$result['name_on_bell'].'<br>'.$result['address']
                                                        .'<br>'.$result['city'].', '.$result['state']
                                                        .','.$result['zipcode'].'<br>'.$result['phone']; 
                                                    }?></address>
                                                <?php } else { ?>
                                                     <h2>Your Information</h2>
                                                    <address>
                                                   <?php foreach($delivery_address as $result){
                                                        echo $result['email'].'<br>'.$result['name_on_bell'].'<br>'.$result['phone']; 
                                                    }?></address>
                                                <?php 
                                                }}?>
							 
                                            
					    
                                        </div>
					<?php }?>
                                    </div>
                                </fieldset>
                            </div>
                      
                    </div>
                </div>
            </div><!-- /main content end -->
	      <script>
			  
    $('.cod').click(function(){
	     // $("#UserPassword").prop('disabled', true);
	     
	      $('.creditcard-payment').css('display','none');
	      
	      
    });
     $('.credit').click(function(){
	     // $("#UserPassword").prop('disabled', true);
	     
	      $('.creditcard-payment').css('display','block');
	      
	      
    });
    $('.date_select').datepicker({
                  
                  dateFormat: 'mmy',
                   minDate: 1,
                  
              });
    
    
    $("#PaymentPaymentSectionForm").validate({
            rules: {
                "data[Payment][cardnumber]": {
                    required: true,
		     number:true
		    },
                "data[Payment][cvv]": {
                    required: true,
		    number:true
		   
                   
                },
                "data[Payment][expiryDate]": {
                    required: true,
		    number:true,
		    maxlength:4,
		    minlength:4
                    
                   
                }
            },
            messages: {
                "data[Payment][cardnumber]": {
                    required: "Card number is required",
		    number:"Only numbers are allowed",
                   
                },
                "data[User][cvv]": {
                    required: "CVV is required",
		    number:"Only numbers are allowed",
	            
                },"data[User][expiryDate]": {
                    required: "Expiry date is required",
		    number:"Only numbers are allowed",
	            
                }
               
            }
    });
</script>