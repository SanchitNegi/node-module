
    <div class="row">
            <div class="col-lg-6">
                <h3>Add Category</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Categories', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'CategoryAdd','enctype'=>'multipart/form-data'));?>
        <div class="col-lg-6">            
	    <div class="form-group form_margin">		 
                <label>Category Name<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('category.name',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Category','label'=>'','div'=>false));
                  echo $this->Form->error('category.name'); ?>
            </div>
	    
	    <br>
	    
	     <div class="form-group form_margin">
                <label>Upload Image</label>
		<?php echo $this->Form->input('category.imgcat',array('type'=>'file','div'=>false)); ?>
            </div>
	    
	     <div class="form-group form_margin">
                <label>Item Options</label> 
		<?php echo $this->Form->input('category.is_sizeonly',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'autocomplete' => 'off','empty'=>'Choose One','options'=>array('1'=>'Size Only','2'=>'Type Only','3'=>'Size and Type'),'empty'=>'Select'));   
                  ?>
            </div>
        <br>
            <div class="form-group form_margin">
                <label>Has Add-on<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('category.has_topping', array(
  'type' => 'radio',
  'options' => array('1' => 'Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => 'No') ,
   'default'=>1
));
                echo $this->Form->error('category.has_topping');
                   ?>
            </div>
	    
	    <div class="form-group form_margin">
                <label>Status<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('category.is_active', array(
  'type' => 'radio',
  'options' => array('1' => 'Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '2' => 'Inactive') ,
  'default'=>1
));
                echo $this->Form->error('category.is_active');
                   ?>
            </div>
            
	    
<div class="form-group form_margin">
                     
              
                <?php               
                
                echo $this->Form->checkbox('category.is_meal',array('value'=>'1'));
                echo $this->Form->error('category.is_meal');
                ?>
                  <label>Is Meal</label>
            </div>
             <?php //if($seasonalpost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>

	       	       <span id="FromTodate" style="display:none"> 
 
	   <div class="form-group form_margin">
            <label>Start Time</label>
              
    <td><?php echo $this->Form->input('category.start_time',array('options'=>$timeOptions,'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));
             echo $this->Form->error('category.start_time');
    ?></td>

              
               <label>End Time</label>
              
    <td><?php echo $this->Form->input('category.end_time',array('options'=>$timeOptions,'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));
             echo $this->Form->error('category.end_time');
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
	
	    $("#CategoryAdd").validate({
            
            rules: {
                "data[category][name]": {
                    required: true, 
                },
                "data[category][has_topping]": {
                    required: true,
                },
                "data[category][is_active]": {
                    required: true,
                },
                "data[category][start_time]": {
                    required: true,
                },
                 "data[category][end_time]": {
                    required: true,
                },
            },
            messages: {
                "data[category][name]": {
                    required: "Please enter category name",
                    lettersonly:"Only alphabates allowed",
                },
                "data[category][has_topping]": {
                    required: "Please select topping",
                },
                 "data[category][is_active]": {
                    required: "Please select status ",
                },
                "data[category][start_time]": {
                    required: "Please select start time",
                },
                "data[category][end_time]": {
                    required: "Please select end time",
                },
            }
        });
            
             $("#categoryIsMeal").change(function(){
		var flag=$("#categoryIsMeal").val();
	 if($(this).is(":checked")) {
		$("#FromTodate").show();
	 }else{
		$("#FromTodate").hide();
	 }
	});
    });
    
  
    $('#categoryName').change(function(){
      var str = $(this).val();
      if ($.trim(str) === '') {
         $(this).val('');
         $(this).css('border', '1px solid red');
         $(this).focus();
      }else{
         $(this).css('border', '');
      }
      });
</script>