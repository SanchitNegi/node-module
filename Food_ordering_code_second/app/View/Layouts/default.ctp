<!DOCTYPE html>
<html>
    
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		
		
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title><?php echo $title;?></title>
	<!--<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
	<?php
		echo $this->Html->meta('icon');
	        echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
                
                echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('master');
		echo $this->Html->css('color-theme');
                echo $this->Html->css('responsiveslides');
		
                echo $this->Html->script('jquery.min');
		echo $this->Html->script('bootstrap.min.js');
		echo $this->Html->script('responsiveslides.min');
		echo $this->Html->script('master');
                echo $this->Html->script('jquery-ui');
                echo $this->Html->script('validation/jquery.validate.js');
	        echo $this->Html->script('validation/additional-methods');
		
	
	?>
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="theme-one">
        <?php echo $this->element('front_header');?>
        <?php echo $this->element('front_banner');?>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->element('front_footer'); ?>
		
</body>
</html>
