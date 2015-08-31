<style>
.rating-xs {
    float: left;
    font-size: 1.5em;
    margin-left: 15px;
}
</style>
<div class="row">
        <div class="col-lg-10">
	 <h3>Review & Ratings</h3>
	 <?php echo $this->Session->flash();?> 
            <div class="table-responsive">   
	    <?php echo $this->Form->create('Order', array('url' => array('controller' => 'orders', 'action' => 'reviewRating'),'id'=>'AdminId','type'=>'post'));  ?>
	    <div class="row padding_btm_20">
<!--		<div class="col-lg-2">		     
		    <?php// echo $this->Form->input('Customer.category_id',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$categoryList,'empty'=>'Select Category')); ?>		
	       </div>-->
		
	       <div class="col-lg-2">		     
		    <?php		    
		    $options=array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5');
		    echo $this->Form->input('StoreReview.review_rating',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$options,'empty'=>'Select Rating')); ?>		
	       </div>
		 
		    
	       <div class="col-lg-3">		     
		    <?php
		    echo $this->Form->input('User.keyword',array('value'=>$keyword,'label' => false,'div' => false, 'placeholder' => 'Keyword Search','class' => 'form-control'));?>
			<span class="blue">(<b>Search by:</b>Order Id,Review)</span>
	       </div>
	       
	       
	      
	       <div class="col-lg-2">		 
		   <?php echo $this->Form->button('Search', array('type' => 'submit','class' => 'btn btn-default'));?>
		     <?php echo $this->Html->link('Clear',array('controller'=>'orders','action'=>'reviewRating','clear'),array('class' => 'btn btn-default'));?>
	       </div>
	      <!-- <div class="col-lg-2">		  
		   <div class="addbutton">                
		       <?php //echo $this->Form->button('Add Menu Item', array('type' => 'button','onclick'=>"window.location.href='/items/addMenuItem'",'class' => 'btn btn-default')); ?>  
		   </div>
	       </div>-->
	    </div>
	    <?php echo $this->Form->end(); ?>
	    <table class="table table-bordered table-hover table-striped tablesorter">
	       <thead>
		<tr>	    
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('Order.order_number', 'Order Id');?></th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('Item.name', 'Item');?></th>
                        <th  class="th_checkbox">Review</th>
                        <th  class="th_checkbox">Ratings</th>
			<th  class="th_checkbox">Action</th>
		     </tr>
		    <!-- <tr>	    
			<th  class="th_checkbox"><?php //echo $this->Paginator->sort('StoreReview.order_id', 'Order Id');?></th>
                        <th  class="th_checkbox"><?php //echo $this->Paginator->sort('StoreReview.review_comment', 'Review');?></th>
                        <th  class="th_checkbox"><?php //echo $this->Paginator->sort('StoreReview.review_rating', 'Ratings');?></th>
			<th  class="th_checkbox">Action</th>
		     </tr>-->
	       </thead>
	       
	       <tbody class="dyntable">
		  <?php
		 
			$i = 0;			
			foreach($list as $key => $data){
			$class = ($i%2 == 0) ? ' class="active"' : '';
			$EncryptReviewID=$this->Encryption->encode($data['StoreReview']['id']); 
		     ?>
		     <tr <?php echo $class;?>>	    
			<td><?php echo $data['Order']['order_number'] ;  ?></td>
			<td><?php
			
			echo $data['OrderItem']['Item'] ['name'] ;
			
			?></td>
			<td><?php
			
			echo "<span title='".$data['StoreReview']['review_comment']."'>".substr($data['StoreReview']['review_comment'],0,50)."</span>";
			    ?>
			</td>
			<td>
				
		  <?php echo $this->Form->input('StoreReview.review_rating',array('disabled'=>true,'data-glyphicon'=>0,'type'=>'number','class'=>'rating','max'=>5,'min'=>0,'label'=>false,'div'=>false,'value'=>$data['StoreReview']['review_rating']));?>
				
			</td>
			
			<td>
			  
			  <?php
			//  if($data['StoreReview']['is_approved'] == 1){
			//
			//  echo $this->Html->link($this->Html->image("store_admin/active.png", array("alt" => "Approve", "title" => "Approve")),array('controller'=>'orders','action'=>'approvedReview',$EncryptReviewID,2),array('confirm' => 'Are you sure to Disapprove Review?','escape' => false));
			//  }
			//  else{
			//echo $this->Html->link($this->Html->image("store_admin/inactive.png", array("alt" => "Disapprove", "title" => "Disapprove")),array('controller'=>'orders','action'=>'approvedReview',$EncryptReviewID,1),array('confirm' => 'Are you sure to Approve Review?','escape' => false));
			//
			//  }
			
			  ?>
			  <?php
			  
			echo $this->Html->link("Approved",array('controller'=>'orders','action'=>'approvedReview',$EncryptReviewID,1),array('confirm' => 'Are you sure to Approve Review?','escape' => false));
			   echo " ";
			   echo "|";
			   echo " ";
			   echo $this->Html->link("Disapproved",array('controller'=>'orders','action'=>'approvedReview',$EncryptReviewID,2),array('confirm' => 'Are you sure to Disapprove Review?','escape' => false));
			  ?>
			  
			</td>
		     </tr>
		   <?php  $i++; }?>
		  
		   
	       </tbody>
	    </table>  
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
	 
	$("#StoreReviewReviewRating").change(function(){
	    var ratingId=$("#StoreReviewReviewRating").val();
	    $("#AdminId").submit();
	});
	
   });
</script>
