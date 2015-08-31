<?php

/* echo "<div>
    <dl style='width:200px; float:left;'>
	<dt style='float:left; width:120px; padding-right: 10px; border-bottom:1px solid #d0d0d0; padding:10px; margin:0; '>".$quantity."</dt>
	<dd style='margin-left:120px; float:none; width:auto;border-bottom:1px solid #d0d0d0; padding:10px; margin:0;'>".$price."</dd>
	
	<dt style='float:left; width:120px; padding-right: 10px; border-bottom:1px solid #d0d0d0; padding:10px; margin:0; '>".$type."</dt>
	<dd style='margin-left:130px; float:none; width:auto;border-bottom:1px solid #d0d0d0; padding:10px; margin:0;'>".$size." </dd>
	
	<dt style='float:left; width:120px; padding-right: 10px; border-bottom:1px solid #d0d0d0; padding:10px; margin:0; '>".@$defaultAdd-on."</dt>
	<dd style='margin-left:120px; float:none; width:auto;border-bottom:1px solid #d0d0d0; padding:10px; margin:0;'>".@$paidtopping."</dd>
    </dl>
    <div class='clr'></div>
</div>"*/
$gross_amount=0;

?>
<div class='loader1'> <div class="loader-inner"></div> </div>
<legend>My Order</legend>

<div class="info-box">
    <!--<p class="message"></p>-->
    <p>You can add or remove any of the available choices.</p>
    <p>When you finish with your choices, click on 'Continue' button for a final overview and confirmation of your order.</p>
