<style>
.form_margin {
    height: 59px;
    margin: 0px 1px 2px;
}
</style>
    <div class="row">
            <div class="col-lg-6">
                <h3>Edit Coupon</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Coupons', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'CouponAdd','enctype'=>'multipart/form-data'));?>
        <div class="col-lg-6">            
	    <div class="form-group form_margin">		 
                <label>Title<span class="required"> * </span></label>               
              
	   <?php echo $this->Form->input('Coupon.name',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Title','label'=>'','div'=>false));
                  echo $this->Form->error('Coupon.name'); ?>
            </div>
	    <br>
	   <div class="form-group form_margin">		 
                <label>Coupon Code<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('Coupon.coupon_code',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Code','label'=>'','div'=>false));
                  echo $this->Form->error('Coupon.coupon_code'); ?>
            </div><br>
	     <div class="form-group form_margin">
                <label>Type<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('Coupon.discount_type', array(
  'type' => 'radio',
  'options' => array('1' => 'Price&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => '%') ,
  'default'=>1
));
                echo $this->Form->error('Coupon.discount_type');
                   ?>
            </div>
	     
	      <div class="form-group form_margin">		 
                <label>Discount<span class="blue">(Price / %)</span><span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('Coupon.discount',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Size','label'=>'','div'=>false));
                  echo $this->Form->error('Coupon.discount'); ?>
		  

            </div><br>
	      
	    <div class="form-group form_margin">		 
                <label>No. of times can used<span class="required"> * </span></label>               
              
	   <?php echo $this->Form->input('Coupon.number_can_use',array('type'=>'number','class'=>'form-control valid','min'=>'1','placeholder'=>'Enter Size','label'=>'','div'=>false));
                  echo $this->Form->error('Coupon.number_can_use'); ?>
            </div>
	    
	    <div class="form-group form_spacing">		 
                <label>Promotional Message</label>               
              
	   <?php echo $this->Form->input('Coupon.promotional_message',array('type'=>'textarea','class'=>'form-control valid','placeholder'=>'Enter Message','label'=>'','div'=>false));
                  echo $this->Form->error('Coupon.promotional_message'); ?>
		  <span class="blue">(Please enter promotional message for coupon sharing, variables available are ( <strong>{FULL_NAME}</strong> , <strong>{COUPON}</strong> ))</span>
            </div>
	    
	    
             <br>
	    <div class="form-group form_margin">
                <label>Status<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('Coupon.is_active', array(
  'type' => 'radio',
  'options' => array('1' => 'Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '0' => 'Inactive') ,
  'default'=>1
));
                echo $this->Form->error('Coupon.is_active');
                   ?>
            </div>
            
	    

             <?php //if($seasonalpost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>

	       	       
 
	  
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/coupons/index/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
    <script>
    $(document).ready(function() {
	
	    $("#CouponAdd").validate({
            rules: {
                "data[Coupon][name]": {
                    required: true, 
                },
                "data[Coupon][coupon_code]": {
                    required: true,
		    alphanumeric:true,
                    minlength:4,
                    maxlength:8,
                },
		"data[Coupon][discount]": {
                    required: true,
		     number:true,
		     min:1,
                },
		"data[Coupon][number_can_use]": {
                    required: true,
		    digits: true,
		    min:1,
                }
                
            },
            messages: {
                "data[Coupon][name]": {
                    required: "Please enter coupon title",
                },
                "data[Coupon][coupon_code]": {
                    required: "Please enter coupon code",
                },
		"data[Coupon][discount]": {
                    required: "Please enter discount",
                },
		"data[Coupon][number_can_use]": {
                    required: "Please enter no of times",
                },
                
            }
        });
       $('#CouponName').change(function(){
      var str = $(this).val();
      if ($.trim(str) === '') {
         $(this).val('');
         $(this).css('border', '1px solid red');
         $(this).focus();
      }else{
         $(this).css('border', '');
      }
      });       
            
    });
</script>