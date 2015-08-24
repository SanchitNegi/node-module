<?php //pr($this->request->data);?>
    <div class="row">
            <div class="col-lg-6">
                <h3>Edit Offer</h3> 
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
              
		<?php
                echo $this->Form->input('Offer.id',array('type'=>'hidden','label'=>false,'div'=>false));
                
                echo $this->Form->input('Item.id',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$itemList,'empty'=>'Select Item')); ?>
                <span class="blue">(Main item on which offer is to be created.)</span>
            </div>    
	    
            <div class="form-group form_margin">		 
                <label>Number of units<span class="required"> * </span></label>               
              
                <?php echo $this->Form->input('Offer.unit',array('type'=>'number','min'=>'1','class'=>'form-control valid','placeholder'=>'Number of units','label'=>'','div'=>false));
                echo $this->Form->error('Offer.unit'); ?>
            </div>
            
            
            <?php if($sizepost && $sizeList){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>
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
              
		<?php echo $this->Form->input('Offered.id',array('type'=>'select','class'=>'form-control valid serialize','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$itemList,'empty'=>'Select Item','multiple'=>true)); ?>
                <span class="blue">(Select Offered items which comes with offer)</span>
            </div>  
	   
	    
	    <div id="dynamicItems" class="form-group form_spacing">               
                <?php if(isset($this->request->data['OfferDetails']) && $this->request->data['OfferDetails']){
                    foreach($this->request->data['OfferDetails'] as $key => $details){                        
                        $itemdetails=$this->Common->getitemdetals($details['item_id']);
                        echo "<hr>";
                        echo "<p><strong>(".$itemdetails['Item']['name'].")</strong></p>";
                        echo $this->Form->input('OfferDetails.'.$key.'.id',array('type'=>'hidden','label'=>false,'div'=>false,'value'=>$details['id'],'class'=>'serialize'));
                        echo $this->Form->input('OfferDetails.'.$key.'.item_id',array('type'=>'hidden','label'=>false,'div'=>false,'value'=>$details['item_id'],'class'=>'serialize'));
                        if($details['offerSize']){
                             $Sizesoptions=$this->Common->getItemSize($details['item_id']);
                            echo $this->Form->input('OfferDetails.'.$key.'.offerSize',array('type'=>'select','class'=>'form-control valid serialize','label'=>'','div'=>false,'autocomplete' => 'off','options'=>$Sizesoptions,'label'=>'Size','value'=>$details['offerSize']));
                        }
                        echo $this->Form->input('OfferDetails.'.$key.'.discountAmt',array('type'=>'text','class'=>'form-control valid serialize','placeholder'=>'Enter Price','label'=>'Price','div'=>false,'value'=>$details['discountAmt']));
                    echo '<span class="blue">(Enter price for item if applicable)</span>';
                    ?>
                <?php
                    }
                
                } ?>
            </div>
             
            
            
            
            
	    <div class="form-group form_margin">
                <div style="float:left;">
                    <label>Upload Image</label>
                    <?php echo $this->Form->input('Offer.imgcat',array('type'=>'file','div'=>false));
                    
                    echo $this->Form->error('Item.offerImage');?>
                </div>
                
                
                <?php
		$EncryptOfferID=$this->Encryption->encode($this->request->data['Offer']['id']);
		?>
		<div style="float:right;">
		<?php
		if($this->request->data['Offer']['imgcat']){
			echo $this->Html->image('/Offer-Image/'.$this->request->data['Offer']['imgcat'],array('alt' => 'Item Image','height'=>150,'width'=>150,'style'=>'border:1px solid #000000;margin:5px 0px 5px 5px;','title'=>'Offer Image'));
			echo $this->Html->link("X",array('controller' => 'Offers', 'action' => 'deleteOfferPhoto', $EncryptOfferID),array('confirm' => 'Are you sure to delete Offer Photo?','title'=>'Delete Photo','style'=>'vertical-align:top;margin-right:10px;font-size:18px;font-weight:bold;'));
		}
		?>
		</div>	
                
                
                
            </div>
            
	     <div class="form-group form_margin">		 
                <label>Is Fixed Price</label><span>&nbsp;&nbsp;</span>                  
		<?php
                    echo $this->Form->checkbox('Offer.is_fixed_price');                    
                ?>
                <br/>
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
    
    <div id="showvalue"></div>
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
//                var texts= $(".serialize").serialize();
//                $("#showvalue").html(texts);
//		if (catgoryId) {	
//			$.ajax({
//                            url: "/sizes/getMultipleItemSizes/"+catgoryId, success: function(result){		
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