</div>
                                     <?php if(isset($final_cart) && !empty($final_cart)){?>
<div class="coupon-code-box">
    <label for="coupon-code">Coupon Code</label>
    <?php if(isset($_SESSION['Coupon'])){ ?>
        <input class="inbox coupon-code" type="text" name="coupon code" placeholder="" value='<?php echo $_SESSION['Coupon']['Coupon']['coupon_code'];?>'/> 
    <?php } else { ?>
        <input class="inbox coupon-code" type="text" name="coupon code" placeholder="" /> 
    <?php } ?>
    
    <input type="button" value="Apply" id='inprogress' />
    <?php if(!empty($coupon_data)){ 
        if($coupon_data == 1){
            echo '<span style="float:left;color:red;">Please enter valid coupon code</span>';
        } elseif($coupon_data == 2){
            echo '<span style="float:left;color:red;">Coupon has been expired.</span>';
        }}  ?>
    <?php if(isset($_SESSION['Coupon'])){ 
            if($_SESSION['Coupon']['Coupon']['discount_type'] == 1){
                echo '<span style="float:left;color:green;">You have got $'.$_SESSION['Coupon']['Coupon']['discount'].' off on total amount</span>'; 
            } else {
                echo '<span style="float:left;color:green;">You have got '.$_SESSION['Coupon']['Coupon']['discount'].'% off on total amount</span>'; 
            }
        } ?>
</div>
       <?php echo $this->Form->create('CartInfo',array('url'=>array('controller'=>'Products','action'=>'orderDetails')));?>                                
<div class="responsive-table">


    <table class="table">
        <tr>
            <td></td>
            <td>Qty</td>

            <td>Item Name</td>
            <td class="text-center">Price</td>
        </tr>
                                        	<?php
$gross_amount=0;
foreach($final_cart as $session_key =>$row){
	  
	    $defaulttopping="";
	    $paidtopping="";
	    $title="";
	    $gross_amount=$gross_amount+@$row['Item']['final_price'];
	    $quantity=$row['Item']['quantity'];
	    $price=$row['Item']['actual_price'];
	     $type="";
	     if(isset($row['Item']['type'])){
		$type=$row['Item']['type'];
	     }
	     $size="";
	    if(isset($row['Item']['size'])){
		$size=$row['Item']['size'];
	     }
	    if(isset($row['choice']['defaulttoppings'])){
	      $defaulttopping="";
	      foreach($row['choice']['defaulttoppings'] as $val){
		if($val){
		    
		     $defaulttopping .=$val.",";
		}else{
		    $defaulttopping="";
		}
	       
	    
	      }
	       
	      $defaulttopping=rtrim($defaulttopping, ",");
	      $defaulttopping =$defaulttopping;
	    }
	    if(isset($row['Item']['PaidTopping'])){
	       
		
	      $paidtopping="";
	      foreach($row['Item']['PaidTopping'] as $keys=>$vals){
		$paidtopping .=$keys.",";
	      }
		//$paidtopping=rtrim($paidtopping, ",");
	      $paidtopping =substr($paidtopping,0,-1);
	    
	    }
	    
	    //echo $paidtopping;die;
$description="";
if($defaulttopping && $paidtopping && $type){
			
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Type:{$type}</li><br/>
<li>Add-on:{$paidtopping}</li><br/>
<li>Default Add-on:{$defaulttopping}</li><br/>



EOT;
}elseif(($defaulttopping) && ($paidtopping) && (!$type)){

$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Default Add-on:{$defaulttopping}</li><br/>
<li>Add-on:{$paidtopping}</li><br/>
</ul>

EOT;
}elseif((!$defaulttopping) && ($paidtopping) && ($type)){
    
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Type:{$type}</li><br/>
<li> Add-on:{$paidtopping}</li><br/>
</ul>



EOT;
}elseif(($defaulttopping) && (!$paidtopping) && ($type)){
    
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Type:{$type}</li><br/>
<li>Add-on:{$defaulttopping}</li><br/>
</ul>



EOT;
}elseif((!$defaulttopping) && (!$paidtopping) && (!$type) && (!$size)){
    
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>

</ul>




EOT;
}elseif(($defaulttopping) && (!$paidtopping) && (!$type)){
    
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Default Add-on:{$defaulttopping}</li><br/>
</ul>




EOT;
}
elseif((!$defaulttopping) && (!$paidtopping) && ($type)){
    
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Type:{$type}</li><br/>
</ul>




EOT;
}
elseif((!$defaulttopping) && ($paidtopping) && ($type)){
    
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Add-on:{$paidtopping}</li><br/>

</ul>




EOT;
}elseif((!$defaulttopping) && ($paidtopping) && (!$type)){
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Size:{$size}</li><br/>
<li>Add-on:{$paidtopping}</li><br/>

</ul>




EOT;
}elseif((!$defaulttopping) && (!$paidtopping) && ($type)){
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Type:{$type}</li><br/>


</ul>




EOT;
}elseif((!$defaulttopping) && (!$paidtopping) && (!$type) && ($size)){
    
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Size:{$size}</li><br/>

</ul>




EOT;
}
else{
$description = <<<EOT

<ul>

<li>Quantity:{$quantity}</li><br/>
<li>Price($):{$price}</li><br/>
<li>Type:{$type}</li><br/>


</ul>



EOT;
}
						  
						    
?>
        <tr>
            <td class="remove" id="<?php echo $session_key;?>"><?php echo $this->Html->image('remove.png',array('title'=>'Remove'));?></td>
            <td class="cart-row" id="<?php @$row['Item']['id']; ?>" key="<?php echo $session_key; ?>"><input class="inbox quantity" type="number" name="quantity"  value="<?php echo @$row['Item']['quantity'] ?>" min="1"  max="100" step="1" value="1" > </td>

            <td class="item-id hover" id="<?php @$row['Item']['id'];?>"  > <a class="hover" data-tooltip="<?php  echo $description;?>"><?php echo @$row['Item']['name'];?><br/><?php echo @$row['Item']['OfferItemName'];?></a></td>
            <td class="text-center" >$<?php echo @number_format($row['Item']['final_price'],2);?></td>
        </tr>


                                              <?php }?>
        <tr>
            <td></td>
            <td></td>
            <td>Total</td>
            <td class="text-center">$
                    <?php if($gross_amount){
                        if(isset($_SESSION['Coupon'])){ 
                        if($_SESSION['Coupon']['Coupon']['discount_type'] == 1){ // Price
                            $gross_amount = $gross_amount - $_SESSION['Coupon']['Coupon']['discount'];
                        } else { // Percentage
                            $discount_amount = $gross_amount * ($_SESSION['Coupon']['Coupon']['discount']/100);
                            $gross_amount = $gross_amount - $discount_amount;
                            
                        }
                        } 
                        echo number_format($gross_amount,2);
                    }else{
                       $gross_amount=0;
                    }
						 
						  //$_SESSION['cart']['grandTotal']=$gross_amount;
						 
						 ?></td>
        </tr>


    </table>
</div>
				     <?php if($this->Session->check('cart')){?>
<span class="cls_no_deliverable"></span>
					    <?php /* $storeInfo=$this->Common->getStoreDetail($this->Session->read('store_id'));
					       $minimum_price=$storeInfo['Store']['minimum_order_price'];*/
					    ?>
<div> <input type="submit" value="Continue" class="makeorder" /> </div>

				    <?php  }?>
				     <?php echo $this->Form->end();?>
                                    <?php }else{   ?>

<div class="info-box">
    <p class="no-order">Your cart is empty.</p>
    <p></p>
</div>



                                    <?php } ?>

