<div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
                    <?php echo $this->Session->flash(); ?>
                    <?php
                    
if(isset($avalibilty_status)){?>
<div class="inner-sml-form">
                    	
                        	<fieldset>
                            	<legend>Store Availability</legend>
                                <div class="availabilty-msg clearfix">
                                	<h3>Store Closed</h3>
                                    <h4> <?php if($avalibilty_status['status']=="Holiday"){?>
     <span><?php echo $avalibilty_status['description'];?></span>
   <?php }elseif($avalibilty_status['status']=="WeekDay"){?>
      <span><?php echo "WeekDay Off";?></span>
   <?php }elseif($avalibilty_status['status']=="Timeoff"){?>
      <span><?php echo "Please visit us between"." ".date('H:i:s',$avalibilty_status['start_time'])." ". "and"." ".date('H:i:s',$avalibilty_status['end_time']) ;?></span>
  <?php 
}?></h4>
                                </div>
                            </fieldset>
                        
                    </div>
  
 <?php  }else{?>
                	<div class="inner-sml-form">
<?php echo $this->Form->create('Users', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'UsersRegistration','url'=>array('controller'=>'users','action'=>'orderType',$orderId)));?>
                        	<fieldset>
                            	<legend>Select Order Type</legend>
                                <div class="input-field">
                                     <?php  echo $this->Form->input('Order.type.',array('type'=>'checkbox','class'=>'passwrd-input ordertype','placeholder'=>'Old Password','maxlength'=>'12','label'=>'Deliver to my Address','value'=>3,'checked'=>true));?>

                                        
                                </div>
                                <div class="input-field">
                                  <?php   echo $this->Form->input('Order.type.',array('type'=>'checkbox','class'=>'passwrd-input ordertype','label'=>'Pick Up Order','value'=>2));?>

                                	
                                </div>
                                <div class="input-field">
                                    
                                        <?php echo $this->Form->input('Order.type.',array('type'=>'checkbox','class'=>'passwrd-input ordertype','label'=>'Dine-In','value'=>1));

                                        ?>
                                </div>
                            </fieldset>
                            <input type="submit" value="Continue">
                        </form>
                    </div>
                        <?php }?>
                </div>
            </div><!-- /main content end -->
        </div><!-- /right side end -->
        <div class="clearfix"></div>
<script>
$(document).ready(function(){
    $(".ordertype").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
        var group = "input:checkbox[name='" + $box.attr("name") + "']";
        $(group).prop("checked", false);
        $box.prop("checked", true);
        } else {
        $box.prop("checked", false);
        }
    });
 });        
</script>
  
       