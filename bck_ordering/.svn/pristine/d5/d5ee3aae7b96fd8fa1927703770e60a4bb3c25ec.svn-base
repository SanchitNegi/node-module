<style>
   .new-chkbx-wrap { float:left;padding:5px;width:25%;margin-bottom:10px;}
   .new-chkbx-wrap > input {
    float: left;
    margin-right: 5px;
    position: relative;
    top: -3px;
}
</style>
    <div class="row">
            <div class="col-lg-6">
                 <?php
                    if (!isset($this->request->data['User']['id'])) {
                        $title="Add new staff";
                    }else{
                        $title="Edit staff information";
                    }
                ?>
                <h3><?php echo $title;?></h3>
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        
            <?php echo $this->Form->create('Stores', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'UsersRegistration'));?>
        <div class="col-lg-6">
            <div class="form-group form_margin">
	    		  <?php
                                echo $this->Form->input('User.role_id',array('type'=>'hidden','value'=>$roleId));
                                echo $this->Form->input('User.store_id',array('type'=>'hidden'));
                                echo $this->Form->input('User.id',array('type'=>'hidden'));                      
                          ?>
                                            


                <label>Salutation<span class="required"> * </span></label>                
              
		            <?php echo $this->Form->input('User.salutation',array('type'=>'select','options'=>array('Mr.'=>'Mr.','Ms.'=>'Ms.','Mrs'=>'Mrs'),'class'=>'form-control valid','label'=>'','div'=>false)); ?>

            </div>
	    <div class="form-group form_margin">
                <label>First Name<span class="required"> * </span></label>                
              
		<?php echo $this->Form->input('User.fname',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Your First Name','maxlength'=>'50','label'=>'','div'=>false));
                  echo $this->Form->error('User.fname'); ?>
            </div>
	     <div class="form-group form_margin">
                <label>Last Name</label>                
              
		<?php echo $this->Form->input('User.lname',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Your Last Name','maxlength'=>'50','label'=>'','div'=>false));  
                  echo $this->Form->error('User.lname');?>
            </div>
        
            <div class="form-group form_margin">
                <label>Email<span class="required"> * </span></label>                
              
                <?php
                $readonly='';
                if(isset($this->request->data['User']['id']) && $this->request->data['User']['id']){
                    $readonly=true;
                }
                
                echo $this->Form->input('User.email',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Your Email','maxlength'=>'50','label'=>'','div'=>false,'required'=>true,'autocomplete' => 'off','readonly'=>$readonly));            
                  echo $this->Form->error('User.email'); ?>
            </div>
            <?php
            $userID='';
            if(isset($this->request->data['User']['id'])){
                $userID=$this->request->data['User']['id'];
            }
            
            
            if($userID==''){
            ?>
                <div class="form-group form_margin">
                <label>Password<span class="required"> * </span></label>
                <?php
                    echo $this->Form->input('User.password',array('type'=>'password','class'=>'form-control valid','placeholder'=>'Enter Your password','maxlength'=>'50','label'=>'','div'=>false,'required'=>true));            
                    echo $this->Form->error('User.password');
                ?>
                </div>
                <div class="form-group form_margin">
                <label>Confirm Password<span class="required"> * </span></label>
                <?php
                    echo $this->Form->input('User.password_match',array('type'=>'password','class'=>'form-control valid','placeholder'=>'Enter Confirm Password','maxlength'=>'50','label'=>'','div'=>false,'required'=>true));            
                    echo $this->Form->error('User.password_match');
                ?>
                </div>
            <?php
            }
            ?>
            <div class="form-group form_margin">
                <label>Mobile Phone<span class="required"> * </span></label>
                <?php 
                echo $this->Form->input('User.phone',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Mobile Phone','maxlength'=>'12','label'=>'','div'=>false,'required'=>true));            
                echo $this->Form->error('User.phone');
                ?>
            </div>         
            
        </div>
        <?php //echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
     <div class="row">
        
        <div class="col-lg-9">
            <h4><strong>Permissions</strong></h4>
            <?php            
            foreach($Tabs as $key =>$data){
                $checked="";
                if(isset($data['Permission']) && isset($data['Permission'][0]['tab_id'])){
                    $checked=true;
                }
                echo "<div class='new-chkbx-wrap'>";
                echo "<label>".$data['Tab']['tab_name']."</label>";
                echo $this->Form->checkbox('Permission.tab_id.'.$key,array('value'=>$data['Tab']['id'],'checked'=>$checked));
                echo "</div>";
            }
            ?>
            <div style="clear:both;"></div>
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/stores/staffList/", array("class" => "btn btn-default",'escape' => false)); ?>
            <?php echo $this->Form->end(); ?>
        </div>
        
        
    </div>
    
    <script>
    $(document).ready(function() {
	 $('.date_select').datepicker({
	       
	       dateFormat: 'mm-dd-yy',
	       
	   });
	    $("#UsersRegistration").validate({
            rules: {
                "data[User][fname]": {
                    required: true,
                    lettersonly: true, 
                },
                 "data[User][lname]": {
                    required: false,
                    lettersonly: true, 
                },
                 "data[User][email]": {
                    required: true,
                    email: true,
                    <?php
                    if (!isset($this->request->data['User']['id'])) {
                    ?>
                    
                    remote: "/stores/checkStoreEmail/<?php echo $roleId;?>/"
                    
                    <?php
                    }
                    ?>                    
		 
                },
                "data[User][password]": {
                    required: true,
                    alphanumeric:true,
                    minlength:8,
                    maxlength:20,
                },
                 "data[User][password_match]": { 
                required: true, equalTo: "#UserPassword", minlength: 8,maxlength:20, alphanumeric:true,
                },
                "data[User][phone]": { 
                required: true,
                number:true,
                minlength:10,
                maxlength:12,
                
                },  
            },
            messages: {
                "data[User][fname]": {
                    required: "Please enter your first name",
                    lettersonly:"Only alphabates allowed",
                },
                 "data[User][lname]": {
                    required: "Please enter your last name",
                    lettersonly:"Only alphabates Allowed",
                },
                "data[User][email]": {
                    required: "Please enter your email id ",
                    email:"Please enter valid email id ",
                    remote:"Email Already exist",
                },
                
                "data[User][password]": {
                    required: "Please enter your password",
                },
                "data[User][password_match]": {
                    required: "Please enter your password again.",
                    equalTo:"Password not matched"
                },
                 "data[User][phone]": {
                    required: "Please enter your phone number.",
                    number:"Only numbers are allowed"
                },
               
            }
        });
    });
</script>