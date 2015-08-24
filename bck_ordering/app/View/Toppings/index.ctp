
<div class="row">
        <div class="col-lg-12">
	 <h3>Add-ons Listing</h3>
	 <?php echo $this->Session->flash();?> 
            <div class="table-responsive">   
	    <?php echo $this->Form->create('Topping', array('url' => array('controller' => 'Toppings', 'action' => 'index'),'id'=>'AdminId','type'=>'post'));  ?>
	    <div class="row padding_btm_20">
		<div class="col-lg-2">		     
		    <?php echo $this->Form->input('Topping.item_id',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$itemList,'empty'=>'Select Item')); ?>		
	       </div>
		
	       <div class="col-lg-2">		     
		    <?php		    
		    $options=array('1'=>'Active','0'=>'Inactive');
		    echo $this->Form->input('Topping.is_active',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$options,'empty'=>'Select Status')); ?>		
	       </div>
		
	       <div class="col-lg-3">		     
		    <?php echo $this->Form->input('keyword',array('value'=>$keyword,'label' => false,'div' => false, 'placeholder' => 'Keyword Search','class' => 'form-control'));?>
			<span class="blue">(<b>Search by:</b>Add-on name,Item name)</span>
	       </div>
	       
	       
	      
	       <div class="col-lg-2">		 
		   <?php echo $this->Form->button('Search', array('type' => 'submit','class' => 'btn btn-default'));?>
		     <?php echo $this->Html->link('Clear',array('controller'=>'Toppings','action'=>'index','clear'),array('class' => 'btn btn-default'));?>
	       </div>
	       <div class="col-lg-2">		  
		   <div class="addbutton">                
		       <?php echo $this->Form->button('Add Add-on', array('type' => 'button','onclick'=>"window.location.href='/toppings/addTopping'",'class' => 'btn btn-default')); ?>  
		   </div>
	       </div>
	    </div>
	    
	    <table class="table table-bordered table-hover table-striped tablesorter">
	       <thead>
		     <tr>
                        <?php
                        if(isset($this->request->data['Topping']['item_id']) && $this->request->data['Topping']['item_id']){
                        ?>
                        <th  class="th_checkbox">Default</th>
                        <?php
                        }
                        ?>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('Topping.name', 'Add-on name');?></th>
                        <th  class="th_checkbox"><?php echo $this->Paginator->sort('Item.name', 'Item name');?></th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('Topping.price', 'Price($)');?></th>
			<th  class="th_checkbox">Status</th>			
			<th  class="th_checkbox">Action</th>
		     </tr>
	       </thead>
	       
	       <tbody class="dyntable">
		  <?php
                    if($list){
			$i = 0;			
			foreach($list as $key => $data){
			$class = ($i%2 == 0) ? ' class="active"' : '';
			$EncryptToppingID=$this->Encryption->encode($data['Topping']['id']); 
		     ?>
		     <tr <?php echo $class;?>>
                        <?php                        
                        if(isset($this->request->data['Topping']['item_id']) && $this->request->data['Topping']['item_id']){
                        ?>
                        <td>
                        <?php
                        $checked=false;                        
                        if(isset($data['ItemDefaultTopping'][0]['topping_id'])){                           
                            if($data['Topping']['id']==$data['ItemDefaultTopping'][0]['topping_id']){
                                $checked=true;
                            }
                        }                        
                        echo $this->Form->checkbox('Topping.id.'.$key,array('checked' =>$checked,'value'=>$data['Topping']['id'],'class'=>'checkid'));                       
                        ?></td>
                        <?php
                        }
                        ?>
                        
			<td><?php echo $data['Topping']['name'];?></td>
                        <td><?php echo $data['Item']['name'];?></td>
			<td><?php echo $data['Topping']['price'];?></td>			
			<td>
			<?php
			if($data['Topping']['is_active']){
			   echo $this->Html->link($this->Html->image("store_admin/active.png", array("alt" => "Active", "title" => "Active")),array('controller'=>'Toppings','action'=>'activateTopping',$EncryptToppingID,0),array('confirm' => 'Are you sure to Deactivate Add-on?','escape' => false));
			}else{
			   echo $this->Html->link($this->Html->image("store_admin/inactive.png", array("alt" => "Inactive", "title" => "Inactive")),array('controller'=>'Toppings','action'=>'activateTopping',$EncryptToppingID,1),array('confirm' => 'Are you sure to Activate Add-on?','escape' => false));
			}
			?>
			</td>
			
			
			<td>
			   <?php //$EncryptStoreID=$this->Encryption->encode($data['User']['id']); ?>
			   <?php echo  $this->Html->link($this->Html->image("store_admin/edit.png", array("alt" => "Edit", "title" => "Edit")),array('controller'=>'Toppings','action'=>'editTopping',$EncryptToppingID), array('escape' => false)); ?>
			   <?php echo " | ";?>
			   <?php echo  $this->Html->link($this->Html->image("store_admin/delete.png", array("alt" => "Delete", "title" => "Delete")),array('controller'=>'Toppings','action'=>'deleteTopping',$EncryptToppingID),array('confirm' => 'Are you sure to delete Addon?','escape' => false)); ?>
			   
			</td>
		     </tr>
		   <?php $i++; } }else{?>
		  <tr>
		     <td colspan="8" style="text-align: center;">
		       No record available
		     </td>
		  </tr>
		   <?php } ?>
                   <tr>
                    
                    <td colspan="6">                       
                        
                         <?php
                         if($list){
                         echo $this->Form->button('Set Default', array('type' => 'submit','class' => 'btn btn-default','name'=>'set','onclick'=>'return check();'));
                         echo $this->Form->button('Unset Default', array('type' => 'submit','class' => 'btn btn-default','name'=>'unset','onclick'=>'return check();'));
                         }
                         ?>                     
                         <?php echo $this->Form->end(); ?>
                        
                    </td>
                   
                   </tr>
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
	    
	    <div class="row padding_btm_20" style="padding-top:10px">
                <div class="col-lg-1">   
                    LEGENDS:                        
                </div>
                <div class="col-lg-1"><?php echo $this->Html->image("store_admin/delete.png") . " Delete &nbsp;"; ?></div>
                <div class="col-lg-1"> <?php echo $this->Html->image("store_admin/edit.png") . " Edit"; ?> </div>
                <div class="col-lg-1"> <?php echo $this->Html->image("store_admin/active.png") . " Active"; ?> </div>
                <div class="col-lg-1"> <?php echo $this->Html->image("store_admin/inactive.png") . " Inactive"; ?> </div>
                <!--div class="col-lg-2"> <?php //echo $this->Html->image("admin/category.png"). " Add Sub Category";    ?> </div-->

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
.paging_full_numbers .paginate_button_Add-onsdisabled {
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
	$("#ToppingItemId").change(function(){
	    //var catgoryId=$("#ToppingItemId").val();
	    $("#AdminId").submit();
	});
	    
	$("#ToppingIsActive").change(function(){
	    //var catgoryId=$("#ItemCategoryId").val();
	    $("#AdminId").submit();
	});    
   });
    
   function check(){    
        var fields = $(".checkid").serializeArray();
        if (fields.length == 0 ){ 
            alert('Please select Add-on.'); 
            // cancel submit
            return false;
        }
        return true;
    } 
    
    
    
</script>