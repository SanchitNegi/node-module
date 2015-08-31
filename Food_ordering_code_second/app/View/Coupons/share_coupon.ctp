
<div class="row">
        <div class="col-lg-6">
	 <h3>Share Coupon</h3>
	 <?php echo $this->Session->flash();?> 
            <div class="table-responsive">   
	    <?php echo $this->Form->create('Coupon', array('url' => array('controller' => 'coupons', 'action' => 'index'),'id'=>'AdminId','type'=>'post'));  ?>
	    <div class="row padding_btm_20">
		<div class="form-group form_margin-2">
                <label>Coupon Code<span class="required"> <?php  echo $couponId['Coupon']['coupon_code'];   ?> </span></label>                
              
                </div>
		
<!--	       <div class="col-lg-3">		     
		    <?php		    
		   // $options=array('1'=>'Active','0'=>'Inactive');
		    //echo $this->Form->input('Coupon.is_active',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$options,'empty'=>'Select Status')); ?>		
	       </div>-->

	       
	    </div>
	    <?php echo $this->Form->end(); ?>
	    <?php echo $this->Form->create('Coupon', array('url' => array('controller' => 'coupons', 'action' => 'shareCoupon'),'id'=>'AdminId','type'=>'post'));  ?>
	    
	<?php    echo $this->Form->input('User.coupon_code',array('type'=>'hidden','value'=>$couponId['Coupon']['coupon_code']));  ?>
        <?php    echo $this->Form->input('User.coupon_id',array('type'=>'hidden','value'=>$couponId['Coupon']['id']));  ?>
	    <table class="table table-bordered table-hover table-striped tablesorter">
	       <thead>
		     <tr>	    
			<th  class="th_checkbox"><input type="checkbox" id="selectall" style="float:left;"/>Select All</th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('User.name', 'Customer Name');?></th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('User.email', 'Email');?></th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('User.created', 'Created');?></th>
	       </thead>
	       
	       <tbody class="dyntable">
		  <?php
			$i = 0;			
			foreach($list as $key => $data){
			$class = ($i%2 == 0) ? ' class="active"' : '';
			//$EncryptCouponID=$this->Encryption->encode($data['Coupon']['id']); 
		     ?>
		     <tr <?php echo $class;?>>
		        
			<td><?php echo $this->Form->checkbox('User.id.'.$key,array('class'=>'case','value'=>$data['User']['id'],'style'=>'float:left;'));  ?></td>
			<td><?php echo $data['User']['fname']." ".$data['User']['lname']; ?></td>
			<td><?php echo $data['User']['email']; ?></td>
			<td><?php echo $data['User']['created']; ?></td>
			
                    
			
		     </tr>
		   <?php $i++; } ?>
	       </tbody>
	    </table>
	    <br>
<?php echo $this->Form->button('Share', array('type' => 'submit','class' => 'btn btn-default','onclick'=>'return check();'));?>&nbsp;
<?php echo $this->Html->link('Cancel', "/coupons/index/", array("class" => "btn btn-default",'escape' => false)); ?>

  <?php echo $this->Form->end(); ?>
  <br><br>
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
	$("#CouponIsActive").change(function(){
	 var couponId=$("#CouponIsActive").val
	    $("#AdminId").submit();
	});
    });
    
     
    // add multiple select / deselect functionality
    //$("#selectall").click(function () {
    //      $('.case').attr('checked', this.checked);
    //});
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
    function check() 
{
    var fields = $(".case").serializeArray();
    if (fields.length == 0) 
    { 
        alert('Please select user.'); 
        // cancel submit
        return false;
    } 
    
}
</script>
