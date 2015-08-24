<?php ?>
<!-- main content start here -->
<div class="main-content clearfix">
    <div class="main-rgt-content clearfix">
         <?php echo $this->Session->flash(); ?>
        <div class="inner-sml-form online-order-frame">
                <div class="online-order clearfix">
                    <fieldset class="single-col">
                        <legend><?php echo __('My Coupons');?></legend>
                            <!-- FORM VIEW -->
                            <div class="resp-tabs-container">
                                <!-- PROPERTY DETAILS -->
                                <div>
                                    <div class="repeat-deatil">                                              
                                        <div class="responsive-table" style="margin-top:-1px;">
                                            <table class="table table-striped order-history-table">
                                                <tr>
                                                    <th><?php echo __('Coupon Code');?></th>
                                                    <th><?php echo __('Description');?></th>
                                                    <th><?php echo __('Status');?></th>
                                                    <th><?php echo __('Action');?></th>
                                                </tr>
                                                <?php if(!empty($myCoupons)){ foreach($myCoupons as $coupon) { ?>
                                                <tr>
                                                    <td><?php echo $coupon['Coupon']['coupon_code'];?></td>
                                                    <td><?php echo $coupon['Coupon']['name'].' - '; 
                                                    if($coupon['Coupon']['discount_type'] == 2){
                                                        echo $coupon['Coupon']['discount'].__('%').__(' off on MRP');
                                                    } else {
                                                        echo __('$').$coupon['Coupon']['discount'].__(' off on MRP');
                                                    }?></td>
                                                <td><?php if($coupon['Coupon']['used_count'] >= $coupon['Coupon']['number_can_use']){
                                                    echo __('Expired');
                                                } else {
                                                    echo __('Active');
                                                }?></td>
                                                    <td><?php echo $this->Html->link(__('Delete'),array('controller'=>'coupons','action'=>'deleteUserCoupon',$encrypted_storeId,$encrypted_merchantId,$this->Encryption->encode($coupon['UserCoupon']['id'])),array('confirm' => __('Are you sure you want to delete this coupon?'),'class'=>'btn btn-primary','style'=>'text-decoration:none;'));?></td>
                                                </tr>
                                                <?php } } else {
                                                    echo '<tr><td>'.__('No coupon found').'</td></tr>';
                                                }?>
                                            </table>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <!-- /FROM VIEW -->
                    </fieldset>
                </div>
        </div>
    </div>
</div><!-- /main content end -->
 </div><!-- /right side end -->
        <div class="clearfix"></div>