<script src="https://www.google.com/recaptcha/api.js"></script>
<div class="main-content clearfix">
    <div class="main-rgt-content clearfix">
        <div class="inner-sml-form">
            <?php
            echo $this->Session->flash();
            echo $this->Form->create('Users', array('inputDefaults' => array('label' => false, 'div' => false, 'required' => false, 'error' => false, 'legend' => false, 'autocomplete' => 'off'), 'id' => 'UsersRegistration'));
            echo $this->Form->input('User.role_id', array('type' => 'hidden', 'value' => 4));
            ?>
            <fieldset>
                <legend>Sign Up</legend>
                <dl class="reg-wrap">
                    <dt>Salutation</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.salutation', array('type' => 'select', 'options' => array('Mr.' => 'Mr.', 'Ms.' => 'Ms.', 'Mrs' => 'Mrs'), 'class' => 'txtbox usrname-input txtbx', 'label' => false, 'div' => false));
                        ?>
                    </dd>

                    <dt>First Name</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.fname', array('type' => 'text', 'class' => 'usrname-input txtbx', 'placeholder' => 'Enter Your First Name', 'maxlength' => '20', 'label' => false, 'div' => false));
                        echo $this->Form->error('User.fname');
                        ?>

                    </dd>

                    <dt>Last Name</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.lname', array('type' => 'text', 'class' => 'passwrd-input txtbx ', 'placeholder' => 'Enter Your Last Name', 'maxlength' => '20', 'label' => false, 'div' => false));
                        echo $this->Form->error('User.lname');
                        ?>

                    </dd>

                    <dt>Email</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.email', array('id' => 'oldemail', 'type' => 'text', 'class' => 'passwrd-input email txtbx', 'placeholder' => 'Enter Your Email', 'maxlength' => '50', 'label' => false, 'div' => false, 'required' => true, 'autocomplete' => 'off'));
                        echo $this->Form->error('User.email');
                        ?>
                    </dd>

                    <dt>Password</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.password', array('type' => 'password', 'class' => 'passwrd-input txtbx', 'placeholder' => 'Enter Your password', 'maxlength' => '20', 'label' => false, 'div' => false, 'required' => true, 'id' => 'signup_password', 'autocomplete' => 'off'));
                        echo $this->Form->error('User.password');
                        ?>
                    </dd>

                    <dt>Password Confirmation</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.password_match', array('type' => 'password', 'class' => 'passwrd-input txtbx', 'placeholder' => 'Confirm Password', 'maxlength' => '20', 'label' => false, 'div' => false));
                        echo $this->Form->error('User.password_match');
                        ?>
                    </dd>

                    <dt>Mobile Phone</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.phone', array('type' => 'text', 'class' => 'passwrd-input txtbx ', 'placeholder' => 'Mobile Phone', 'maxlength' => '12', 'label' => false, 'div' => false, 'required' => true));
                        echo $this->Form->error('User.phone');
                        ?>
                    </dd>

                    <dt>DOB</dt>
                    <dd>
                        <?php
                        echo $this->Form->input('User.dateOfBirth', array('type' => 'text', 'class' => 'passwrd-input date_select txtbx', 'placeholder' => 'Date of Birth', 'maxlength' => '12', 'label' => false, 'div' => false, 'required' => true, 'readOnly' => true));
                        echo $this->Form->error('User.dateOfBirth');
                        ?>
                    </dd>
                    <dt>&nbsp;</dt>
                    <dd>
                        <?php echo $this->Form->input('User.is_privacypolicy', array('label' => false, 'div' => false, 'type' => 'checkbox', 'checked' => true)) . "&nbsp"; ?><span>Agree to our Terms of Use & Privacy Policy ?</span>
                        <label id="data[User][is_privacypolicy]-error" class="error" for="data[User][is_privacypolicy]"></label>
                    </dd>
                    <dt>&nbsp;</dt>
                    <dd>
                        <div class="g-recaptcha" data-sitekey="<?php echo $googleSiteKey; ?>"></div>

                    </dd>
                    <dt>&nbsp;</dt>
                    <dd>
                        <?php echo $this->Form->submit('Sign Up', array('class' => 'float-left')); ?>
                        <?php
                        echo $this->Form->button('Cancel', array('type' => 'button', 'onclick' => "window.location.href='/users/login/'", 'class' => 'float-left btn-cancel'));
                        ?>
                    </dd>
                </dl>
                <div class="clearfix"></div>
            </fieldset>
            </form>
        </div>
    </div>
</div><!-- /main content end -->
</div><!-- /right side end -->
<div class="clearfix"></div>
<script>
    $(window).load(function () {
        $('#oldemail').val('');
        $('#signup_password').val('');
    });
    $(document).ready(function () {

        $('.date_select').datepicker({
            dateFormat: 'mm-dd-yy',
            changeMonth: true,
            changeYear: true,
            yearRange: '1950:2015',
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
                    remote: "checkEmail/4"
                },
                "data[User][password]": {
                    required: true,
                    minlength: 8,
                    maxlength: 20,
                    alphanumeric: true
                },
                "data[User][password_match]": {
                    equalTo: "#signup_password",
                },
                "data[User][phone]": {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 11,
                }, "data[User][dateOfBirth]": {
                    required: false,
                }, "data[User][is_privacypolicy]": {
                    required: true,
                },
            },
            messages: {
                "data[User][fname]": {
                    required: "Please enter your first name",
                    lettersonly: "Only alphabates are allowed",
                },
                "data[User][lname]": {
                    required: "Please enter your last name",
                    lettersonly: "Only alphabates are allowed",
                },
                "data[User][email]": {
                    required: "Please enter your email",
                    email: "Please enter valid email",
                    remote: "Email alreay exists",
                },
                "data[User][password]": {
                    required: "Please enter your password",
                    alphanumeric: 'Only letters,numbers,underscore are allowed',
                    minlength: "Please enter at least 8 characters",
                    maxlength: "Please enter no more than 20 characters",
                },
                "data[User][password_match]": {
                    required: "Please enter your password again",
                    equalTo: "Password not matched",
                    alphanumeric: 'Only letters,numbers,underscore are allowed',
                    minlength: "Please enter at least 8 characters",
                    maxlength: "Please enter no more than 20 characters",
                },
                "data[User][phone]": {
                    required: "Please enter your phone number",
                    number: "Only numbers are allowed"
                },
                "data[User][is_privacypolicy]": {
                    required: "Please agree to our Terms of use & Privacy policy.",
                },
            }
        });
    });
</script>