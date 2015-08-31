
    <div class="row">
            <div class="col-lg-6">
                <h3>Edit Add-on</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Toppings', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'addTopping'));?>
        <div class="col-lg-6">            
	    <div class="form-group form_margin">		 
                <label>Add-on Name<span class="required"> * </span></label>               
              
		<?php
                echo $this->Form->input('Topping.id',array('type'=>'hidden','label'=>false,'div'=>false));
                echo $this->Form->input('Topping.item_id',array('type'=>'hidden','label'=>false,'div'=>false));
                echo $this->Form->input('Category.id',array('type'=>'hidden','label'=>false,'div'=>false));
                
                echo $this->Form->input('Topping.name',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Add-on','label'=>'','div'=>false));
                  echo $this->Form->error('Topping.name'); ?>
            </div>
	    
	        
            <div class="form-group form_margin">
                <label>Category<span class="required"> * </span></label>  
                <?php 
                    echo $this->Form->input('Category.id',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'required'=>true,'autocomplete' => 'off','options'=>$categoryList,'empty'=>'Select','readonly'=>true,'disabled'=>'disabled'));            
                ?>
            </div>
	    
	    <?php if($itempost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>
	    <div class="form-group form_spacing" id="ItemsDiv" <?php echo $display;?> >
                <label>Item<span class="required"> * </span></label>                
                <span id="ItemsBox" <?php echo $display;?> >
                <?php
                echo $this->Form->input('Topping.item_id',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'autocomplete' => 'off','options'=>$itemList,'readonly'=>true,'disabled'=>'disabled'));            
                ?>
		</span>
            </div>
            
	    
	    <div class="form-group form_spacing">		 
                <label>Prices<span class="required"> * </span></label>       
              
		<?php echo $this->Form->input('Topping.price',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Price','label'=>'','div'=>false));
                  echo $this->Form->error('Topping.price'); ?>		  
            </div>          
	            
	    <div class="form-group form_spacing">		 
                <label>Status<span class="required"> * </span></label><span>&nbsp;&nbsp;</span>                  
		<?php
                $value=1;
                if(isset($this->request->data['Topping']['is_active'])){
                    $value=$this->request->data['Topping']['is_active'];
                }
                echo $this->Form->input('Topping.is_active', array('type' => 'radio','separator' => '&nbsp;&nbsp;&nbsp;&nbsp;','value'=>$value,'options' => array('1' => 'Active', '0' => 'Inactive')));
                ?>		 
            </div>          
            
	        
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/toppings/index/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
    <script>
    $(document).ready(function() {
	
	$("#addTopping").validate({
            rules: {
                "data[Topping][name]": {
                    required: true,                    
                },
		"data[Topping][category_id]": {
                    required: true,                    
                },
		"data[Topping][item_id][]": {
                    required: true,                    
                },
		"data[Topping][price]": {
                    required: true,                    
                }
                
            },
            messages: {
                "data[Topping][name]": {
                    required: "Please enter Add-on name",
                },        
                "data[Topping][category_id]": {
                    required: "Please select category",
                },
		"data[Topping][item_id][]": {
                    required: "Please select item",
                },
		"data[Topping][price]": {
                    required: "Please enter price",            
                }
            }
        });
	 
	$("#CategoryId").change(function(){
		var catgoryId=$("#CategoryId").val();
		if (catgoryId) {	
			$.ajax({url: "/items/itemsByCategory/"+catgoryId, success: function(result){		
			    $("#ItemsDiv").show();
			    $("#ItemsBox").show();
			    $("#ItemsBox").html(result);			    
			}});
		}
	});	
		
	$('#ToppingPrice').keyup(function () {
		this.value = this.value.replace(/[^0-9.,]/g,'');
	  });
	
	 $('#ToppingName').change(function(){
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