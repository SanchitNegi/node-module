<div class="row">
        <div class="col-lg-13">
	 <h3>Manage Booking</h3>
	 <br>
	 <?php echo $this->Session->flash();?> 
            <div class="table-responsive">   
	    <div class="col-lg-2">		     
		Booking Request Id : <?php echo $list[0]['Booking']['id']; ?>	    
	       </div>
	   
	    <div class="row padding_btm_20">
		<div class="col-lg-2">		     
	       </div>
		
	      
		
	       <div class="col-lg-4">		     
	       </div>
	       
	       
	      
	       <div class="col-lg-2">		 
	       </div>
	       <div class="col-lg-2">		  
		
	       </div>
	    </div>
	    <table class="table table-bordered table-hover table-striped tablesorter">
	       <thead>
		     <tr>	    
			<th  class="th_checkbox">Request Id</th>
			<th  class="th_checkbox">Customer Name</th>
			<th  class="th_checkbox">Email</th> 
			<th  class="th_checkbox">Persons</th>
                        <th  class="th_checkbox">Date</th>
                        <th  class="th_checkbox">Time</th>
		     </tr>
	       </thead>
	       
	       <tbody class="dyntable">
		  <?php
                  //if($list){
		        // $i = 0;			
			//foreach($list as $key => $data){
			//$class = ($i%2 == 0) ? ' class="active"' : '';
			//$EncryptOrderID=$this->Encryption->encode($data['Booking']['id']); 
		     ?>
		     <tr >	    
			<td>
                       <?php echo $list[0]['Booking']['id']; ?>	
			</td>
			<td><?php echo $list[0]['User']['fname'] ." ".$list[0]['User']['lname'] ; ?></td>
			<td>
			<?php echo $list[0]['User']['email']; ?></td>
			<td><?php echo $list[0]['Booking']['number_person']; ?></td>
			<td><?php
			  $date = explode(" ",$list[0]['Booking']['reservation_date']);
			echo $date[0];
			?></td>
			
			<td><?php  echo $date[1]; ?></td>
			
		     </tr>
		
	       </tbody>
	    </table>
	   <div class="col-lg-6">
		     <div class="form-group form_spacing">
                <?php
                    echo $this->Form->create('Booking', array('action'=>'manageBooking','inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'storeclosed'));
                ?>
                <label>To<span class="required"> * </span></label>  
                <?php
                    echo $this->Form->input('Data.to',array('type'=>'text','class'=>'form-control','maxlength'=>'50','value'=>@$list[0]['User']['email'],'div'=>false));
                echo $this->Form->input('Data.id',array('type'=>'hidden','value'=>@$list[0]['Booking']['id']));

		echo $this->Form->input('Data.name',array('type'=>'hidden','value'=>@$list[0]['User']['fname']." ".@$list[0]['User']['lname']));
		echo $this->Form->input('Data.emailnotify',array('type'=>'hidden','value'=>@$list[0]['User']['is_emailnotification']));
		echo $this->Form->input('Data.smsnotify',array('type'=>'hidden','value'=>@$list[0]['User']['is_smsnotification']));
                echo $this->Form->input('Data.phone',array('type'=>'hidden','value'=>@$list[0]['User']['phone']));
                echo $this->Form->input('Data.ordercode',array('type'=>'hidden','value'=>@$list[0]['Booking']['id']));

		?>
                </div>
		      <div class="form-group form_spacing">
                <label>Booking Status</label> 
              
		     <?php echo $this->Form->input('Data.status',array('default'=>@$list[0]['Booking']['booking_status_id'],'type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$statusList,'empty'=>'Select Status')); ?>	
                 
                 </div>  
                <div class="form-group form_spacing">
                <label>Comments</label> 
                <?php
                    echo $this->Form->input('Data.comment',array('type'=>'textarea','rows' => '5', 'cols' => '5','class'=>'form-control'));          
                 ?>
                 </div>    
                 <div class="form-group form_spacing">
                 <?php
                    echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));echo "&nbsp;";
                    echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/bookings/index'",'class' => 'btn btn-default'));
                    echo $this->Form->end();
                ?>
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
	$("#OrderStatusId").change(function(){
	   // var catgoryId=$("#OrderOrderStatusId").val();
	    $("#AdminId").submit();
	});
	    
	$("#SegmentId").change(function(){
	    //var catgoryId=$("#OrderSeqmentId").val();
	    $("#AdminId").submit();
	});
	
	$("#selectall").click(function(){
	var st = $("#selectall").prop('checked');
	$('.case').prop('checked',st);

	});
    // if all checkbox are selected, check the selectall checkbox
    // and viceversa
    $(".case").click(function(){
        if($(".case").length == $(".case:checked").length) {
            $("#selectall").attr("checked", "checked");
        } else {
            $("#selectall").removeAttr("checked");
        }
 
    });
  
   });
    function check() 
{

   var statusId=$("#OrderOrderStatusId").val();
  
    var fields = $(".case").serializeArray();
    if (fields.length == 0 )
    { 
        alert('Please select one order to proceed.'); 
        // cancel submit
        return false;
    }
    if (statusId == '') {
	 alert('Please select status.'); 
        return false;
    }

    
}


</script>