
    <div class="row">
            <div class="col-lg-6">
                <h3>Add Offer</h3> 
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Offers', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'addOffer','enctype'=>'multipart/form-data'));?>
        <div class="col-lg-6">
            
	    <div class="form-group form_margin">		 
                <label>Item Name<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('Item.id',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$itemList,'empty'=>'Select Item')); ?>
                <span class="blue">(Main item on which offer is to be created.)</span>
            </div>    
	    
            <div class="form-group form_margin">		 
                <label>Number of units<span class="required"> * </span></label>               
              
	   <?php echo $this->Form->input('Offer.unit',array('type'=>'number','min'=>'1','class'=>'form-control valid','placeholder'=>'Number of units','label'=>'','div'=>false,'value'=>1));
                  echo $this->Form->error('Offer.unit'); ?>
            </div>
            
            
            <?php if($sizepost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>
	    <div class="form-group form_spacing" id="SizesDiv" <?php echo $display;?> >
                <label>Size<span class=""><small>(Optional)</small></span></label>                
                <span id="SizesBox" <?php echo $display;?> >
                <?php
                echo $this->Form->input('Size.id',array('type'=>'select','class'=>'form-control valid','label'=>'','div'=>false,'autocomplete' => 'off','options'=>$sizeList));            
                ?>
		</span>
            </div>        
	    
	    <div class="form-group form_spacing">
                <label>Description</label> 
		<?php echo $this->Form->input('Offer.description',array('type'=>'textarea','class'=>'form-control valid','placeholder'=>'Description','label'=>'','div'=>false));  
                  echo $this->Form->error('Offer.description');?>
                  <span class="blue">(Offer Description)</span>
            </div> 
	    
	     
	    <div class="form-group form_spacing">		 
                <label>Offered Items<span class="required"> * </span></label>               
              
		<?php echo $this->Form->input('Offered.id',array('type'=>'select','class'=>'form-control valid serialize','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$itemList,'multiple'=>true)); ?>
                <span class="blue">(Select Offered items which comes with offer)</span>
            </div>  
	   
	    
	    <div id="dynamicItems" class="form-group form_spacing">               
                
            </div>
             
            
            
            
            
	    <div class="form-group form_margin">
                <label>Upload Image</label>
		<?php echo $this->Form->input('Offer.imgcat',array('type'=>'file','div'=>false));
		
		echo $this->Form->error('Item.offerImage');?>
            </div>
            
	     <div class="form-group form_margin">		 
                <label>Is Fixed Price</label><span>&nbsp;&nbsp;</span>                  
		<?php
                    echo $this->Form->checkbox('Offer.is_fixed_price');
                    
                ?><br/>
                <span class="blue">(Select "is Fixed" if you want to create aggregate price for above items)</span>
            </div>
             
            
             <?php if($isfixed){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>
             <div class="form-group form_margin" id="Offerprice" <?php echo $display; ?>>		 
                <label>Fixed Price</label><span>&nbsp;&nbsp;</span>                  
		<?php
                    echo $this->Form->input('Offer.offerprice',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Fixed Price','label'=>'','div'=>false));
                    echo $this->Form->error('Offer.offerprice');                   
                ?>
                <span class="blue">(aggregate Price for all selected items)</span>
            </div>
             
	    
	    <div class="form-group form_margin">
               <label>Select Date</label>  
                <?php
                    echo $this->Form->input('Offer.offer_start_date',array('type'=>'text','class'=>'form-control','maxlength'=>'50','div'=>false,'readonly'=>true));
                ?>
                <span class="blue">(Date from which offer will be applicable )</span>
            </div>
	    
	    <div class="form-group form_margin">
               <label>End Date</label>  
                <?php
                    echo $this->Form->input('Offer.offer_end_date',array('type'=>'text','class'=>'form-control','maxlength'=>'50','div'=>false,'readonly'=>true));
                ?>
                <span class="blue">(Date till the offer will be applicable )</span>
            </div>
            
            
             <div class="form-group form_spacing">		 
                <label>Status<span class="required"> * </span></label><span>&nbsp;&nbsp;</span>                  
		<?php
                $value=0;
                if(isset($this->request->data['Offer']['is_active'])){
                    $value=$this->request->data['Offer']['is_active'];
                }
                echo $this->Form->input('Offer.is_active', array('type' => 'radio','separator' => '&nbsp;&nbsp;&nbsp;&nbsp;','value'=>$value,'options' => array('1' => 'Active', '0' => 'Inactive')));
                ?>		 
            </div>
	    
	        
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/offers/index/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
    <script>
    $(document).ready(function() {
	
	$('#OfferOfferStartDate').datepicker({
	   
	   dateFormat: 'mm-dd-yy',
	    minDate: 0,
	     onSelect:function(selected){
                $("#OfferOfferStartDate").prev().find('div').remove();
                $("#OfferOfferEndDate").datepicker("option","minDate", selected)
               }
	   
	});
	$('#OfferOfferEndDate').datepicker({
	   
	   dateFormat: 'mm-dd-yy',
	    minDate: 0,
	   
	});
         $("#addOffer").validate({
            rules: {
                "data[Item][id]": {
                    required: true,
                }
            },
            messages: {
                "data[Item][id]": {
                    required: "Please select Item",
                }
            }
        });
	 
	$("#ItemId").change(function(){
		var catgoryId=$("#ItemId").val();
		if (catgoryId) {	
			$.ajax({url: "/sizes/getItemSize/"+catgoryId, success: function(result){		
			    $("#SizesDiv").show();
			    $("#SizesBox").show();
			    $("#SizesBox").html(result);
                            //$("#SizeId").removeAttr("multiple");
			}});
		}
	});
        
//        $("#OfferedId").change(function(){
//		var catgoryId=$("#OfferedId").val();
//		if (catgoryId) {	
//			$.ajax({url: "/sizes/getMultipleItemSizes/"+catgoryId, success: function(result){		
//			    $("#dynamicItemsDiv").show();
//			    $("#dynamicItemsBox").show();
//			    $("#dynamicItems").html(result);			    
//			}});
//		}else{
//                    $("#dynamicItems").html('');
//                }
//	});


        $("#OfferedId").change(function(){
		var catgoryId=$("#OfferedId").val();
                var texts= $(".serialize").serialize();
                //$("#showvalue").html(texts);
		if (catgoryId) {	
			$.ajax({
                            url: "/sizes/getMultipleItemSizes/",
                            type: "POST",
                            data:texts,
                            success: function(result){		
			    $("#dynamicItemsDiv").show();
			    $("#dynamicItemsBox").show();
			    $("#dynamicItems").html(result);			    
			}});
		}else{
                    $("#dynamicItems").html('');
                }
	});
        
        
        $("#OfferIsFixedPrice").change(function(){
		var flag=$("#OfferIsFixedPrice").val();
	 if($(this).is(":checked")) {
		$("#Offerprice").show();
	 }else{
		$("#Offerprice").hide();
	 }
	});
	
	$("#ItemIsSeasonalItem").change(function(){
		var flag=$("#ItemIsSeasonalItem").val();
	 if($(this).is(":checked")) {
		$("#Offerprice").show();
	 }else{
		$("#Offerprice").hide();
	 }
	});
	
	$('#ItemPricePrice').keyup(function () {
		this.value = this.value.replace(/[^0-9.,]/g,'');
	  }); 
    });
</script>