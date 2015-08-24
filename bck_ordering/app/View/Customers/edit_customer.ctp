<?php ?>
    <div class="row">
            <div class="col-lg-6">
                <h3>Edit Customer</h3> <br>
                <?php echo $this->Session->flash();?>   
            </div> 
            <div class="col-lg-6">                        
                <div class="addbutton">                
                        <?php //echo $this->Html->link('Back','/admin/admins/dashboard/',array('title' => 'Back'));?>
                </div>
            </div>
    </div>   
    <div class="row">        

<?php
            echo $this->Form->create('Customer', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'UsersRegistration','enctype'=>'multipart/form-data'));

                           echo $this->Form->input('User.role_id',array('type'=>'hidden','value'=>4));
			    echo $this->Form->input('User.id',array('type'=>'hidden'));
			?>
        <div class="col-lg-6">            
	    <div class="form-group">		 
                <label>Salutation<span class="required"> * </span></label>               
              
	    <?php
		 echo $this->Form->input('User.salutation',array('type'=>'select','options'=>array('Mr.'=>'Mr.','Ms.'=>'Ms.','Mrs'=>'Mrs'),'class'=>'txtbox usrname-input txtbx','label'=>false,'div'=>false));

	?>
            </div>
	    
	   <div class="form-group form_margin">		 
                <label>First Name<span class="required"> * </span></label>               
              
		<?php
			echo $this->Form->input('User.fname',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Your First Name','label'=>false,'div'=>false));
			echo $this->Form->error('User.fname');
				       ?>

            </div>
	   <div class="form-group form_margin">		 
                <label>Last Name<span class="required"> * </span></label>               
              
		<?php 
					  echo $this->Form->input('User.lname',array('type'=>'text','class'=>'form-control valid ','placeholder'=>'Enter Your Last Name','label'=>false,'div'=>false));         
					  echo $this->Form->error('User.lname');
				       ?>

            </div>
	   
	    <div class="form-group form_margin">		 
                <label>Email<span class="required"> * </span></label>               
              
		<?php 
				       echo $this->Form->input('User.email',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Enter Your Email','label'=>false,'div'=>false,'required'=>true,'readonly' => true));            
				       echo $this->Form->error('User.email');
				    ?>

            </div>
	    
	     <div class="form-group form_margin">		 
                <label>Mobile Phone<span class="required"> * </span></label>               
              
		<?php
					  echo $this->Form->input('User.phone',array('type'=>'text','class'=>'form-control valid','placeholder'=>'Mobile Phone','label'=>false,'div'=>false,'required'=>true));            
					  echo $this->Form->error('User.phone');

				       ?>

            </div>
	     <div class="form-group form_margin">		 
                <label>DOB<span class="required"> * </span></label>               
              
		<?php
		$this->request->data['User']['dateOfBirth']=$this->Dateform->us_format($this->request->data['User']['dateOfBirth']);
				        echo $this->Form->input('User.dateOfBirth',array('type'=>'text','class'=>'form-control','div'=>false,'readonly'=>true));    
                
				       
				       echo $this->Form->error('User.dateOfBirth');
				       ?>

            </div>
	     <div class="form-group form_spacing">
                <label>Address</label> 
		<?php echo $this->Form->input('User.address',array('type'=>'textarea','class'=>'form-control valid','placeholder'=>'Address','label'=>'','div'=>false));  
                  echo $this->Form->error('User.address');?>
            </div>
             <br>
	    <div class="form-group form_margin">
                <label>Status<span class="required"> * </span></label>                
               &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                <?php    
                echo $this->Form->input('User.is_active', array(
  'type' => 'radio',
  'options' => array('1' => 'Active&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', '0' => 'Inactive') ,
  'default'=>1
));
                echo $this->Form->error('User.is_active');
                   ?>
            </div>
            
	    

             <?php //if($seasonalpost){ $display="style='display:block;'";}else{$display="style='display:none;'";}?>

	       	       
 
	  
            <?php echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default'));?>             
            <?php echo $this->Html->link('Cancel', "/customers/index/", array("class" => "btn btn-default",'escape' => false)); ?>
        </div>
        <?php echo $this->Form->end(); ?>
    </div><!-- /.row -->
    
    
   <script>
    $(document).ready(function() {
     
	 /*$('#UserDateOfBirth').datepicker({
	       
	       dateFormat: 'mm-dd-yy',
	         changeMonth: true,
            changeYear: true,
	    yearRange: '1950:2015',
	       
	   });*/
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
                },
                
                "data[User][phone]": { 
                required: true,
                number:true,
                minlength:10,
                maxlength:11,
                
                },"data[User][dateOfBirth]": { 
                required: false,
                
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
                    required: "Please enter your email",
                    email:"Please enter valid email",
                },
                
                 "data[User][phone]": {
                    required: "Please enter your phone number",
                    number:"Only numbers are allowed"
                },
               
            }
    });
	    
	     $('#UserFname').change(function(){
      var str = $(this).val();
      if ($.trim(str) === '') {
         $(this).val('');
         $(this).css('border', '1px solid red');
         $(this).focus();
      }else{
         $(this).css('border', '');
      }
      });     
	});
</script>