<div class="row">
        <div class="col-lg-13">
	 <h3>Manage Booking</h3>
	 <br>
	 <?php echo $this->Session->flash();?> 
            <div class="table-responsive">   
	    <?php echo $this->Form->create('Booking', array('url' => array('controller' => 'bookings', 'action' => 'index'),'id'=>'AdminId','type'=>'post'));  ?>
	    <div class="col-lg-2">		     
		   	    
	<?php echo $this->Form->input('Booking.is_replied',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>array('1'=>'Replied','2'=>'Not Replied'),'empty'=>'All')); ?>		
	       </div>
	   
	    <div class="row padding_btm_20">
		<div class="col-lg-2">		     
		    <?php echo $this->Form->input('OrderStatus.id',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$statusList,'empty'=>'Select Status')); ?>		
	       </div>
		
	      
		
	       <div class="col-lg-3">		     
		    <?php echo $this->Form->input('Order.keyword',array('value'=>$keyword,'label' => false,'div' => false, 'placeholder' => 'Keyword Search','class' => 'form-control'));?>
			<span class="blue">(<b>Search by:</b>Request Id,Customer name)</span>
	       </div>
	       
	       
	      
	       <div class="col-lg-2">		 
		   <?php echo $this->Form->button('Search', array('type' => 'submit','class' => 'btn btn-default'));?>
		     <?php echo $this->Html->link('Clear',array('controller'=>'bookings','action'=>'index','clear'),array('class' => 'btn btn-default'));?>
	       </div>
	       <div class="col-lg-2">		  
		  
	       </div>
	    </div>
	    <?php echo $this->Form->end(); ?>
	    <?php echo $this->Form->create('Order', array('url' => array('controller' => 'kitchens', 'action' => 'UpdateOrderStatus'),'id'=>'OrderId','type'=>'post'));  ?>
	    <table class="table table-bordered table-hover table-striped tablesorter">
	       <thead>
		     <tr>	    
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('Booking.id', 'Request Id.');?></th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('User.fname', 'Customer Name');?></th> 
			<th  class="th_checkbox">Persons</th>
                        <th  class="th_checkbox">Date</th>
                        <th  class="th_checkbox">Time</th>
			<th  class="th_checkbox">Status</th>
			<th  class="th_checkbox">Replied</th>	
		     </tr>
	       </thead>
	       
	       <tbody class="dyntable">
		  <?php
                  if($list){
		         $i = 0;			
			foreach($list as $key => $data){
			$class = ($i%2 == 0) ? ' class="active"' : '';
			$EncryptOrderID=$this->Encryption->encode($data['Booking']['id']); 
		     ?>
		     <tr >	    
			<td>
                       <?php echo $data['Booking']['id']; ?>			
			</td>
			<td><?php echo $data['User']['fname']." ".$data['User']['lname'] ; ?></td>
			<td>
			<?php echo $data['Booking']['number_person']; ?></td>
			<td><?php			 
			$datea=date_create($data['Booking']['reservation_date']);
                        $date = date_format($datea,"d/m/Y H:i:s A");
			$general_time = explode(' ',$date);
			echo $general_time[0];
			?></td>
			<td>
			<?php echo $general_time[1]." ".$general_time[2]; ?></td>
			
			<td><?php echo $data['BookingStatuse']['name']; ?></td>
			<td><?php
			if($data['Booking']['is_replied'] == 0){
			echo  $this->Html->link("Not Replied",array('controller'=>'bookings','action'=>'manageBooking',$EncryptOrderID));
			}else{
			   echo "Replied";	
			}
			
			
			?></td>
			
		     </tr>
		 <?php  $i++; }  }else{?>
		  <tr>
		     <td colspan="11" style="text-align: center;">
		       No record available
		     </td>
		  </tr>
		   <?php } if($list){?>
		
                 <?php } ?>
	       </tbody>
	    </table>
	    <?php echo $this->Form->end(); ?>
	    <div class="paging_full_numbers" id="example_paginate" style="padding-top:10px">
		  <?php
			echo $this->Paginator->first('First');
			// Shows the next and previous links
			echo $this->Paginator->prev('Previous', null, null, array('class' => 'disabled'));
			// Shows the page numbers
			echo $this->Paginator->numbers(array('separator'=>''));
			echo $this->Paginator->next('Next', null, null, array('class' => 'disabled'));
			// prints X of Y, where X is current page and Y is number of pages
			//echo $this->Paginator->counter();
			echo $this->Paginator->last('Last');
		   ?>
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
	$("#BookingIsReplied").change(function(){
	   // var catgoryId=$("#OrderOrderStatusId").val();
	    $("#AdminId").submit();
	});
	    
	$("#OrderStatusId").change(function(){
	    //var catgoryId=$("#OrderSeqmentId").val();
	    $("#AdminId").submit();
	});
	
   });



</script>