
    <!-- CONTENT START -->
    
<div class="content">
    <div class="wrap">
    	<?php echo $this->Session->flash(); 
        if(isset($avalibilty_status)){?>
           <div class="clearfix">
                <section class="form-layout">
                <h2> <span>Delivery</span> </h2>
                <h4> <?php if($avalibilty_status['status']=="Holiday"){?>
                        <span><?php echo $avalibilty_status['description'];?></span>
                    <?php }elseif($avalibilty_status['status']=="WeekDay"){?>
                        <span><?php echo "WeekDay Off";?></span>
                    <?php }elseif($avalibilty_status['status']=="Timeoff"){?>
                        <span><?php echo "Please visit us between"." ".date('H:i:s',$avalibilty_status['start_time'])." ". "and"." ".date('H:i:s',$avalibilty_status['end_time']) ;?></span>
                    <?php }?>
                </h4>
                </section>>
            </div>
        <?php  }else{ ?>
        	<?php echo $this->Form->create('Users', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'name'=>'Form1','id'=>'GuestDeliverOrdering','url'=>array('controller'=>'users','action'=>'guestOrdering')));?>
            	<div class="clearfix">
                	<section class="form-layout delivery-form">
                    	<h2> <span>Delivery</span> </h2>
                        <dl>
                            <dt></dt>
                            <dd>
                                <input type="radio" name="data[Order][type]"value="3" checked="checked"> Delivery
                            </dd>
                            
                            <dt><label>Name <em>*</em></label></dt>
                            <dd> <?php echo $this->Form->input('DeliveryAddress.name_on_bell',array('type'=>'text','class'=>'inbox','label'=>false,'div'=>false,'placeholder'=>'Enter Your Name'));
                                echo $this->Form->error('DeliveryAddress.name_on_bell');?>
                            </dd>
                            
                            <dt><label>Adress <em>*</em></label></dt>
                            <dd>
                                <?php echo $this->Form->input('DeliveryAddress.address',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your Address','label'=>false,'div'=>false));
                                echo $this->Form->error('DeliveryAddress.address');?>
                            </dd>
                           
                            <dt><label>City <em>*</em></label></dt>
                            <dd>
                                <?php echo $this->Form->input('DeliveryAddress.city',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your City','maxlength'=>'50','label'=>false,'div'=>false));         
                                echo $this->Form->error('DeliveryAddress.city');?>
                            </dd>
                            
                            <dt><label>Start <em>*</em></label></dt>
                            <dd>
                                <?php echo $this->Form->input('DeliveryAddress.state',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your State','maxlength'=>'50','label'=>false,'div'=>false,'autocomplete' => 'off'));            
                                echo $this->Form->error('DeliveryAddress.state'); ?>
                            </dd>
                            
                            <dt><label>Zip-Code <em>*</em></label></dt>
                            <dd>
                                <?php echo $this->Form->input('DeliveryAddress.zipcode',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your Zip-Code','maxlength'=>'6','label'=>false,'div'=>false));            
                                echo $this->Form->error('DeliveryAddress.zipcode');?>
                            </dd>
                            
                            <dt><label>Phone Number <em>*</em></label></dt>
                            <dd><?php echo $this->Form->input('DeliveryAddress.phone',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your Phone Number','maxlength'=>'12','label'=>false,'div'=>false));            
                                echo $this->Form->error('DeliveryAddress.phone');?>
                            </dd>
                            
                            <dt><label>Email <em>*</em></label></dt>
                            <dd><?php echo $this->Form->input('DeliveryAddress.email',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your Email','maxlength'=>'50','label'=>false,'div'=>false));            
                                echo $this->Form->error('DeliveryAddress.email');?>
                            </dd>
                            </dl>
                            <?php  echo $this->Form->input('Delivery.type', array('value' => 0,'type'=>'hidden'));?>
                            
                        
                    </section>
                    
                    <section class="form-layout pickup-form">
                    	<h2> <span>Pickup</span> </h2>
                            <dl>
                            <dt></dt>
                            <dd>
                                <input type="radio" name="data[Order][type]" value="2"> PickUp
                            </dd>
                            </dl>
                             <div class="address">
	                        <address class="inbox">
                            	<h3><?php echo $store_data['Store']['store_name'];?></h3>
                                
                                <p> <?php echo $store_data['Store']['address'];?> <br> <?php echo $store_data['Store']['city'].' '.$store_data['Store']['state'].' '.$store_data['Store']['zipcode'];?> <br> <?php echo $store_data['Store']['phone'];?></p>
                            </address>
                                 </div>
                            <dl>
                           
                            
                            <dt><label>Name <em>*</em></label></dt>
                            <dd> <?php echo $this->Form->input('PickUpAddress.name_on_bell',array('type'=>'text','class'=>'inbox','label'=>false,'div'=>false,'placeholder'=>'Enter Your Name'));
                                echo $this->Form->error('PickUpAddress.name_on_bell');?>
                            </dd>
                            
                            <dt><label>Phone Number <em>*</em></label></dt>
                            <dd><?php echo $this->Form->input('PickUpAddress.phone',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your Phone Number','maxlength'=>'12','label'=>false,'div'=>false));            
                                echo $this->Form->error('PickUpAddress.phone');?>
                            </dd>
                            
                            <dt><label>Email <em>*</em></label></dt>
                            <dd><?php echo $this->Form->input('PickUpAddress.email',array('type'=>'text','class'=>'inbox','placeholder'=>'Enter Your Email','maxlength'=>'50','label'=>false,'div'=>false));            
                                echo $this->Form->error('PickUpAddress.email');?>
                            </dd>
                            
                            <dt><label>Pick Up Time</label></dt>
                                <dd>
                                    <?php echo $this->Form->input('PickUp.pickup_time_now', array('class'=>'inbox','options' =>$time_range,'empty' =>'(choose one)','label'=>false));
                                    echo $this->Form->error('PickUp.pickup_time_now'); ?>
                                </dd> 
                            </dl> 
                            <?php  echo $this->Form->input('PickUp.type', array('value' => 0,'type'=>'hidden'));?>
                            
                    </section>
                    <button type="submit" class="btn green-btn"> <span>PrOceed as Guest</span> </button>
                </div>
            <?php echo $this->Form->end();
            }?>
        </div>
    </div>
       

<script>
    $("input[name='data[Order][type]']:radio").change(function() { 
        validator.resetForm();
        var result = $("input[name='data[Order][type]']:checked").val();
        if(result == 2){
            $(".pickup-form input").prop("disabled", false);
            $(".delivery-form input").prop("disabled", true);
            $(".delivery-form input[name='data[Order][type]']").prop("disabled", false);
            $(".pickup-form select").prop("disabled", false);
        } else {
            $(".pickup-form input").prop("disabled", true);
            $(".delivery-form input").prop("disabled", false);
            $(".pickup-form input[name='data[Order][type]']").prop("disabled", false);
            $(".pickup-form select").prop("disabled", true);
        }
    });
    
    var validator = $("#GuestDeliverOrdering").validate({
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
            "data[DeliveryAddress][email]": { 
                required: true,
                email:true,
                minlength:10,
                maxlength:50,
            },  
            "data[PickUpAddress][name_on_bell]": {
                required: true,
                lettersonly: true,  
            },
            "data[PickUpAddress][email]": { 
                required: true,
                email:true,
                minlength:10,
                maxlength:50,
            },
            "data[PickUpAddress][phone]": { 
                required: true,
                number:true,
                minlength:10,
                maxlength:11,
            }
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
             "data[DeliveryAddress][email]": {
                required: "Please enter email",
                email:"Please enter valid email"
            },
            "data[PickUpAddress][name_on_bell]": {
                required: "Please enter your Name",
                lettersonly:"Only alphabates allowed",
            },
             "data[PickUpAddress][phone]": {
                required: "Please enter phone number.",
                number:"Only numbers are allowed"
            },
             "data[PickUpAddress][email]": {
                required: "Please enter email",
                email:"Please enter valid email"
            }
        }
    });
    
    $(document).ready(function(){   
        $(".pickup-form input").prop("disabled", true);
        $(".pickup-form input[name='data[Order][type]']").prop("disabled", false);
        $(".pickup-form select").prop("disabled", true);
    });

</script>
