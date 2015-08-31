<?php ?>
<!-- main content start here -->
<div class="main-content clearfix">
    <div class="main-rgt-content clearfix">
         <?php echo $this->Session->flash(); ?>
        <div class="inner-sml-form online-order-frame">
            <form name="select-order-type" method="post" action="javascript:void(0);">
                <div class="online-order clearfix">
                    <fieldset class="single-col">
                        <legend><?php echo __('Favorite and Order History');?></legend>
                        <div id="horizontalTab" class="col-xs-12">
                            <!-- TABS -->
                            <ul class="resp-tabs-list">
                                <li><?php echo $this->Html->link(__('My Favorite'),array('controller'=>'orders','action'=>'myFavorites',$encrypted_storeId,$encrypted_merchantId));?></li>
                                <li><?php echo $this->Html->link(__('My Orders'),array('controller'=>'orders','action'=>'myOrders',$encrypted_storeId,$encrypted_merchantId),array('style'=>'background:#F5F5F4;'));?></li>
                            </ul>
                            <!-- /TABS -->

                            <!-- FORM VIEW -->
                            <div class="resp-tabs-container">
                                <div>  
                                            <?php if(!empty($myOrders)) { foreach($myOrders as $orders) {  ?>
                                    <div class="repeat-deatil">                                              
                                        <div class="order-history-detail clearfix">
                                            <div class="order-history-detail-lt">
                                                <p> <span>Order Id: <?php echo $orders['Order']['order_number'];?></span>|<span>Cost: $<?php echo $orders['Order']['amount'];?><innerTag class='greyFont'> <?php echo ' - '.$orders['OrderStatus']['name'];?></innerTag></span> </p>
                                                <p> <?php if($orders['Order']['seqment_id'] == 1){
                                                    echo 'Dine-In';
                                                } elseif ($orders['Order']['seqment_id'] == 2) {
                                                    echo 'PickUp';
                                                } elseif($orders['Order']['seqment_id'] == 3){
                                                echo $orders['DeliveryAddress']['name_on_bell'].', '.$orders['DeliveryAddress']['address'].' ,'.$orders['DeliveryAddress']['city']; }?></p>
                                            
                                            </div>
                                            <div class="button">
                                                            <?php echo $this->Html->link('Re-Order','javascript:void(0);',array('class'=>'btn btn-primary reorder','name'=>$this->Encryption->encode($orders['Order']['id'])));   
                                                            if (!in_array($orders['Order']['id'],$compare))
                                                                {
                                                                    echo $this->Html->link('Add to Fav',array('controller'=>'orders','action'=>'myFavorite',$encrypted_storeId,$encrypted_merchantId,$this->Encryption->encode($orders['Order']['id'])),array('confirm' => 'Are you sure you want to add this order to your favorite list ?','class'=>'btn btn-primary'));
                                                                }
                                                             ?>

                                            </div>
                                        </div>

                                        <div class="responsive-table" style="margin-top:-1px;">
                                            <table class="table table-striped order-history-table">
                                                <tr>
                                                    <th><?php echo __('Items');?></th>
                                                    <th><?php echo __('Size');?></th>
                                                    <th><?php echo __('Type');?></th>
                                                    <th><?php echo __('Add-ons');?></th>
                                                    <?php 
                                                                if($orders['Order']['order_status_id'] == 5 || $orders['Order']['order_status_id'] == 7){ ?>
                                                    <th></th>
                                                                <?php } ?>
                                                </tr>
                                                            <?php  foreach($orders['OrderItem'] as $order){?>
                                                <tr>
                                                    <td><?php echo $order['quantity'].'X'.$order['Item']['name'];?><br>
                                                    <?php if(!empty($order['OrderOffer'])){
                                                        echo "<innerTag class='greyFont'>Offer Items :</innerTag>"; 
                                                        foreach($order['OrderOffer'] as $offer){
                                                            echo '<br/>'.$offer['quantity'].'X'.$offer['Item']['name'];
                                                        }
                                                        
                                                    }?>
                                                    </td>
                                                    <td><?php if(!empty($order['Size'])) { echo $order['Size']['size'];} else { echo ' - '; }?></td>
                                                    <td><?php if(!empty($order['Type'])) { echo $order['Type']['name'];} else { echo ' - '; }?></td>
                                                    <td>
                                                            <?php if(!empty($order['OrderTopping'])) { $prefix = ''; foreach($order['OrderTopping'] as $topping) { 
                                                               echo $prefix . '"' .$topping['Topping']['name'] . '"';
                                                                $prefix = ', ';
                                                            }} else { echo ' - '; }?> </td>

                                                                <?php 
                                                                if($orders['Order']['order_status_id'] == 5 || $orders['Order']['order_status_id'] == 7){
                                                                if(!empty($order['StoreReview'])){ 
                                                                        if($order['StoreReview']['is_approved'] == 1){ ?>
                                                    <td><span class='review' name=<?php echo $this->Encryption->encode($order['Item']['name']);?> status=<?php echo $this->Encryption->encode('Done');?>  orderId=<?php echo $this->Encryption->encode($order['order_id']);?> orderItemId=<?php echo $this->Encryption->encode($order['id']);?>><input type="number" class="rating" min=0 max=5 data-glyphicon=0 value=<?php echo $order['StoreReview']['review_rating'];?> ></span></td>
                                                            
                                                                        <?php } else { ?>
                                                <td><span class='review' name=<?php echo $this->Encryption->encode($order['Item']['name']);?> status=<?php echo $this->Encryption->encode('Done');?> orderId=<?php echo $this->Encryption->encode($order['order_id']);?> orderItemId=<?php echo $this->Encryption->encode($order['id']);?>><input type="number" class="rating" min=0 max=5 data-glyphicon=0 value=0 ></span></td>
                                                                            <?php }  ?>

                                                                <?php } else { ?>
                                                <td><span class='review' name=<?php echo $this->Encryption->encode($order['Item']['name']);?> status=<?php echo $this->Encryption->encode('Pending');?> orderId=<?php echo $this->Encryption->encode($order['order_id']);?> orderItemId=<?php echo $this->Encryption->encode($order['id']);?>><input type="number" class="rating" min=0 max=5 data-glyphicon=0 value=0 ></span></td>
                                                                <?php } }?> </tr><?php }?>

                                            </table>
                                        </div>
                                    </div>
                                             <?php }} else { ?>
                                                    <div class="repeat-deatil">                                              
                                       

                                        <div class="responsive-table" style="margin-top:-1px;">
                                            <table class="table table-striped order-history-table">
                                                <tr>
                                                   <td style="text-align: center;"><?php echo __("No order has been placed yet");?></td>

                                                </tr>
                                                    

                                            </table>
                                        </div>
                                    </div>
                                                    
                                                <?php } ?>

                                </div>
                            </div>
                            <!-- /FROM VIEW -->
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
    </div>
</div><!-- /main content end -->
 </div><!-- /right side end -->
        <div class="clearfix"></div>
<script>
    $(document).ready(function () {
        $('.review').click(function () {
            var orderItemId = $(this).attr('orderItemId');
            var orderId = $(this).attr('orderId');
            var status = $(this).attr('status');
            var orderName = $(this).attr('name');
            window.location = "/Orders/rating/<?php echo $encrypted_storeId;?>/<?php echo $encrypted_merchantId;?>/" + orderItemId + "/" + orderId + "/" + status+ "/" + orderName;

        });
        
        $('.reorder').click(function () {
            var orderId = $(this).attr('name');
            window.location = "/Users/customerDashboard/<?php echo $encrypted_storeId;?>/<?php echo $encrypted_merchantId;?>/" + orderId ;
         
        });
    });
</script>