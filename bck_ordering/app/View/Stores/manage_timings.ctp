<div class="row">
            <div class="col-lg-6">
	    <h3>Manage Store Hours</h3>
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">
                    
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
                
                <div class="col-lg-6">
                    <span class="blue">(Please Select date on which store will remains closed)</span> 
		     <div class="form-group form_spacing">
                <?php
                    echo $this->Form->create('Stores', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'storeclosed','action'=>'addClosedDate'));
                ?>
                <label>Select Date<span class="required"> * </span></label>  
                <?php
                    echo $this->Form->input('StoreHoliday.holiday_date',array('type'=>'text','class'=>'form-control','maxlength'=>'50','div'=>false,'readonly'=>true));
                ?>
                </div>
                <div class="form-group form_spacing">
                <label>Description</label> 
                <?php
                    echo $this->Form->input('StoreHoliday.description',array('type'=>'textarea','rows' => '5', 'cols' => '5','class'=>'form-control'));          
                 ?>
                 </div>    
                 <div class="form-group form_spacing">
                 <?php
                    echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));echo "&nbsp;";
                    echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/stores/index'",'class' => 'btn btn-default'));
                    echo $this->Form->end();
                ?>
                    </div>
            
            <hr/>
            <div class="col-lg-12">   
            <div class="table-responsive">
                <span class="blue">(List of store closed dates)</span> 
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                          <tr>	    
                             <th  class="th_checkbox"><?php echo "Closed Date";?></th>
                             <th  class="th_checkbox"><?php echo "Description";?></th>
                             <th  class="th_checkbox"><?php echo "Created";?></th>   
                             <th  class="th_checkbox">Action</th>
                          </tr>
                    </thead>
                    
                    <tbody class="dyntable">
                        <?php if($holidayInfo){?>
                       <?php foreach($holidayInfo as $key => $data){?>
                          <tr>	    
                             <td><?php echo $this->Dateform->us_format($data['StoreHoliday']['holiday_date']);?></td>
                             <td><?php echo $data['StoreHoliday']['description'];?></td>
                             <td><?php echo $this->Dateform->us_format($data['StoreHoliday']['created']);?></td>             
                             <td>
                                <?php $EncryptHolidayID=$this->Encryption->encode($data['StoreHoliday']['id']); ?>
                                <?php echo  $this->Html->link($this->Html->image("store_admin/delete.png", array("alt" => "Delete", "title" => "Delete")),array('controller'=>'Stores','action'=>'deleteHoliday',$EncryptHolidayID),array('confirm' => 'Are you sure to delete record?','escape' => false)); ?>
                                
                             </td>
                          </tr>
                        <?php }
                    }else{?>
		   <tr>
		     <td colspan="6" style="text-align: center;">
		       No record available
		     </td>
		  </tr>
		   <?php } ?>
                    </tbody>
                 </table>
            </div></div>
                </div>
                <div style="clear:both;"></div>
            <hr/>
            <div class="col-lg-9">   
            <div class="table-responsive">
                <span class="blue">(Please enter open and close timing of store)</span> 
                <?php
                echo $this->Form->create('Stores', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'storeavailable','action'=>'updatestoreAvailability'));
                ?>
                <table class="table table-bordered table-hover table-striped tablesorter">
                    <thead>
                          <tr>
                             <th class="th_checkbox">&nbsp</th>
                             <?php foreach($daysarr as $day){?>
                             <th class="th_checkbox"><?php echo __($day);?></th>
                             <?php } ?>
                             
                          </tr>
                    </thead>
                    
                    <tbody class="dyntable">                       
                          <tr>
                             <td>Start Time</td>
                             <?php
                             if(!empty($availabilityInfo)){
                                foreach($availabilityInfo as $key => $data){
                            ?>
                            <td><?php echo $this->Form->input('StoreAvailability.'.$key.'.start_time',array('options'=>$timeOptions,'value'=>$data['StoreAvailability']['start_time'],'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));?></td>
                            
                            <?php 
                                    //$data['StoreAvailability']['start_time'];
                                    echo $this->Form->input('StoreAvailability.'.$key.'.id',array('type'=>'hidden','value'=>$data['StoreAvailability']['id']));
                                }
                             }else{
                                $i=1;
                                 foreach($daysarr as $day){
                             ?>
                             <td><?php echo $this->Form->input('StoreAvailability.'.$i.'.start_time',array('options'=>$timeOptions,'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));?></td>
                             
                             <?php
                             
                             echo $this->Form->input('StoreAvailability.'.$i.'.day_name',array('type'=>'hidden','value'=>$day));
                             
                             
                             $i++;
                                }
                             }
                             ?>
                          </tr>
                          
                          <tr>
                             <td>End Time</td>
                             <?php
                             if(!empty($availabilityInfo)){
                                foreach($availabilityInfo as $key => $data){
                            ?>
                            <td><?php echo $this->Form->input('StoreAvailability.'.$key.'.end_time',array('options'=>$timeOptions,'value'=>$data['StoreAvailability']['end_time'],'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));?></td>                           
                            
                            <?php 
                                    //$data['StoreAvailability']['start_time'];
                                    echo $this->Form->input('StoreAvailability.'.$key.'.id',array('type'=>'hidden','value'=>$data['StoreAvailability']['id']));
                                }
                             }else{
                                $i=1;
                                 foreach($daysarr as $day){
                             ?>
                             <td><?php echo $this->Form->input('StoreAvailability.'.$i.'.start_time',array('options'=>$timeOptions,'class'=>'passwrd-input ','maxlength'=>'50','div'=>false));?></td>
                             
                             <?php
                             
                             echo $this->Form->input('StoreAvailability.'.$i.'.day_name',array('type'=>'hidden','value'=>$day));
                             
                             
                             $i++;
                                }
                             }
                             ?>
                          </tr>
                          
                          <tr>
                            <td>Weekly Closed Day</td>
                            <?php
                                if(!empty($availabilityInfo)){
                                foreach($availabilityInfo as $key => $data){
                            ?>
                            
                                                        
                            <td><?php
                                $checked="";
                                if($data['StoreAvailability']['is_closed']){
                                    $checked="checked";
                                }
                            echo $this->Form->input('StoreAvailability.'.$key.'.is_closed',array('type'=>'checkbox','class'=>'passwrd-input ','label'=>'Closed','div'=>false,'checked'=>$checked));
                            
                            
                            ?></td>
                            <?php
                                }
                            }else{
                                $i=1;
                                 foreach($daysarr as $day){
                            ?>    
                                <td><?php echo $this->Form->input('StoreAvailability.'.$i.'.is_closed',array('type'=>'checkbox','class'=>'passwrd-input ','maxlength'=>'50','div'=>false));?></td>
                            <?php
                                 }
                            }
                            ?>
                            
                            
                            
                          </tr>
                          
                          
                    </tbody>
                 </table></div></div><div style="clear:both;"></div>
                 <hr/>
                <div class="form-group form_spacing">
                <?php
                    
                    echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));  echo "&nbsp;"; 
                    echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/stores/index'",'class' => 'btn btn-default'));           
                
                echo $this->Form->end(); ?>
                </div>
                         
    </div>
<script>
    $(document).ready(function() {
	 $('#StoreHolidayHolidayDate').datepicker({
	       
	       dateFormat: 'mm-dd-yy',
                minDate: 0,
	       
	   });
         $("#storeclosed").validate({
            rules: {
                "data[StoreHoliday][holiday_date]": {
                    required: true,
                }, 
            },
            messages: {
                "data[StoreHoliday][holiday_date]": {
                    required: "Please select date",
                },        
               
            }
        });
         
         
         
    });
</script>
