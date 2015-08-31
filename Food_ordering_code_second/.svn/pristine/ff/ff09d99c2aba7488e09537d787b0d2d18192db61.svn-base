
    <div class="row">
            <div class="col-lg-6">
                <h3>Add Menu Item</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Stores', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'addMenuItem','enctype'=>'multipart/form-data'));?>
        <div class="col-lg-6">            
	    <div class="form-group form_margin">		 
                <label>Item Name<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('Item.name',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Item Name','label'=>'','div'=>false));
                  echo $this->Form->error('Item.name'); ?>
            </div>
	    
	    
	    
	     <div class="form-group form_margin">
                <label>Upload Image</label>
		<?php echo $this->Form->input('Item.imgcat',array('type'=>'file','div'=>false));
		
		echo $this->Form->error('Item.imgcat');?>
            </div>
	    
	     <div class="form-group form_spacing">
                <label>Description</label> 
		<?php echo $this->Form->input('Item.description',array('type'=>'textarea','class'=>'form-control valid','placeholder'=>'Description','label'=>'','div'=>false));  
                  echo $this->Form->error('Item.description');?>
            </div>
        
            <div class="form-group form_margin">
                <label>Category<span class="required"> * </span></label>                
              
                <?php    
                
                echo $this->Form->input('Item.category_id',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'required'=>true,'autocomplete' => 'off','options'=>$categoryList,'empty'=>'Select'));            
                ?>
            </div>
	    
	    <?php if($sizepost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>
	    <div class="form-group form_spacing" id="SizesDiv" <?php echo $display;?> >
                <label>Sizes<span class=""><small>(Optional)</small></span></label>                
                <span id="SizesBox" <?php echo $display;?> >
                <?php
                echo $this->Form->input('Size.id',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'autocomplete' => 'off','multiple'=>true,'options'=>$sizeList));            
                ?>
		</span>
            </div>
            
	    
	    <div class="form-group form_spacing">		 
                <label>Prices<span class="required"> * </span></label>       
              
		<?php echo $this->Form->input('ItemPrice.price',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Price','label'=>'','div'=>false));
                  echo $this->Form->error('ItemPrice.price'); ?>
		  <span class="blue">(Please enter multiple prices by comma separated,if comma separated price not entered for Multiple sizes first price will be applicable for others.)</span>
            </div>
	    <?php if($typepost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>
	    <div class="form-group form_spacing" id="Itemtype" <?php echo $display;?>>
                <label>Type<span class=""><small>(Optional)</small></span></label>   
                <?php        
                echo $this->Form->input('Type.id',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'autocomplete' => 'off','options'=>$typeList,'multiple'=>true));            
                ?>
            </div>
	    
	   
	    
	    <div class="form-group">
                <label>Seasonal Item</label>      
              
                <?php               
                
                echo $this->Form->checkbox('Item.is_seasonal_item');      
                ?>
		
		<span>&nbsp;&nbsp;&nbsp;</span>
		 <label>Is deliverable</label>      
              
                <?php               
                
                echo $this->Form->checkbox('Item.is_deliverable',array('checked'=>'checked'));      
                ?>
            </div>
	        
	    <?php if($seasonalpost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>
	    <span id="FromTodate" <?php echo $display;?>>
	    <div class="form-group form_margin">
               <label>Select Date<span class="required"> * </span></label>  
                <?php
                    echo $this->Form->input('Item.start_date',array('type'=>'text','class'=>'form-control','maxlength'=>'50','div'=>false,'readonly'=>true));
                ?>
            </div>
	    
	    <div class="form-group form_margin">
               <label>End Date<span class="required"> * </span></label>  
                <?php
                    echo $this->Form->input('Item.end_date',array('type'=>'text','class'=>'form-control','maxlength'=>'50','div'=>false,'readonly'=>true));
                ?>
            </div>
	    </span>
	        
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/items/index/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
    <script>
    $(document).ready(function() {
	
	$('#ItemStartDate').datepicker({
	   
	   dateFormat: 'mm-dd-yy',
	    minDate: 0,
	     onSelect:function(selected){
$("#ItemStartDate").prev().find('div').remove();
$("#ItemEndDate").datepicker("option","minDate", selected)
               }
	   
	});
	$('#ItemEndDate').datepicker({
	   
	   dateFormat: 'mm-dd-yy',
	    minDate: 0,
	   
	});
         $("#addMenuItem").validate({
            rules: {
                "data[Item][start_date]": {
                    required: true,
                },
		"data[Item][end_date]": {
                    required: true,
                },
		"data[Item][name]": {
                    required: true,                    
                },
		"data[ItemPrice][price]": {
                    required: true,                    
                }  
            },
            messages: {
                "data[Item][start_date]": {
                    required: "Please select Start date",
                },        
                "data[Item][end_date]": {
                    required: "Please select End date",
                },
		"data[Item][name]": {
                    required: "Please enter Item name",
                },
		"data[Item][price]": {
                    required: "Please enter price",
                }, 
            }
        });
	 
	$("#ItemCategoryId").change(function(){
		var catgoryId=$("#ItemCategoryId").val();
		if (catgoryId) {	
			$.ajax({url: "/sizes/getCategorySizes/"+catgoryId, success: function(result){		
			    $("#SizesDiv").show();
			    $("#SizesBox").show();
			    $("#SizesBox").html(result);
			    var sizeonly=$("#SizeIssizeonly").val();
			    if (sizeonly==2 || sizeonly==3) {
				 $("#Itemtype").show();
			    }else{
				$("#Itemtype").hide();
			    }
			}});
		}
	});
	
	$("#ItemIsSeasonalItem").change(function(){
		var flag=$("#ItemIsSeasonalItem").val();
	 if($(this).is(":checked")) {
		$("#FromTodate").show();
	 }else{
		$("#FromTodate").hide();
	 }
	});
	
	$('#ItemPricePrice').keyup(function () {
		this.value = this.value.replace(/[^0-9.,]/g,'');
	  });
	
	$('#ItemName').change(function(){
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