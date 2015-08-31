<div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
                	<div class="inner-sml-form">
			<?php
			echo $this->Session->flash();
			echo $this->Form->create('Users', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'UsersRegistration'));?>
                        <fieldset class="single-col">
                            	<legend>Dine-In Reservation</legend>
                                <h2 align="center"><?php if($store){
                    echo "<span class='store_name'>".$store['Store']['store_name']."</span>";
                  }?></h2><br><br>
                                 <dl class="reg-wrap">
                                	<dt>Persons</dt>
                                    <dd>
                                    	<?php    echo $this->Form->input('Booking.number_person',array('type'=>'select','class'=>'usrname-input','options'=>$number_person,'label'=>false,'div'=>false));
                                                 echo $this->Form->error('Booking.number_person');?>
                                    </dd>
                                    
                                    <dt>Reservation Date</dt>
                                    <dd>
						
					  <?php echo $this->Form->input('Booking.start_date',array('type'=>'text','class'=>'txtbx','placeholder'=>'Reservation Date','label'=>false,'div'=>false));         
				          echo $this->Form->error('Booking.start_date');?>	
				    </dd>
                                    
                                    <dt>Reservation Time</dt>
                                    <dd>
                                        <span id="resvTime">
                                            <?php if(empty($time_range)){
                                                    echo $this->Form->input('Booking.start_time',array('type'=>'select','class'=>'txtbx','empty'=>'Store is closed on this day','options'=>$time_range,'label'=>false,'div'=>false)); 
                                                  } else {
                                             if(!empty($store_booking)){
                                                foreach($store_booking as $book){
                                                   $myBookTime  = explode(" ", $book['Booking']['reservation_date']);
                                                   $data[] = $myBookTime[1];
                                                } ?>
                                                <select id="BookingStartTime" class="txtbx" name="data[Booking][start_time]">
                                                    <?php foreach($time_range as $key=>$value) {
                                                        //if(in_array($key,$data)){
                                                        //   echo "<option value='$key' disabled='disabled'>$value - Already Booked </option>";
                                                       // } else {
                                                           echo "<option value='$key'>$value</option>";
                                                       // }
                                                    }   ?>
                                                </select>
                                            <?php } else {
                                                echo $this->Form->input('Booking.start_time',array('type'=>'select','class'=>'txtbx','options'=>$time_range,'label'=>false,'div'=>false)); 
                                            } } ?>

					 </span>	
                                        <?php echo $this->Form->error('Booking.start_time');?>	
						
				    </dd>
                                    
                                    <dt>Special Request</dt>
                                    <dd>
					  <?php  echo $this->Form->input('Booking.special_request',array('type'=>'textarea','class'=>'txtbx','placeholder'=>'Special Request','maxlength'=>'50','label'=>false,'div'=>false));            
				    echo $this->Form->error('Booking.special_request');	?>
						
				    </dd>
                                    
                                    <dt>&nbsp;</dt>
                                    <dd><!--<input type="submit" value="Request" class="float-left">-->
				    <?php echo $this->Form->submit('Request',array('class'=>'float-left'));?>
				    <?php
				echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/users/customerDashboard/$encrypted_storeId/$encrypted_merchantId'",'class' => 'float-left btn-cancel')); 
				?>
				    </dd>
                                </dl>
				    
                            </fieldset>
                                      <?php echo $this->Form->end();?>
				   
                    </div>
                </div>
		
            </div><!-- /main content end -->
        </div><!-- /right side end -->
        <div class="clearfix"></div>
	<script>
    $(document).ready(function() {

        $('#BookingStartDate').datepicker({
            dateFormat: 'mm-dd-yy',
            minDate: 0,
        });
        
        $('#BookingStartDate').on('change',function(){				     
            var date = $(this).val();
            var storeId = '<?php echo $encrypted_storeId;?>';
            var merchantId = '<?php echo $encrypted_merchantId;?>';
            $.ajax({
                url: "<?php echo $this->Html->url(array('controller' => 'Users', 'action' => 'getStoreTime')); ?>",
                type:"Post",
                dataType:'html',
                data: {storeId: storeId,merchantId: merchantId,date: date},
                success:function(result){
                    $('#resvTime').html(result);
                }
            });
        });

        $("#UsersRegistration").validate({
            rules: {
                "data[Booking][start_date]": {
                    required: true,
                },"data[Booking][start_time]": {
                    required: true,
                }
            },
            messages: {
                "data[Booking][start_date]": {
                    required: "Please select booking date",

                },"data[Booking][start_time]": {
                    required: "Please select booking time",

                }
            }
        });
    });
</script>
	<style>
		
.order-overview-rt {
    float: right;
    width: 103%;
}
	</style>