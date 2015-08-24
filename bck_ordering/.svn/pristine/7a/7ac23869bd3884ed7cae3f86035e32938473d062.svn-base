				    <?php
				     
				    if(isset($productInfo) && !empty($productInfo)) {?>
									<legend>Create Your Order</legend>
									<?php
				    
									       echo $this->Form->create('Item',array('url'=>array('controller'=>'Products','action'=>'addtoCart')));?>
				    
									<div class='loader'> <div class="loader-inner"></div> </div>	                        	
				    
				    <div>
					<div class="item-pic">
					    <div class="item-pic-title">
				    <h2 align="center" style="font-size: 14px; padding-top: 5px;"><?php echo $productInfo['Item']['name'];?></h2>
				    <h4 align="center" style="font-size: 13px; padding-bottom: 5px; padding-top: 3px;"><?php echo $productInfo['Item']['description'];?></h2>
					    </div>
					    
					    
					    
				    <?php
				    if(isset($productInfo['Item']['image']) && $productInfo['Item']['image']){
					  $image="/MenuItem-Image"."/".$productInfo['Item']['image'];
					  echo $this->Html->image($image);
				    }/*else{
					  $image="no_image.jpg";
					  echo $this->Html->image($image);
				    }*/
				    
				    ?>
				    <span class="price-overlay">
						<?php
				    if($default_price){
				    
				    echo "$".$default_price;
				    }?>
				    </span>
				    </div>
					 <?php
					 if($productInfo['Item']['sizeOnly']==2){// Type Only 
					 if($productInfo['ItemType']){?>
					
				    
				     
					<?php
					$options=array();
				       //echo "<pre>"; print_r($productInfo);die;
					//$default_value=$productInfo['ItemType'][0]['Type']['id'];
					
					foreach($productInfo['ItemType'] as $type){
					      //  echo "<pre>";print_r($type);die;
						if($type['Type']){
									
						       $options[$type['Type']['id']]=$type['Type']['name'];		    
						}else{
									
						}
					     
						
					}
				       // print_r($options);die;
				    $default_value="";
				    if($options){
				    
				    $default_type=array();
				    foreach($options as $type_value=>$type_name){
					    $default_type[]=$type_value;			    
				    }
				    $default_value=$default_type[0];
				    }				    
				    $attributes = array(
				    'legend' => false,
				    'class'=>'item_type',
				    'value' =>$default_value
				    
				    
				    
				    );
				    
									?>
						    <?php if($options){	?>	    
						    <div class="row-divide">
						<h3>Choose Type</h3>		    
					    <label><?php echo $this->Form->radio('type', $options, $attributes);?></label>
					 <?php  }?>
					</div>
					<?php }}?>
					  <?php
					 
					  if($productInfo['Item']['sizeOnly']==1 /*&& !empty($productInfo['ItemPrice']['Size'])*/){ //Size and Price
					  if($productInfo['ItemPrice']){
						$sizes=array();
					$attribute=array();
					//echo "hi";die;
					//$default_value=$productInfo['ItemPrice'][0]['Size']['id'];
				      // echo "<pre>";print_r($productInfo);die;
					foreach($productInfo['ItemPrice'] as $size){
						 //echo "<pre>";print_r($size);die;
						  if($size['Size']){
									
						       $sizes[$size['Size']['id']]=$size['Size']['size'];    
						}else{
									
						}
					       
					      
					 }
					 
					
					 $default_value="";
				    if($sizes){
				    
				    $default_type=array();
				    foreach($sizes as $size_value=>$size_name){
					    $default_type[]=$size_value;			    
				    }
				    $default_value=$default_type[0];
				    }				    
				    $attributes = array(
				    'legend' => false,
				    'class'=>'item_type',
				    'value' =>$default_value
				    
				    
				    
				    );
					
					$attributes = array(
					      'legend' => false,
					      'class'=>'item_price',
					       'value' => $default_value
					     
				       );
					 ?>
				     
					
						<?php if($sizes){?>
						<div class="row-divide">
						<h3>Choose Size</h3>
					     <label><?php echo $this->Form->radio('Item.price', $sizes, $attributes);?></label>
					     </div>	
					     <?php }?>
					     
					<?php }}?>
					
					<?php
				    //echo "<pre>";print_r($productInfo);
					if($productInfo['Item']['sizeOnly']==3){ //Both Size and Type
									
					     
					 if($productInfo['ItemType']){?>
				    
					<?php
					$options=array();
				       //echo "<pre>"; print_r($productInfo);die;
					//$default_value=$productInfo['ItemType'][0]['Type']['id'];
					
					foreach($productInfo['ItemType'] as $type){
					      //  echo "<pre>";print_r($type);die;
						if($type['Type']){
									
						       $options[$type['Type']['id']]=$type['Type']['name'];		    
						}else{
									
						}
					     
						
					}
				       // print_r($options);die;
				    $default_value="";
				    if($options){
				    
				    $default_type=array();
				    foreach($options as $type_value=>$type_name){
					    $default_type[]=$type_value;			    
				    }
				    $default_value=$default_type[0];
				    }				    
				    $attributes = array(
				    'legend' => false,
				    'class'=>'item_type',
				    'value' =>$default_value
				    
				    
				    
				    );
				    
									?>
						    <?php if($options){	?>	    
						    <div class="row-divide">
						<h3>Choose Type</h3>		    
					    <label><?php echo $this->Form->radio('type', $options, $attributes);?></label>
					 <?php  }?>
					</div>
					<?php }?>
					  <?php
				       
					  if($productInfo['ItemPrice']){
						$sizes=array();
					$attribute=array();
					
					//$default_value=$productInfo['ItemPrice'][0]['Size']['id'];
				       //echo "<pre>";print_r($productInfo);die;
					foreach($productInfo['ItemPrice'] as $size){
						 //echo "<pre>";print_r($size);die;
						  if($size['Size']){
									
						       $sizes[$size['Size']['id']]=$size['Size']['size'];    
						}else{
									
						}
					       
					      
					 }
					 
					 
					 $default_value="";
				    if($sizes){
				    
				    $default_type=array();
				    foreach($sizes as $size_value=>$size_name){
					    $default_type[]=$size_value;			    
				    }
				    $default_value=$default_type[0];
				    }				    
				    $attributes = array(
				    'legend' => false,
				    'class'=>'item_type',
				    'value' =>$default_value
				    
				    
				    
				    );
					
					$attributes = array(
					      'legend' => false,
					      'class'=>'item_price',
					       'value' => $default_value
					     
				       );
					 ?>
				     
					
						<?php if($sizes){?>
						<div class="row-divide">
						<h3>Choose Size</h3>
					     <label><?php echo $this->Form->radio('Item.price', $sizes, $attributes);?></label>
					     </div>	
					     <?php }?>
					     
							    
									
									
									
									
									
				    <?php }}?>
					<?php
				      
					
					if($productInfo['Topping']){?>
					<div class="row-divide last">
						<h3>Choose Add-on</h3>
					    <ul class="checkbox-listing clearfix">
					    <?php
					    //echo "<pre>";print_r($productInfo['Topping']);
					    //	echo "<pre>";print_r($productInfo['ItemDefaultTopping']);die;
				    
					    
					    foreach($productInfo['Topping'] as $topping){?>
				    
				    
						     
							 
						<li>
						    <label>			
						<?php
						 if($topping['ItemDefaultTopping']){
						    //echo "<pre>"; print_r($topping);die;
						      echo $this->Form->input('Item.defaulttoppings.'.$topping['ItemDefaultTopping'][0]['id'],array('type'=>'checkbox','label'=>$topping['name'],'class'=>'toppings default-topping','value'=>$topping['name'],'checked'=>true));
							
						  }else{
						      echo $this->Form->input('Item.toppings.'.$topping['id'],array('type'=>'checkbox','label'=>$topping['name'],'class'=>'toppings','value'=>$topping['id'],'type-name'=>$topping['name']));
							
							 
						  }?>
						
						  </label>
						</li>
									
					       <?php }?>
					       
						
					      
					    </ul>
					</div>
				    </div>
				    <?php }?>
				    
				    <div class='parant_cls_no_deliverable'>
				    <?php if($this->Session->check('Order')){
					    $is_delivery=$this->Session->read('Order.Item.is_deliverable');
					    if($is_delivery==1){
						    
						    echo $this->Form->submit('Add to cart');
					    }else{
						    echo "<span class='cls_no_deliverable'>This product is not deliverable for now.</span>";	    
					    }
				    }?>
				    </div>
				    </form>
				    <?php }else{?>
					    
									<div class='loader'> <div class="loader-inner"></div> </div>
									<legend>Create Your Order</legend>
									<div>
									    <div class="item-pic"> 
										     This Item is not available right now.
									    </div>
									</div>
				      
									
				    <?php }?>
				      
				      
				      
				      
				      
				    <script>
					   
					 $(document).ready(function(){
							    
						    
					   $('.item_price').on('click',function(){
					     
					      var size_id=$(this).val();
					      var item_id=<?php echo $this->Session->read('Order.Item.id');?>;
				    
					     
					      $.ajax({
							    url:"/Products/sizePrice",
							    type:"Post",
							    data: {sizeId: size_id,itemId:item_id},
							    success:function(result){
								     $("#loader2").css('display','none');
								     result='$'+result;
								     $('.price-overlay').html(result);
							    }
						    });
						  
						  
						  
					   });
					   
					    
					   $('.toppings').on('click',function(){    // It will fire an Ajax request to fetch price based on Toppings
					      var topping_id=$(this).val();
					      var item_id=<?php echo $this->Session->read('Order.Item.id');?>;
					      if (topping_id==0) {
									//code
					      }else{
					      if($(this).prop("checked") == true){
						   var checked=1;
						    
				    
						}else{
						   var checked=0;
						}
					     
					      $.ajax({
							    url:"/Products/fetchToppingPrice",
							    type:"Post",
							    data: {'toppingId': topping_id,'itemId':item_id,'checked':checked},
							    success:function(result){
								     if (result) {
									//code
									 $("#loader2").css('display','none');
									result='$'+result;
									$('.price-overlay').html(result);
								     }
								    
								     
								     
								     
							    }
						    });
					   }
						  
						  
						  
					   });
					   
                                           //return false;
                                           $('#ItemFetchProductForm').unbind('submit').submit(function(e){
                                           e.preventDefault();
    });
                                            
					   $('#ItemFetchProductForm').on('submit',function(e) {
                                                e.preventDefault();
						$('input[type="submit"]').attr('disabled','disabled');
						$(".loader").css('display','block');
                                                          
                                                $.ajax({
                                                  type: 'post',
                                                  url: '/Products/cart',
                                                  data: $(this).serialize(),
                                                  success:function(result){
                                                    $(".loader").css('display','none');
                                                    $('input[type="submit"]').removeAttr('disabled');
                                                        if(result){
                                                            $('.online-order').html(result);
                                                        }
                                                    }
                                                });   
					    });
					   });
				    </script>
				    
				    
				    
							      
						      