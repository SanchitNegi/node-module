<style>
   .new-chkbx-wrap { float:left;padding:5px;width:30%;margin-bottom:10px;}
   .new-chkbx-wrap > input {
    float: left;
    margin-right: 5px;
    position: relative;
    top: -3px;
}
</style>
<div class="row">
        <div class="col-lg-8">
	 <h3>Order Details</h3>
	 <br>
	 <?php echo $this->Session->flash();?> 
         
	 <?php echo $this->Form->create('Order', array('action'=>'UpdateOrderStatus','controller'=>'orders','inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'CategoryAdd','enctype'=>'multipart/form-data'));?>

	<?php    echo $this->Form->input('Orders.id',array('type'=>'hidden','value'=>$orderDetail[0]['Order']['id']));  ?>

	
		<table class="table tablesorter">
			<thead>
				<tr>
					<th class="th_checkbox" colspan="5" style="text-align:left;">
		Order Id  : <?php  echo $orderDetail[0]['Order']['order_number'] ;?> | Cost :  $<?php  echo $orderDetail[0]['Order']['amount'] ;?> | Status : <?php
		              $data =  $this->requestAction('/orders/ajaxRequest/'.$orderDetail[0]['Order']['order_status_id'].'');
		 
		echo $data;
		?>
		<br>
		Address : <?php  echo $orderDetail[0]['DeliveryAddress']['address'] ." ".$orderDetail[0]['DeliveryAddress']['city'];?>
					</th>
				</tr>
			</thead>
		</table>
	
	    <table class="table table-bordered table-hover table-striped tablesorter">
		
		
		<thead>
		     <tr>	    
			<th  class="th_checkbox">Item</th>
			<th  class="th_checkbox">Quantity</th>
			<th  class="th_checkbox">Size</th>
                        <th  class="th_checkbox">Type</th>
			<th  class="th_checkbox">Add-ons</th>

		     </tr>
		</thead>
	       
	       <tbody class="dyntable">
		 <?php
		         $i = 0;			
			foreach($orderDetail[0]['OrderItem'] as $key => $item){
			$class = ($i%2 == 0) ? ' class="active"' : '';
			
		    ?>
		     <tr >	    
			<td>
			
			<?php echo $item['Item']['name'];?>
				
			</td>
			<td>
			
			<?php echo $item['quantity'];?>
				
			</td>
			<td>
			<?php echo ($item['Size'])?$item['Size']['size']:"-";?>
			</td>
			<td>
			<?php echo ($item['Type'])?$item['Type']['name']:"-";?>	
			</td>
			
			
			<td style="width: 300px; word-wrap: break-word; word-break: break-all;">
			<?php
			$Toppings='';
				if($item['OrderTopping']){
					$Toppings=array();
					foreach($item['OrderTopping'] as $vkey => $toppingdetails){
						$Toppings[]=$toppingdetails['Topping']['name'];
					}
				}
				if($Toppings){
					$alltoppings=implode(',',$Toppings);
					echo wordwrap($alltoppings,5,"<br>\n");
				}else{
					echo "-";
				}
				
			?>	
			</td>
			
         
		     </tr>
		<?php $i++; } ?>
		 
	       </tbody>
	    </table>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    <div class="row">
		<div class="col-lg-13">
                <div >   
                   &nbsp;&nbsp;&nbsp;&nbsp; Set order status              
                </div>
		
  <div class="col-lg-11">
		
		
		
		<?php
		foreach($statusList as $k=>$data){
			?>
			<div class="new-chkbx-wrap">
			<?php
                echo $this->Form->input('Order.order_status_id', array(
			'type' => 'radio',
			'options' => array($k=>$data),
			'default'=>$orderDetail[0]['Order']['order_status_id']
		      ));
		?>
			</div>
		<?php
		} 
                   ?></div>
                
                
		
		</div>
		</div>
	   <table>
		<tr>
                    
                    <td colspan="6">                       
                        
                  
                        
		       
<?php echo $this->Form->button('Update Status', array('type' => 'submit','class' => 'btn btn-default'));            
                        
                         ?>                     
<?php echo $this->Html->link('Cancel', "/orders/index/", array("class" => "btn btn-default",'escape' => false)); ?>

                        
                    </td>
                   
                   </tr>
	   </table>   
	   
    <?php echo $this->Form->end(); ?>
</div>
	    <style>
	       
.paging_full_numbers {
   margin-top: 5px;
   float:right;
}
.paging_full_numbers .paginate_button {
    background: url("images/buttonbg5.png") repeat-x scroll left top #EEEEEE;
    border: 1px solid #CCCCCC;
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    margin-left: 5px;
    padding: 2px 8px;
}
.paging_full_numbers .paginate_button:hover {
    background: none repeat scroll 0 0 #EEEEEE;
    box-shadow: 1px 1px 2px #CCCCCC inset;
}
.paging_full_numbers .paginate_active, .paging_full_numbers .paginate_button:active {
    background: url("images/buttonbg3.png") repeat-x scroll left top #405A87;
    border: 1px solid #405A87;
    border-radius: 3px;
    color: #FFFFFF;
    display: inline-block;
    margin-left: 5px;
    padding: 2px 8px;
}
.paging_full_numbers .paginate_button_disabled {
    color: #999999;
}
.paging_full_numbers span {
    background: url("images/buttonbg5.png") repeat-x scroll left top #EEEEEE;
    border: 1px solid #CCCCCC;
    border-radius: 3px;
    cursor: pointer;
    display: inline-block;
    margin-left: 5px;
    padding: 2px 8px;
}
.paging_full_numbers span:hover {
    background: none repeat scroll 0 0 #EEEEEE;
    box-shadow: 1px 1px 2px #CCCCCC inset;
}
.paging_full_numbers span:active {
    background: url("images/buttonbg3.png") repeat-x scroll left top #405A87;
    border: 1px solid #405A87;
    border-radius: 3px;
    color: #FFFFFF;
    display: inline-block;
    margin-left: 5px;
    padding: 2px 8px;
}
.paging_full_numbers .disabled {
    color: #999999;
}
.paging_full_numbers span a {
    color: #000000;
}
.pagination a {
    border-radius: 3px;
}
.pagination a {
    box-shadow: 1px 1px 0 #F7F7F7;
}
.pagination a:hover {pasta
}
.pagination a:hover {
    background: none repeat scroll 0 0 #EEEEEE;
    box-shadow: 1px 1px 3px #EEEEEE inset;
    text-decoration: none;
}
.pagination a.disabled {
    border: 1px solid #CCCCCC;
    color: #999999;
}
.pagination a.disabled:hover {
    background: url("images/buttonbg5.png") repeat-x scroll left bottom rgba(0, 0, 0, 0);
    box-shadow: none;
}
.pagination a.current {
    background: url("images/buttonbg3.png") repeat-x scroll left top #333333;
    border: 1px solid #405A87;
    color: #FFFFFF;
}
.pagination a.current:hover {
    box-shadow: none;
}
.pgright {
    position: absolute;
    right: 10px;
    top: 12px;
}
.pgright a.disabled {
    border: 1px solid #CCCCCC;
}
	    </style>
	    
