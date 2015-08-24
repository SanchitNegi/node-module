
<div class="row">
        <div class="col-lg-8">
	 <h3>Order History : <?php
	 $total_amount =0;
	  if(!empty($orderDetail)){
	 echo $orderDetail[0]['User']['fname']." ".$orderDetail[0]['User']['lname'] ;
	 }
	 ?></h3><h4>Total Amount : </h4>
	 <div id="assign" style="margin-top:-30px;margin-left:140px;font-size:16px;">
	 <h4><?php  echo $total_amount ; ?></h4>
	 </div>
	 <br>
	 <?php echo $this->Session->flash();?>
	 
	 <?php
	 if(!empty($orderDetail)){
	 foreach($orderDetail as $k=>$data){
		$total_amount = $total_amount + $data['Order']['amount'];
		?>
         <div>
		<table class="table table-bordered table-hover table-striped tablesorter">
			<thead>
				<tr>
					<th class="th_checkbox" colspan="4" style="text-align:left;">
		Order Id  : <?php  echo $data['Order']['order_number'] ;?> | Cost : $<?php  echo $data['Order']['amount'];?> | Status :
		
		<?php
	$status_name =  $this->requestAction('/customers/ajaxRequest/'.$data['Order']['order_status_id'].'');
		 
		echo $status_name;
		?>
		
		
		<br>
		Address : <?php  echo $data['DeliveryAddress']['city']." ".$data['DeliveryAddress']['address'];?>
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
			foreach($data['OrderItem'] as $key => $item){
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
	 </div>
	 <br>
	 
	 <?php   }
	 echo $this->Form->input('total',array('type'=>'hidden','value'=>$total_amount,'id'=>'amt')) ; 
	 }else{
	echo "Record Not Found.";
		
	 }
	 
	 
	 ?>
	    <div class="row">
		<div class="col-lg-13">
                
		
                <div class="col-lg-4">
		
		
		
		<?php
//		foreach($statusList as $k=>$data){
//			?>
			<div style="float:left;padding:5px;">
			<?php
//                echo $this->Form->input('Order.order_status_id', array(
//			'type' => 'radio',
//			'options' => array($k=>$data),
//			'default'=>$orderDetail[0]['Order']['order_status_id']
//		      ));
		?>
			</div>
		<?php
		//} 
                   ?></div>
                
		
		</div>
		</div>
	   
	   
   
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
	 <script>
    $(document).ready(function() {	
	var total=$("#amt").val();
      $("#assign").html("$"+total);
    });
</script>