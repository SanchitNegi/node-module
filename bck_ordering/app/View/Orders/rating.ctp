<div class="main-content clearfix">
    <div class="main-rgt-content clearfix">
        <?php if($status == 'Pending'){ ?>
	<?php echo $this->Session->flash(); ?>
            <div class="inner-sml-form">
                <?php   echo $this->Form->create('StoreReview', array('url'=>array('controller'=>'orders','action'=>'rating'),'inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'ReviewRating'));
                        echo $this->Form->input('StoreReview.user_id',array('type'=>'hidden','value'=>$user_id));
                        echo $this->Form->input('StoreReview.item_name',array('type'=>'hidden','value'=>$orderName));
                        echo $this->Form->input('StoreReview.order_id',array('type'=>'hidden','value'=>$order_id));
                        echo $this->Form->input('StoreReview.store_id',array('type'=>'hidden','value'=>$decrypt_storeId));
                        echo $this->Form->input('StoreReview.merchant_id',array('type'=>'hidden','value'=>$decrypt_merchantId));
                        echo $this->Form->input('StoreReview.order_item_id',array('type'=>'hidden','value'=>$order_item_id));
                  ?>
                <fieldset>
                    <legend><?php echo __('Review & Rating For - ');?> <?php echo $orderName;?></legend>
                    <dl class="reg-wrap">
                        <dt>Rating</dt>
                        <dd>
                            <?php echo $this->Form->input('StoreReview.review_rating',array('data-glyphicon'=>0,'type'=>'number','class'=>'rating','max'=>5,'min'=>0,'label'=>false,'div'=>false));?>
                        </dd>

                        <dt>Review</dt>
                        <dd>
                            <?php echo $this->Form->input('StoreReview.review_comment',array('type'=>'textarea','class'=>'usrname-input txtbx','placeholder'=>'Enter Your Review','maxlength'=>'200','label'=>false,'div'=>false));
                             echo $this->Form->error('StoreReview.review_comment');  ?>
                        </dd>
                    </dl>
                    <div class="change-pass-wrap clearfix">
                        <dl class="clearfix reg-wrap">
                            <dt>&nbsp;</dt>
                            <dd>
                            <dd>
                                <?php echo $this->Form->submit('Save',array('class'=>'float-left'));?>
				<?php echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/orders/myOrders/$encrypted_storeId/$encrypted_merchantId'",'class' => 'float-left btn-cancel')); ?>
                            </dd>
                        </dl>
                    </div>
            </fieldset>
                <?php echo $this->Form->end();?>
        </div>
   
<?php } ?>
            <div class="inner-sml-form online-order-frame">
                <div class="online-order clearfix">
                    <fieldset class="single-col">
                        <legend><?php echo __('Reviews For - ');?> <?php echo $orderName;?></legend>
                            <!-- FORM VIEW -->
                            <div class="resp-tabs-container">
                                <!-- PROPERTY DETAILS -->
                                <div>
                                    <div class="repeat-deatil">       
                                        <?php if(!empty($allReviews)) { foreach($allReviews as $reviews) { ?>
                                        <div class="order-history-detail clearfix">
                                            
                                            <div class="order-history-detail-lt" style="width:100%;">
                                                <p class="review-margin pline-height"> <span><tag  class='leftFont'><innerTag class='greyFont'><?php echo $reviews['User']['salutation'].' '.ucfirst($reviews['User']['fname']).' '.ucfirst($reviews['User']['lname']);?></innerTag> &nbsp;<?php echo __('Rated');?></tag> <input disabled="true" class="rating" data-glyphicon=0 value=<?php echo $reviews['StoreReview']['review_rating'];?> ></span>
                                                          
                                            </p>
                                                <p class="review-margin"><?php echo ucfirst($reviews['StoreReview']['review_comment']);?></p>
                                                <p class="review-margin greyFont"><?php echo date('d M', strtotime($reviews['StoreReview']['created'])).' at '.date('H:i a', strtotime($reviews['StoreReview']['created']));?></p>
                                            </div>
                                            
                                        </div>
                                        <?php }} else { ?>
                                            <div class="order-history-detail clearfix">
                                            
                                            <div class="order-history-detail-lt">
                                                <p class="review-margin"> <span><?php echo __('No review found');?></span> </p>
                                            </div>
                                            
                                        </div>
                                       <?php } ?>
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
        
<script>
    $("#ReviewRating").validate({
        rules: {
            "data[StoreReview][review_comment]": {
                required: true
            },
        },
        messages: {
            "data[StoreReview][review_comment]": {
                required: "Please provide your comments.",
            }
        }
    });
</script>
<!--Mid Section Ends -->
<style>
.rating-xs {
    float: left;
    font-size: 1.5em;
    margin-left: 15px;
}
</style>    