<?php
   echo $this->Html->script('Categories.category');
   echo $this->Html->css('Categories.category');           

    $recordExits = false;            
    if(isset($getData) && !empty($getData))
    {
       $recordExits = true;            
    } 
    echo $this->Form->create('Search', array('url' => array('controller' => 'categories', 'action' => 'index'),'id'=>'categoryId','type'=>'get'));
?>
     <div class="row padding_btm_20">
            <div class="col-lg-4">   
                 <?php echo $this->Form->input('keyword',array('label' => false,'div' => false, 'value'=>$keyword,'placeholder' => 'Keyword Search','class' => 'form-control','maxlength' => 55));?>
                 <span class="blue">(<b>Search by:</b> Category Name)</span>
            </div>            
            <div class="col-lg-4">                        
                <?php echo $this->Form->button('Search', array('type' => 'submit','class' => 'btn btn-default'));?>
                            
                <?php echo $this->Html->link('List All',array('controller'=>'categories','action'=>'index'),array('class' => 'btn btn-default'));?>
            </div>
            <div class="col-lg-4">    
                <div class="addbutton">
                   
                    <?php echo $this->Html->link('Add New Category','/categories/categories/addedit',array('class' => 'icon-file-alt','title' => 'Add New Category'));?>
                </div>
            </div>
      </div>
    <?php echo $this->Form->end(); ?>
    
    <div class="row">
        <div class="col-lg-4">                        
             <?php echo $this->Session->flash();?>   
        </div>            
    </div>
    <?php echo $this->Form->create('Category', array('url' => array('controller' => 'categories', 'action' => 'index'),'id'=>'categoryFormId'));?>
    <div class="row">
        <div class="col-lg-12">            
            <div class="table-responsive">               
                 
                <?php if($recordExits)
                { ?>
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                        <tr>
                            <th class="th_checkbox"><input type="checkbox" class="checkall"></th>                            
                            <th class="th_checkbox"><?php echo $this->Paginator->sort('status', 'Status'); ?> </th>
                            <th class="th_checkbox"><?php echo "Image"; ?> </th>
                            <th class="th_checkbox"><?php echo $this->Paginator->sort('category', 'Category Name'); ?></th>
                              <?php if($keyword != ""){ ?>
                           <th class="th_checkbox">Parent</th>
                              <?php } ?>
                            <th class="th_checkbox"><?php echo $this->Paginator->sort('created', 'Created'); ?> </th>                            
                            <th class="th_checkbox">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="dyntable">
                        <?php
                        $i = 0;
                        
                        foreach($getData as $key => $getData)
                        {
                            
                            $class = ($i%2 == 0) ? ' class="active"' : '';
                            ?>
                        <tr <?php echo $class;?>>  
                            <td><input type="checkbox" name="checkboxes[]" class ="checkboxlist" value="<?php echo base64_encode($getData['Category']['id']);?>" ></td>
                           
                            <?php   $status = $getData['Category']['status'];
                                    $statusImg = ($getData['Category']['status'] == 1) ? 'active' : 'inactive';
                                    echo $this->Form->hidden('status',array('value'=>$status,'id'=>'statusHidden_'.$getData['Category']['id'])); ?>
                            <?php  $pid = $getData['Category']['id'];?>
                            
                            <td><?php echo $this->Html->link($this->Html->image("Categories.".$statusImg.".png", array("alt" => ucfirst($statusImg),"title" => ucfirst($statusImg))),'javascript:void(0)',array('escape'=>false,'id'=>'link_status_'.$getData['Category']['id'],'onclick'=>'setStatus('.$pid.')')) ; ?></td>
                            <td ><?php echo $this->Html->image($this->Category->getCategoryThumb($getData['Category']['image'],'thumb')); ?></td>
                            <td><?php echo $getData['Category']['category'].' ('.$this->Html->link($this->Category->getCategoryCount($getData['Category']['id']),array('controller'=>'categories','action'=>'index',base64_encode($getData['Category']['id'])),array('escape'=>false,'title'=>'View Sub Categories')).')';?></td>
                             <?php if($keyword != ""){ ?>
                              <td><?php if($getData['Category']['parent_id'] == "") { echo "Root"; }else{ echo $this->Category->getCategoryName($getData['Category']['parent_id']); }?></td>
                              <?php } ?>
                            <td> <?php echo date('M j, Y',strtotime($getData['Category']['created']));?></td>                            
                            <td>
                            <?php
                                 echo $this->Html->link($this->Html->image("Categories.category.png", array("alt" => "Add Sub Category","title" => "Add Sub Category")),"/categories/categories/addedit/".base64_encode(0) .'/'.base64_encode($getData['Category']['id']).'/',array('escape' =>false));
                                echo $this->Html->link($this->Html->image("Categories.edit.png", array("alt" => "Edit","title" => "Edit")),"/categories/categories/addedit/".base64_encode($getData['Category']['id']).'/',array('escape' =>false));
                                echo $this->Html->link($this->Html->image("Categories.delete.png", array("alt" => "Edit","title" => "Delete")),"/categories/categories/delete/".base64_encode($getData['Category']['id']).'/',array('escape' =>false),"Are you sure you wish to delete this category?");
                            ?>                            
                            </td>                    
                        </tr>
                        <?php
                            $i++;
                        } ?>
                    </tbody>
                </table>
                <div class="row oprdiv">
                  <div class="col-lg-12 actiondivinr"> 
                     <?php
                        if($recordExits)
                        { 
                           echo $this->element('Categories.operation');// Active/ Inactive/ Delete
                        }
                     ?>
                    </div>
                 </div>
                <div class="row">
                                      
                     <div class="col-lg-12"> <?php
                        if($this->Paginator->param('pageCount') > 1)
                        {
                            echo $this->element('Categories.pagination');
                        }
                        ?>
                     </div>
                 </div>
                <div class="row padding_btm_20 ">
                     <div class="col-lg-2">   
                          LEGENDS:                        
                     </div>
                     <div class="col-lg-2"><?php echo $this->Html->image("Categories.delete.png"). " Delete &nbsp;"; ?></div>
                     <div class="col-lg-2"> <?php echo $this->Html->image("Categories.edit.png"). " Edit"; ?> </div>
                     <div class="col-lg-2"> <?php echo $this->Html->image("Categories.active.png"). " Active"; ?> </div>
                     <div class="col-lg-2"> <?php echo $this->Html->image("Categories.inactive.png"). " Inactive"; ?> </div>
                     <div class="col-lg-2"> <?php echo $this->Html->image("Categories.category.png"). " Add Sub Category"; ?> </div>
                    
                 </div>
              
               <?php
                }else{ 
                    echo $this->element('Categories.no_record_exists');
                } ?>
            </div>
        </div>         
    </div><!-- /.row -->
   <?php  echo $this->Form->end(); ?>
