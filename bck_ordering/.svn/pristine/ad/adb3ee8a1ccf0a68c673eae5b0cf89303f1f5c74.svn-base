<div class="main-content clearfix">
                <div class="main-rgt-content clearfix">
                	<div class="inner-sml-form">
                            <?php echo $this->Session->flash(); ?>
                    	  <?php echo $this->Form->create('User', array('autocomplete' => 'off'));?>
                        	<fieldset>
                            	<legend>Forgot Password</legend>
                                <h3></h3><br>
                                <dl class="forgot-pass clearfix">
                                    <dt>Email</dt>
                                    <dd>
                                        
                                        <?php echo $this->Form->input('User.email', array('label' => false, "placeholder" => "Please Enter Email Address", 'autofocus' => true, 'type' => 'text',"class"=>"txtbx")); ?>
                                        <?php echo $this->Form->input('User.role_id', array('type' => 'hidden',"value"=>4)); ?>
                                       
                                        
                                        
                                    </dd>
                                    
                                    <dt>&nbsp;</dt>
                                    <dd>
                                         <?php echo $this->Form->submit('Forgot Password', array('div' => false,'class'=>'float-left')); ?>
                                        
                                       </dd>
                                </dl>
                                <div class="clearfix"></div>
                            </fieldset>
                       <?php  echo $this->Form->end();?>
                    </div>
                </div>
            </div><!-- /main content end -->
        </div><!-- /right side end -->
        <div class="clearfix"></div>
     <script type="text/javascript">
    $("#UserForgetPasswordForm").validate({
        rules: {
            "data[User][email]": {
                required: true,
                email: true
            }
        },
        messages: {
            "data[User][email]": {
                required: "Please enter your email id"
            }
        }
    });
     $("#UserLoginForm").validate({
            rules: {
                "data[User][username]": {
                    required: true,
                    email:true,
                },
                "data[User][password]": {
                     required: true,
                    alphanumeric:true,
                    minlength:8,
                    maxlength:20,
                },
            },
            messages: {
                "data[User][username]": {
                    required: "Please enter your email address ",
                    email:"Please enter valid email"
                },
                "data[User][password]": {
                    required: "Please enter Password",
                     alphanumeric:"Only letters,number,underscores allowed"
                },
               
            }
    });
</script>