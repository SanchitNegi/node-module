<!-- HEADER START -->
    <header>
    	<!-- HEADER TOP -->
    	<div class="header-top">
        	<div class="wrap">
            	<ul>
                    <li>
                        <?php echo $this->Session->flash(); ?>
                            <?php echo $this->Form->create('User', array('controller' => 'users', 'action' => 'login', 'autocomplete' => 'off')); ?>
                            Email <?php echo $this->Form->input('User.email', array('type'=>'email',"placeholder" => "Enter Your Email", 'autofocus' => true, 'label' => false, 'maxlength' => '50', "class" => "inbox", 'div' => false)); ?>
                            Password <?php echo $this->Form->input('User.password', array("placeholder" => "Enter Your Password", 'label' => false, 'type' => 'password', 'div' => false, 'maxlength' => '20', "class" => "inbox")); ?>
                            <?php if (!empty($rem)): ?>
                                <?php echo $this->Form->input('User.remember', array('label' => false, 'div' => false, 'type' => 'checkbox', 'checked' => true)) . "&nbsp"; ?><span>Remember me</span>
                            <?php else: ?>
                                <?php echo $this->Form->input('User.remember', array('label' => false, 'div' => false, 'type' => 'checkbox', 'checked' => false)) . "&nbsp"; ?><span>Remember me</span>
                            <?php endif; ?>  
                            <input type="submit" value="Login">
                        <?php echo $this->Form->end(); ?>
                    </li>
                    <li><?php echo $this->Html->link('Signup', array('controller' => 'users', 'action' => 'registration')); ?></li>
                    <li><?php echo $this->Html->link('Forgot Password?', array('controller' => 'users', 'action' => 'forgetPassword')); ?></li>
                    
                </ul>
            </div>
        </div>
        <!-- /HEADER TOP -->
        
        <!-- HEADER BODY -->
        <section class="header-body clearfix">
        	<div class="wrap">
            	<h1><a href="javascript:void(0)">Restaurant <span>Online Ordering System</span></a></h1>
            </div>
        </section>
        <!-- /HEADER BODY -->
        
        <!-- MENU -->
        <nav class="nav-menu">
        	<div class="wrap">
                <a href="javascript:void(0)" class="small-screen-menu">MENU</a>
                <ul class="clearfix">
                    <li class="active"><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">About Us</a></li>
                    <li><a href="javascript:void(0)">Contact Us</a></li>
                    <li><a href="javascript:void(0)">Static Page 1</a></li>
                    <li><a href="javascript:void(0)">Static Page 2</a></li>
                </ul>
            </div>
        </nav>
        <!-- /MENU -->
    </header>
    <!-- END HEADER -->
       
        <script>
            $("#UserLoginForm").validate({
                rules: {
                    "data[User][email]": {
                        required: true,
                    },
                    "data[User][password]": {
                        required: true,
                    }
                },
                messages: {
                    "data[User][email]": {
                        required: "Please enter your email",
                    },
                    "data[User][password]": {
                        required: "Please enter your password",
                    }
                }
            });
        </script>

