
    <div class="row">
            <div class="col-lg-6">
                <h3>Add Type</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Types', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'TypeAdd','enctype'=>'multipart/form-data'));?>
        <div class="col-lg-6">            
	    
	    
	   <div class="form-group form_margin">		 
                <label>Type<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('Type.name',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Type','label'=>'','div'=>false));
                  echo $this->Form->error('Type.name'); ?>
            </div>
             <br>
	    <div class="form-group form_margin">
                <label>Status<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('Type.is_active', array(
  'type' => 'radio',
  'options' => array('1' => 'Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '0' => 'Inactive') ,
  'default'=>1
));
                echo $this->Form->error('Type.is_active');
                   ?>
            </div>
            
	    

             <?php //if($seasonalpost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>

	       	       
 
	  
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/types/index/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
    <script>
    $(document).ready(function() {
	
	    $("#TypeAdd").validate({
            
            rules: {
                "data[Type][name]": {
                    required: true, 
                }
                
            },
            messages: {
                "data[Type][name]": {
                    required: "Please enter type name",
                },
                
            }
        });
       $('#TypeName').change(function(){
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