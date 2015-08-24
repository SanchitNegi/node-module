
    <div class="row">
            <div class="col-lg-6">
                <h3>Edit Category</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Categories', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'CategoryEdit','enctype'=>'multipart/form-data'));?>
        <div class="col-lg-6">            
	    <div class="form-group form_margin">		 
                <label>Category Name<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('Category.name',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Category','label'=>'','div'=>false));
                  echo $this->Form->error('Category.name'); ?>
            </div>
	    <br>
	    <div class="form-group form_spacing">
	    
	     <div style="float:left;">
                <label>Upload Image</label>
		<?php echo $this->Form->input('Category.imgcat',array('type'=>'file','div'=>false)); ?>
            </div>
	     		<?php
		$EncryptCategoryID=$this->Encryption->encode($this->request->data['Category']['id']);
		?>
	     <div style="float:right;">
         
		<?php
		if(!empty($imgpath))
		{
	echo $this->Html->image('/Category-Image/'.$this->request->data['Category']['imgcat'],array('alt' => 'Category Image','height'=>150,'width'=>150,'style'=>'border:1px solid #000000;margin:5px 0px 5px 5px;','title'=>'Category Image'));
	echo $this->Html->link("X",array('controller' => 'categories', 'action' => 'deleteCategoryPhoto', $EncryptCategoryID),array('confirm' => 'Are you sure to delete Category Photo?','title'=>'Delete Photo','style'=>'vertical-align:top;margin-right:10px;font-size:18px;font-weight:bold;'));

		}else{
	echo $this->Html->image('/Category-Image/index.jpeg' ,array('alt' => 'Category Image','height'=>80,'width'=>80));
	
		}
		
		?>
            </div>
	    </div>
	   <div style="clear:both;"></div>
	    <div class="form-group form_margin">
                <label>Item Options</label> 
		<?php echo $this->Form->input('Category.is_sizeonly',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'autocomplete' => 'off','options'=>array('1'=>'Size Only','2'=>'Type Only','3'=>'Size and Type'),'empty'=>'Select'));   
                  ?>
            </div>
        <br>
            <div class="form-group form_margin">
                <label>Has Add-on<span class="required"> * </span></label>                
             &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('Category.has_topping', array(
  'type' => 'radio',
  'options' => array('1' => 'Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => 'No') 
));
                echo $this->Form->error('Category.has_topping');
                   ?>
		   
            </div>
	    
	    <div class="form-group form_margin">
                <label>Status<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('Category.is_active', array(
  'type' => 'radio',
  'options' => array('1' => 'Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '0' => 'Inactive') 
));
                echo $this->Form->error('Category.is_active');
                   ?>
            </div>
            
	    
	    <div class="form-group form_margin">
                     
              
                <?php               
                
                echo $this->Form->checkbox('Category.is_meal',array('value'=>'1'));
                echo $this->Form->error('Category.is_meal');
                ?>
                  <label>Is Meal</label>
            </div>
  <?php if($seasonalpost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>

	       <span id="FromTodate" <?php echo $display;?>> 
	   <div class="form-group form_margin">
		
            <label>Start Time</label>
              
    <td><?php echo $this->Form->input('Category.start_time',array('options'=>$timeOptions,'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));
             echo $this->Form->error('Category.start_time');
    ?></td>
		
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
               <label>End Time</label>
              
    <td><?php echo $this->Form->input('Category.end_time',array('options'=>$timeOptions,'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));
             echo $this->Form->error('Category.end_time');
    ?></td>
	       
            </div>
	        </span>
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/categories/categoryList/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
    <script>
    $(document).ready(function() {
	
	  $("#CategoryEdit").validate({
            
            rules: {
                "data[Category][name]": {
                    required: true, 
                },
                "data[Category][has_topping]": {
                    required: true,
                }
                
            },
            messages: {
                "data[Category][name]": {
                    required: "Please enter category name",
                    lettersonly:"Only alphabates allowed",
                },
		 "data[Category][has_topping]": {
                    required: "Please select topping",
                },
                
            }
        });
	    
	    $("#CategoryIsMeal").change(function(){
		var flag=$("#CategoryIsMeal").val();
	 if($(this).is(":checked")) {
		$("#FromTodate").show();
	 }else{
		$("#FromTodate").hide();
	 }
	});
	    
	    $('#CategoryName').change(function(){
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