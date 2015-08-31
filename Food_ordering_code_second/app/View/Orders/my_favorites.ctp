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
                                <li><?php echo $this->Html->link(__('My Favorite'),array('controller'=>'orders','action'=>'myFavorites',$encrypted_storeId,$encrypted_merchantId),array('style'=>'background:#F5F5F4;'));?></li>
                                <li><?php echo $this->Html->link(__('My Orders'),array('controller'=>'orders','action'=>'myOrders',$encrypted_storeId,$encrypted_merchantId));?></li>
                            </ul>
                            <!-- /TABS -->

                            <!-- FORM VIEW -->
                            <div class="resp-tabs-container">
                                <!-- PROPERTY DETAILS -->
                                <div>
                                            	<?php if(!empty($myFav)){ foreach($myFav as $orders) {  ?>
                                    <div class="repeat-deatil">                                              
                                        <div class="order-history-detail clearfix">
                                            <div class="order-history-detail-lt">
                                                <p> <span><?php echo __('Order Id:');?> <?php echo $orders['Order']['order_number'];?></span>|<span><?php echo __('Cost:');?> $<?php echo $orders['Order']['amount'];?><innerTag class='greyFont'> <?php echo ' - '.$orders['Order']['OrderStatus']['name'];?></innerTag></span> </p>
                                                <p> <?php if($orders['Order']['seqment_id'] == 1){
                                                    echo 'Dine-In';
                                                } elseif ($orders['Order']['seqment_id'] == 2) {
                                                    echo 'PickUp';
                                                } elseif($orders['Order']['seqment_id'] == 3){
                                                echo $orders['Order']['DeliveryAddress']['name_on_bell'].', '.$orders['Order']['DeliveryAddress']['address'].' ,'.$orders['Order']['DeliveryAddress']['city']; }?></p>
                                            </div>
                                            <div class="button">
                                                <?php echo $this->Html->link('Re-Order','javascript:void(0);',array('class'=>'btn btn-primary reorder','name'=>$this->Encryption->encode($orders['Order']['id'])));?>
                                                <?php echo $this->Html->link(__('Remove'),array('controller'=>'orders','action'=>'myFavorite',$encrypted_storeId,$encrypted_merchantId,$this->Encryption->encode($orders['Order']['id']),$this->Encryption->encode($orders['Favorite']['id'])),array('confirm' => __('Are you sure you want to remove this order from your favorite list ?'),'class'=>'btn btn-primary'));?>
                                            </div>
                                        </div>

                                        <div class="responsive-table" style="margin-top:-1px;">
                                            <table class="table table-striped order-history-table">
                                                <tr>
                                                    <th><?php echo __('Items');?></th>
                                                    <th><?php echo __('Size');?></th>
                                                    <th><?php echo __('Type');?></th>
                                                    <th><?php echo __('Add-ons');?></th>

                                                </tr>
                                                            <?php  foreach($orders['Order']['OrderItem'] as $order){ ?>

                                                <tr>
                                                    <td><?php echo $order['quantity'].'X'.$order['Item']['name'];?><br>
                                                    <?php if(!empty($order['OrderOffer'])){
                                                        echo "<innerTag class='greyFont'>Offer Items :</innerTag>"; 
                                                        foreach($order['OrderOffer'] as $offer){
                                                            echo '<br/>'.$offer['quantity'].'X'.$offer['Item']['name'];
                                                        }
                                                        
                                                    }?>
                                                    </td>
                                                    <td><?php if(!empty($order['Size'])) { echo $order['Size']['size']; }else { echo ' - ';} ?></td>
                                                    <td><?php if(!empty($order['Type'])) { echo $order['Type']['name']; } else { echo ' - ';}?></td>
                                                    <td> <?php if(!empty($order['OrderTopping'])) {
                                                                $prefix = ''; foreach($order['OrderTopping'] as $topping) { 
                                                               echo $prefix . '"' .$topping['Topping']['name'] . '"';
                                                                $prefix = ', ';
                                                    } } else {echo ' - '; }?>

                                                               </td></tr><?php } ?>

                                            </table>
                                        </div>
                                    </div>
                                                <?php }} else { ?>
                                                    <div class="repeat-deatil">                                              
                                       

                                        <div class="responsive-table" style="margin-top:-1px;">
                                            <table class="table table-striped order-history-table">
                                                <tr>
                                                   <td style="text-align: center;"><?php echo __("No order has been added into favorite list");?></td>

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
        $('.reorder').click(function () {
            var orderId = $(this).attr('name');
            window.location = "/Users/customerDashboard/<?php echo $encrypted_storeId;?>/<?php echo $encrypted_merchantId;?>/" + orderId ;
         
        });
    });
</script>