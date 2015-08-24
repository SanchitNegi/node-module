<div class='loader'> <div class="loader-inner"></div> </div>
<legend><?php echo __('Offer');?> - <?php echo $getOffer['Offer']['description'];?></legend>
    <?php foreach($getOffer['OfferDetail'] as $off) { ?>
        <div>
            <div class="item-pic">
                <div class="item-pic-title">
                    <h2 align="center" style="font-size: 14px; padding-top: 5px;"><?php echo $off['Item']['name'];?></h2>
                    <h4 align="center" style="font-size: 13px; padding-bottom: 5px; padding-top: 3px;"><?php echo $off['Item']['description'];?></h2>
                </div>		    					    
                    <?php if(isset($off['Item']['image']) && $off['Item']['image']){
                        $image="/MenuItem-Image"."/".$off['Item']['image'];
                        echo $this->Html->image($image);
                    }
                if($getOffer['Offer']['is_fixed_price'] == 1){  ?>
                <span class="price-overlay">
                    <?php 
                    echo $off['quantity'].' ';
                    if(!empty($off['Size'])){
                        echo $off['Size']['size'].' ';
                    }
                    if(!empty($off['Type'])){
                        echo $off['Type']['name'];
                    }
                    ?>
                </span>
                <?php } else if($getOffer['Offer']['is_fixed_price'] == 0){ ?> 
                <span class="price-overlay">
                    <?php 
                    echo $off['quantity'].' ';
                    if(!empty($off['Size'])){
                        echo $off['Size']['size'].' ';
                    }
                    if(!empty($off['Type'])){
                        echo $off['Type']['name'];
                    }
                    if($off['discountAmt'] == 0){
                        echo __(' Free');
                    } else {
                        echo ' @ $'.$off['discountAmt'];
                    }
                     ?>
                </span>
                <?php } ?>
            </div>
        </div>
    <?php } 
            if($getOffer['Offer']['is_fixed_price'] == 1){  ?>
                <span class="price-overlay">
                    <?php 
                    if($getOffer['Offer']['offerprice'] == 0){
                        echo $getOffer['Item']['name'].' with all these items Free';
                    } else {
                        echo $getOffer['Item']['name'].' with all these items @ $'.$getOffer['Offer']['offerprice'];
                    }      
                    ?>
                </span>
            <?php } ?>
    <div style='margin-left: 70px;'>
        <?php echo $this->Form->button('Continue',array('id'=>'continue','type' => 'button','class' => 'float-left btn-cancel'));
        echo $this->Form->button('Cancel', array('id'=>'cancel','type' => 'button','class' => 'float-left btn-cancel')); ?>
        </div>
</div>	
<script>
    $('#continue').click(function (e) {
        $.ajax({
            type: 'post',
            url: '/Products/cart',
            data: $(this).serialize(),
            success: function (result) {
                $('.online-order').html(result);
            }
        });
    });
    $('#cancel').on('click', function () {
        $.ajax({
            type: 'post',
            url: '/Products/cancelOffer',
            success: function (result) {
                $('.float-left').html(result);
            }
        });
    });
    
					   
</script>
<style>
    .item-pic img {
        width: 35%;
    }
</style>