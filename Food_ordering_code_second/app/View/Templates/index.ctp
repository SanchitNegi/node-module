<div class="row">
        <div class="col-lg-9">
	 <h3>Template Listing</h3>
	 <?php echo $this->Session->flash();?> 
            <div class="table-responsive">   
	    <?php echo $this->Form->create('Template', array('url' => array('controller' => 'templates', 'action' => 'index'),'id'=>'TemplateId','type'=>'post'));  ?>
	    <div class="row padding_btm_20">
		
		
	       <div class="col-lg-4">		     
		    <?php		    
		    $options=array('1'=>'Active','0'=>'Inactive');
		    echo $this->Form->input('Newsletter.is_active',array('type'=>'select','class'=>'form-control valid','label'=>false,'div'=>false,'autocomplete' => 'off','options'=>$options,'empty'=>'Select Status')); ?>		
	       </div>

	      
	    </div>
	    <?php echo $this->Form->end(); ?>
	    <table class="table table-bordered table-hover table-striped tablesorter">
	       <thead>
		     <tr>	    
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('EmailTemplate.id', 'Template Id');?></th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('EmailTemplate.template_subject', 'Name');?></th>
			<th  class="th_checkbox"><?php echo $this->Paginator->sort('EmailTemplate.created', 'Date');?></th>
			<th  class="th_checkbox">Status</th>
                        <th  class="th_checkbox">Action</th>

	       </thead>
	       <tbody class="dyntable">
		  <?php
		  if($list){
			$i = 0;			
			foreach($list as $key => $data){
			$class = ($i%2 == 0) ? ' class="active"' : '';
			$EncryptTemplateID=$this->Encryption->encode($data['EmailTemplate']['id']); 
		     ?>
		     <tr <?php echo $class;?>>	    
			<td><?php echo  $data['EmailTemplate']['id'] ; ?></td>

                     <td>
			  <?php echo  $data['EmailTemplate']['template_subject'] ; ?>
		    </td>
		      <td>
			  <?php echo  $data['EmailTemplate']['created'] ; ?>
		    </td>
                        <td>
			   <?php
			if($data['EmailTemplate']['is_active']){
			   echo $this->Html->link($this->Html->image("store_admin/active.png", array("alt" => "Active", "title" => "Active")),array('controller'=>'templates','action'=>'activateTemplate',$EncryptTemplateID,0),array('confirm' => 'Are you sure to Inactive Template?','escape' => false));
			}else{
			   echo $this->Html->link($this->Html->image("store_admin/inactive.png", array("alt" => "Inactive", "title" => "Inactive")),array('controller'=>'templates','action'=>'activateTemplate',$EncryptTemplateID,1),array('confirm' => 'Are you sure to Activate Template?','escape' => false));
			}
			?>
		    </td>
			<td>
			   <?php echo  $this->Html->link($this->Html->image("store_admin/edit.png", array("alt" => "Edit", "title" => "Edit")),array('controller'=>'templates','action'=>'editTemplate',$EncryptTemplateID), array('escape' => false)); ?>
			   <?php echo " | ";?>
			   <?php echo  $this->Html->link($this->Html->image("store_admin/delete.png", array("alt" => "Delete", "title" => "Delete")),array('controller'=>'templates','action'=>'deleteTemplate',$EncryptTemplateID),array('confirm' => 'Are you sure to delete Template?','escape' => false)); ?>         
                        </td> 
			
		     </tr>
		   <?php $i++; } }else{?>
		  <tr>
		     <td colspan="3" style="text-align: center;">
		       No record available
		     </td>
		  </tr>
		   <?php } ?>
	       </tbody>
	    </table>  
<!--	    <div class="paging_full_numbers" id="example_paginate" style="padding-top:10px">
		  <?php
			//echo $this->Paginator->first('First');
			//// Shows the next and previous links
			//echo $this->Paginator->prev('Previous', null, null, array('class' => 'disabled'));
			//// Shows the page numbers
			//echo $this->Paginator->numbers(array('separator'=>''));
			//echo $this->Paginator->next('Next', null, null, array('class' => 'disabled'));
			//// prints X of Y, where X is current page and Y is number of pages
			////echo $this->Paginator->counter();
			//echo $this->Paginator->last('Last');
		   ?>
	    </div>-->
	    
	    <div class="row padding_btm_20" style="padding-top:10px">
                <div class="col-lg-2">   
                    LEGENDS:                        
                </div>
                <div class="col-lg-2"><?php echo $this->Html->image("store_admin/delete.png") . " Delete &nbsp;"; ?></div>
                <div class="col-lg-2"> <?php echo $this->Html->image("store_admin/edit.png") . " Edit"; ?> </div>
                <div class="col-lg-2"> <?php echo $this->Html->image("store_admin/active.png") . " Active"; ?> </div>
                <div class="col-lg-2"> <?php echo $this->Html->image("store_admin/inactive.png") . " Inactive"; ?> </div>
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
	$("#NewsletterIsActive").change(function(){
	    $("#NewsletterId").submit();
	});
	    
   });
</script>