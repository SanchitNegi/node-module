<div class="content">
    <div class="wrap">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('User', array('autocomplete' => 'off'));?>
        <div class="clearfix">
            <section class="form-layout delivery-form">
               <h2> <span>Forgot Password</span> </h2>    	
                <dl>
                    <dt><label>Email <em>*</em></label></dt>
                    <dd>
                        <?php echo $this->Form->input('User.email', array('label' => false, "placeholder" => "Enter Your Email", 'autofocus' => true, 'type' => 'text',"class"=>"inbox")); ?>
                        <?php echo $this->Form->input('User.role_id', array('type' => 'hidden',"value"=>4)); ?>
                    </dd>

                    <dt>&nbsp;</dt>
                    <dd>
                         <button type="submit" class="btn green-btn"> <span>Submit</span> </button>
                    </dd>
                   
                   
                </dl>
            </section>
        </div>
        <?php  echo $this->Form->end();?>
    </div>
</div>
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
                required: "Please enter your email",
                email: "Please enter valid email",
            }
        }
    });
</script>