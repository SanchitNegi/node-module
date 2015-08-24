   <!-- main content start here -->
<div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
                	<div class="inner-sml-form online-order-frame">
                        	<div class="online-order clearfix">
<fieldset class="float-left">
			    <?php echo $this->element('item-pannel');?>
</fieldset>
                                 <fieldset class="float-right">
                               <?php echo $this->element('cart-element');?>
                             </fieldset>
                            </div>
                        
			
                    </div>
                </div>
		
</div></div><!-- /main content end -->
<div class="clearfix"></div>
                                                            
<script>
$("document").ready(function() {
    var orderId = '<?php echo $orderId;?>'; 
    if(orderId){
            $.ajax({
                type: 'post',
                url: '/Products/reorder',
                data: {'orderId': orderId},					    
                success:function(result){
                    var parsedJson = $.parseJSON(result);
                    if(parsedJson.count == 0){
                        alert('Sorry order cannot be placed, Items in your order are not available.');
                    } else {
                        if(parsedJson.item >= 1){
                            var order = confirm('There are few changes in your order as few items, size, type and toppings are not avavilable now. Are you want to continue ?');
                            if(order){
                                $.ajax({
                                type: 'post',
                                url: '/Products/fetchReorderProduct',
                                data: {},					    
                                success:function(result2){
                                    if(result2 == 1){
                                       window.location = "/Products/items/<?php echo $encrypted_storeId;?>/<?php echo $encrypted_merchantId;?>";
                                    }
                                }
                            });
                            } else {
                                window.location = "/Orders/myOrders/<?php echo $encrypted_storeId;?>/<?php echo $encrypted_merchantId;?>";
                            }
                        } else {
                            $.ajax({
                                type: 'post',
                                url: '/Products/fetchReorderProduct',
                                data: {},					    
                                success:function(result2){
                                    if(result2 == 1){
                                       window.location = "/Products/items/<?php echo $encrypted_storeId;?>/<?php echo $encrypted_merchantId;?>";
                                    }
                                }
                            });
                        } 
                    } 
                }
            });
    }					   
});
</script>
	    