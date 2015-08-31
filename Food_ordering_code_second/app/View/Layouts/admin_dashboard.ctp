<!DOCTYPE html>
<html lang="en">
    <head>
           
            <?php echo $this->Html->charset('UTF-8'); ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">  
        <link rel="shortcut icon" href="/ico/favicon.png">
        <title><?php echo ($this->params['controller']=='hq')?"HQ Admin":"Store Admin";?> Dashboard</title>
            <?php
                 echo $this->Html->css('star-rating'); 
                 echo $this->Html->css('store_admin/bootstrap'); 
                echo $this->Html->css('store_admin/sb-admin');
                echo $this->Html->css('store_admin/backend');     
                echo $this->Html->css('store_admin/font/css/font-awesome.min');
                echo $this->Html->css('store_admin/custom_admin');
                echo $this->Html->css('store_admin/jquery-ui');
                echo $this->Html->script('store_admin/jquery-1.11.0.min');
                echo $this->Html->script('store_admin/jquery-ui');
                echo $this->Html->script('store_admin/bootstrap');
                echo $this->Html->script('validation/jquery.validate.js');
                echo $this->Html->script('validation/additional-methods');
                echo $this->Html->script('store_admin/general');
                echo $this->Html->script('star-rating');
                
                
                
                    
            ?>

    </head>
    <body>
       
          

        <div id="wrapper" class="wrapper">

            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">        
                <div class="navbar-header">        
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="logoimg"><a href="/stores/dashboard" style="color:#FFFFFF;text-decoration: none;">Welcome to <?php
			echo ($this->params['controller']=='hq')?"HQ Admin":$this->Session->read('storeName')." Store";?></a></div> 
                </div>
                    <?php echo $this->element('admin/navigation'); ?>
            </nav>
            <div id="page-wrapper">
                <!-- Bread Crumb -->
                <div class="row">
                    <div class="col-lg-12">            
                        
                    </div>
                    <!-- Bread Crumb -->
                </div>
                    <?php echo $this->fetch('content'); ?>                    
            </div><!-- /#page-wrapper -->
            <div class="push"></div>
        </div><!-- /#wrapper -->
            <?php echo $this->element('admin/footer');
            ?>
     <?php echo $this->element('sql_dump'); ?>
    
    

    </body>
</html>