<div>  </div>
<script>

    $(document).ready(function () {
        $('.cls_no_deliverable').css('display', 'none');
        $('.makeorder').click(function () {
            var total = "<?php echo $gross_amount;?>";
        <?php $storeInfo=$this->Common->getStoreDetail($this->Session->read('store_id'));
          $minimum_price=$storeInfo['Store']['minimum_order_price'];
        ?>
            var min_price =<?php echo $minimum_price;?>;
            if ((total) >= (min_price)) {

            } else {

                var message = "Order total should be equal or more then $<?php  echo $minimum_price; ?> (minimum order price)";
                $('.cls_no_deliverable').html(message);
                $('.cls_no_deliverable').css('display', 'block');
                $(".cls_no_deliverable").fadeOut(6000);
                return false;
            }

        });
        $('.remove').on('click', function () {
            $(".loader1").css('display', 'block');
            var index_id = $(this).attr('id'); //index of session array 
            $.ajax({
                type: 'post',
                url: '/Products/removeItem',
                data: {'index_id': index_id},
                success: function (result) {
                    $(".loader1").css('display', 'none');
                    //$("#loader2").css('display','none');

                    if (result) {

                        $('.online-order').html(result);
//                            var message ="Item has been removed from the cart";
//					$('.message').html(message);
//                                        $('.message').css('display','block');
//					$(".message").fadeOut(6000);
                    }


                }
            });


        });
        $('#inprogress').click(function () {
            var coupon_code = $('.coupon-code').val();
            $.ajax({
            type: 'post',
            url: '/Products/fetchCoupon',
            data: {'coupon_code': coupon_code},
            success: function (result) {
                if (result) {
                    $('.float-right').html(result);
                }
            }
            });
            

        });

        $('.quantity').on('change', function () {

            var index_id = $(this).parent().attr('Key'); //index of session array
            var value = this.value;
            if (value <= 0) {
                return false;
            }
            $.ajax({
                type: 'post',
                url: '/Products/addQuantity',
                data: {'index_id': index_id, 'value': value},
                success: function (result) {
                    $(".loader1").css('display', 'none');
                    if (result) {
                        $('.online-order').html(result);
                    }
                }
            });


        });
//  $('.item-id').tooltip();           
    });

    // Generated by CoffeeScript 1.6.3
    (function () {
        $(function () {
            $.tips({
                action: 'focus',
                element: '.error',
                tooltipClass: 'error'
            });
            $.tips({
                action: 'click',
                element: '.clicktips',
                tooltipClass: 'warning',
                preventDefault: true
            });
            return $.tips({
                action: 'hover',
                element: '.hover',
                preventDefault: true,
                html5: false
            });
        });

    }).call(this);


</script>

