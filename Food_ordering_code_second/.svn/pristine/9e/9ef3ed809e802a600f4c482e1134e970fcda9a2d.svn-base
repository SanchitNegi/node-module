<?php echo $this->Html->script('ckeditor/ckeditor');?>
    <div class="row">
            <div class="col-lg-6">
                <h3>Add Page</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Content', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'PageAdd'));?>
        <div class="col-lg-6">            
	    
	    
	   <div class="form-group form_margin">		 
                <label>Name<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('StoreContent.name',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Type','label'=>'','div'=>false));
                  echo $this->Form->error('StoreContent.name'); ?>
            </div>
	   <div class="form-group form_margin">		 
                <label>Content Key<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('StoreContent.content_key',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Type','label'=>'','div'=>false));
                  echo $this->Form->error('StoreContent.content_key'); ?>
            </div>
             <br>
	    <div class="form-group form_spacing">
                <label>Page Content</label> 
                <?php echo $this->Form->textarea('StoreContent.content',array('class'=>'ckeditor'));
		echo $this->Form->error('StoreContent.content');
		?>
                 </div>  
	    <div class="form-group form_margin">
                <label>Status<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('StoreContent.is_active', array(
  'type' => 'radio',
  'options' => array('1' => 'Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '0' => 'Inactive') ,
  'default'=>1
));
                echo $this->Form->error('StoreContent.is_active');
                   ?>
            </div>
            
	    

             <?php //if($seasonalpost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>

	       	       
 
	  
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/contents/pageList/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
    <script>
    $(document).ready(function() {
	
	    $("#PageAdd").validate({
            
            rules: {
                "data[StoreContent][name]": {
                    required: true, 
                },
		"data[StoreContent][content_key]": {
                    required: true,
                },
                
            },
            messages: {
                "data[StoreContent][name]": {
                    required: "Please enter Page title",
                },
                 "data[StoreContent][content_key]": {
                    required: "Please enter Page code",
                },
            }
        });
         $('#StoreContentName').change(function(){
      var str = $(this).val();
      if ($.trim(str) === '') {
         $(this).val('');
         $(this).css('border', '1px solid red');
         $(this).focus();
      }else{
         $(this).css('border', '');
      }
      });  
         
	 $('#StoreContentContentKey').change(function(){
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