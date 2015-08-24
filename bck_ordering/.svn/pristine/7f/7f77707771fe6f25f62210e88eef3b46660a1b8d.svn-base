   <?php    echo $this->Html->script('Categories.category');
            echo $this->Html->css('Categories.category');
   ?>    
   
   <div class="row">
         
         <div class="col-lg-6">                        
                <?php echo $this->Session->flash();?>   
            </div> 
         
      <?php       echo $this->Form->create(null, array('url' => array('controller' => 'categories', 'action' => 'addedit'),'id'=>'categoryId','type'=>'file'));              
                  echo $this->Form->hidden('Category.id',array('value'=>base64_encode($this->data['Category']['id'])));
                  if(isset($this->data['Category']['image']) && $this->data['Category']['image'] !="") { $oldpic =$this->data['Category']['image']; }else{ $oldpic = ""; }
                  echo $this->Form->hidden('old_pic',array('value'=>$oldpic));
      ?>
      <div class="col-lg-8">           
      
         <div class="col-lg-12">
            <div class="form-group form-spacing">
               <div class="col-lg-4 form-label">
                  <label>Category Name<span class="required"> * </span></label>
               </div>
               <div class="col-lg-8 form-box">                
                  <?php echo $this->Form->input('category',array('type'=>'text','label' => false,'div' => false, 'placeholder' => 'Category Name','class' => 'form-control','maxlength' => 40));?>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="form-group form-spacing">
               <div class="col-lg-4 form-label">
                  <label>Parent Category</label>
               </div>
               <div class="col-lg-8 form-box">                
                  <?php echo $this->Form->input('parent_id',array('type'=>'select','options'=>$categories,'label' => false,'div' => false, 'empty' => 'Root','class' => 'form-control','value'=>$parentId));?>
               </div>
            </div>
         </div>
         <?php if(isset($this->data['Company']['id']) && $this->data['Company']['id'] != ""){ $class= "";}else{ $class= "required"; }?>
            <div class="row">
                <div class="col-lg-12">        
                    <div class="col-lg-12" id="mainimgcontainer">
                        <div class="form-group form-spacing">
                            <div class="col-lg-4 form-label">
                                <label>Image<?php if($class != ""){  ?><span class="required"> * </span><?php } ?></label>
                            </div>
                            <div class="col-lg-8 form-label">
                               
                                    <?php  echo $this->Form->input('image',array('label' => false,'div' => false, 'type' => 'file','style' => 'display:inline-block !important','class'=>"upload $class", 'id'=>'CategoryImage'));?>
       
                            </div>
                            <div class="col-lg-4" style="padding-bottom: 2px;">
                              <sub class="blue">1) Allowed file types: png, jpg, jpeg, gif &nbsp; 2) Min. size : 100px x 100px</sub>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         <div class="col-lg-12">
            <div class="form-group form-spacing">
               <div class="col-lg-4 form-label"> 
                  <label>Activate</label>
               </div>
               <div class="col-lg-8 form-box">  
                  <label class="checkbox-inline"><?php if(isset($this->request->data['Category']['status']) && $this->request->data['Category']['status'] == 0){  $checked= "";}else{  $checked= "checked";} ?>
                     <?php echo $this->Form->input('status',array('label' => false,'div' => false,'type '=> 'checkbox', 'checked' => $checked));?>
                  </label>
               </div>
            </div>
         </div>
         <div class="col-lg-12 form-spacing">
            <div class="col-lg-4">
               <!--blank Div-->
            </div>
            <div class="col-lg-8 form-box">
               <?php echo $this->Form->button($buttonText, array('type' => 'submit','class' => 'btn btn-default'));?>
               &nbsp;
               <?php echo $this->Form->button('Reset', array('type' => 'reset','class' => 'btn btn-default'));?>            
            </div>
         </div>
      </div>
      <?php echo $this->Form->end(); ?>
   </div><!-- /.row -->