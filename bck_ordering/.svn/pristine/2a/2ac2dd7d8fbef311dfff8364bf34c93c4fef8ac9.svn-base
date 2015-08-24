<?php
$staffManagementPermission = $this->Common->checkPermissionByTabName('Staff Management');
$manageImagesPermission = $this->Common->checkPermissionByTabName('Manage Images');
$configurationPermission = $this->Common->checkPermissionByTabName('Configuration');
$storeTimingsPermission = $this->Common->checkPermissionByTabName('Store Timings');
$categoryPermission = $this->Common->checkPermissionByTabName('Category');
$sizePermission = $this->Common->checkPermissionByTabName('Size');
$typePermission = $this->Common->checkPermissionByTabName('Type');
$AddonsPermission = $this->Common->checkPermissionByTabName('Add-ons');
$menuPermission = $this->Common->checkPermissionByTabName('Menu Builder');
$CouponPermission = $this->Common->checkPermissionByTabName('Coupon');
$customerManagementPermission = $this->Common->checkPermissionByTabName('Customer Management');
$orderManagementPermission = $this->Common->checkPermissionByTabName('Order Management');
$promotionsPermission = $this->Common->checkPermissionByTabName('Promotions');
$reviewPermission= $this->Common->checkPermissionByTabName('Review & Ratings');
$kitchenPermission = $this->Common->checkPermissionByTabName('Kitchen Management');
$BookingsPermission = $this->Common->checkPermissionByTabName('Bookings');
$transactionPermission = $this->Common->checkPermissionByTabName('Transaction');
$staticpagesPermission = $this->Common->checkPermissionByTabName('Static Pages');
$NewslettersPermission = $this->Common->checkPermissionByTabName('Newsletter');

$roleId=AuthComponent::User('role_id');
?>

<div class="collapse navbar-collapse navbar-ex1-collapse">
    <?php if($roleId==3){?>             //Store Admin=3
    <ul class="nav navbar-nav side-nav">
    <?php if($staffManagementPermission==1){?>
     <li  <?php if($this->params['controller']=='stores' && ($this->params['action']=='manageStaff' || $this->params['action']=='staffList')){?> class="active" <?php }?>> <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo9"><i class="fa fa-fw fa-user"></i> Manage Staff <i class="fa fa-fw fa-caret-down"></i></a>
     
     
            <ul id="demo9" class="collapse">
                <li><?php echo $this->Html->link(__('Add New Staff'), array('controller' => 'stores', 'action' => 'manageStaff'), array('escape' => false)); ?> </li> 
                <li><?php echo $this->Html->link(__('View Staff'), array('controller' => 'stores', 'action' => 'staffList'), array('escape' => false)); ?> </li>                  
            </ul>
        </li>
    <?php } ?>
    
    <?php if($manageImagesPermission==1){?>
     <li <?php if($this->params['controller']=='stores' && $this->params['action']=='manageSliderPhotos'){?>class="active"<?php }?>><?php echo $this->Html->link(__('<i class="fa fa-picture-o"></i> Manage Images <i class=""></i>'), array('controller' => 'stores', 'action' => 'manageSliderPhotos'), array('escape' => false)); ?></li>
     <?php } ?>
     
    <?php if($configurationPermission==1){?> 
      <li <?php if($this->params['controller']=='stores' && $this->params['action']=='configuration'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-fw fa-cog"></i> Configuration <i class=""></i>'), array('controller' => 'stores', 'action' => 'configuration'), array('escape' => false)); ?></li>
    <?php } ?>
    
    <?php if($storeTimingsPermission==1){?>   
      <li <?php if($this->params['controller']=='stores' && $this->params['action']=='manageTimings'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-clock-o"></i> Store Hours <i class=""></i>'), array('controller' => 'stores', 'action' => 'manageTimings'), array('escape' => false)); ?></li>       
    <?php } ?>
    
    <?php if($categoryPermission==1){?>      
      <li <?php if($this->params['controller']=='categories' && ($this->params['action']=='index' || $this->params['action']=='categoryList')){?> class="active" <?php }?> > <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo14"><i class="fa fa-asterisk"></i> Manage Category <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo14" class="collapse">
		<li><?php echo $this->Html->link(__('Add Category'), array('controller' => 'categories', 'action' => 'index'), array('escape' => false)); ?> </li> 
               <li><?php echo $this->Html->link(__('View Category'), array('controller' => 'categories', 'action' => 'categoryList'), array('escape' => false)); ?> </li>         
            </ul>
      </li>
    <?php } ?>
    
    <?php if($sizePermission==1){?>   
      <li <?php if($this->params['controller']=='sizes' && ($this->params['action']=='index' || $this->params['action']=='addSize')){?> class="active" <?php }?> > <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo16"><i class="fa fa-asterisk"></i> Manage Sizes <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo16" class="collapse">
		<li><?php echo $this->Html->link(__('Add Size'), array('controller' => 'sizes', 'action' => 'addSize'), array('escape' => false)); ?> </li> 
               <li><?php echo $this->Html->link(__('View Size'), array('controller' => 'sizes', 'action' => 'index'), array('escape' => false)); ?> </li>         
            </ul>
      </li>
    <?php } ?>
    
    <?php if($typePermission==1){?>   
       <li <?php if($this->params['controller']=='types' && ($this->params['action']=='index' || $this->params['action']=='addType')){?> class="active" <?php }?> > <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo17"><i class="fa fa-asterisk"></i> Manage Types<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo17" class="collapse">
		<li><?php echo $this->Html->link(__('Add Type'), array('controller' => 'types', 'action' => 'addType'), array('escape' => false)); ?> </li> 
               <li><?php echo $this->Html->link(__('View Type'), array('controller' => 'types', 'action' => 'index'), array('escape' => false)); ?> </li>         
            </ul>
      </li>
    <?php } ?>
    
    <?php if($AddonsPermission==1){?>   
      <li  <?php if($this->params['controller']=='toppings' && ($this->params['action']=='index' || $this->params['action']=='addTopping')){?> class="active" <?php }?> > <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo15"><i class="fa fa-asterisk"></i> Manage Add-ons <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo15" class="collapse">
		<li><?php echo $this->Html->link(__('Add Add-on'), array('controller' => 'toppings', 'action' => 'addTopping'), array('escape' => false)); ?> </li> 
               <li><?php echo $this->Html->link(__('View Add-ons'), array('controller' => 'toppings', 'action' => 'index'), array('escape' => false)); ?> </li>         
            </ul>
      </li>
    <?php } ?>
    
    <?php if($menuPermission==1){?>   
      <li  <?php if($this->params['controller']=='items' && ($this->params['action']=='addMenuItem' || $this->params['action']=='index')){?> class="active" <?php }?>> <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo13"><i class="fa fa-cutlery"></i> Menu Builder <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo13" class="collapse">		
               <li><?php echo $this->Html->link(__('Add Menu Item'), array('controller' => 'items', 'action' => 'addMenuItem'), array('escape' => false)); ?> </li>
	       <li><?php echo $this->Html->link(__('View Items'), array('controller' => 'items', 'action' => 'index'), array('escape' => false)); ?> </li> 
            </ul>
      </li>
    <?php } ?>
    
    <?php if($CouponPermission==1){?>     
        <li <?php if($this->params['controller']=='coupons' && ($this->params['action']=='index' || $this->params['action']=='addCoupon')){?> class="active" <?php }?> > <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo18"><i class="fa fa-asterisk"></i> Manage Coupons<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo18" class="collapse">
		<li><?php echo $this->Html->link(__('Add Coupon'), array('controller' => 'coupons', 'action' => 'addCoupon'), array('escape' => false)); ?> </li> 
               <li><?php echo $this->Html->link(__('View Coupon'), array('controller' => 'coupons', 'action' => 'index'), array('escape' => false)); ?> </li>         
            </ul>
      </li>
    <?php } ?>
    
    <?php if($customerManagementPermission==1){?> 
	<li <?php if($this->params['controller']=='customers' && $this->params['action']=='index'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-user"></i> Customer Management <i class=""></i>'), array('controller' => 'customers', 'action' => 'index'), array('escape' => false)); ?></li>
    <?php } ?>
    
    <?php if($orderManagementPermission==1){?> 	
	<li <?php if($this->params['controller']=='orders' && $this->params['action']=='index'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-shopping-cart"></i> Order Management <i class=""></i>'), array('controller' => 'orders', 'action' => 'index'), array('escape' => false)); ?></li>     
    <?php } ?>
    
    <?php if($promotionsPermission==1){?>       
       <li <?php if($this->params['controller']=='Offers' && ($this->params['action']=='index' || $this->params['action']=='addOffer')){?> class="active" <?php }?> > <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo21"><i class="fa fa-star"></i>Promotions<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo21" class="collapse">
		<li><?php echo $this->Html->link(__('Add Promotions'), array('controller' => 'Offers', 'action' => 'addOffer'), array('escape' => false)); ?> </li>
		<li><?php echo $this->Html->link(__('View promotions'), array('controller' => 'Offers', 'action' => 'index'), array('escape' => false)); ?> </li> 
                        
            </ul>
      </li>
    <?php } ?>
    
    <?php if($reviewPermission==1){?>    
       	<li <?php if($this->params['controller']=='orders' && $this->params['action']=='reviewRating'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-user"></i> Review & Ratings<i class=""></i>'), array('controller' => 'orders', 'action' => 'reviewRating'), array('escape' => false)); ?></li>
    <?php } ?>
    
    <?php if($kitchenPermission==1){?> 
    	<li <?php if($this->params['controller']=='kitchens' && $this->params['action']=='index'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-user"></i>Kitchen Dashboard<i class=""></i>'), array('controller' => 'kitchens', 'action' => 'index'), array('escape' => false)); ?></li>
    <?php } ?>
    
      <?php if($BookingsPermission==1){?> 
      <li <?php if($this->params['controller']=='bookings' && $this->params['action']=='index'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-user"></i>Manage Bookings<i class=""></i>'), array('controller' => 'bookings', 'action' => 'index'), array('escape' => false)); ?></li>     
      <?php } ?>
    <?php if($NewslettersPermission==1){?> 
    <li <?php if($this->params['controller']=='newsletters' && ($this->params['action']=='index')){?> class="active" <?php }?> > <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo23"><i class="fa fa-star"></i>Newsletter<i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="demo23" class="collapse">
		<li><?php echo $this->Html->link(__('Add Newsletter'), array('controller' => 'newsletters', 'action' => 'index'), array('escape' => false)); ?> </li>
              	<li><?php echo $this->Html->link(__('View Newsletter'), array('controller' => 'newsletters', 'action' => 'newsletterList'), array('escape' => false)); ?> </li>
           
            </ul>
      </li>
       <?php } ?>
      <?php if($staticpagesPermission==1){?> 
    	<li <?php if($this->params['controller']=='contents' && $this->params['action']=='pageList'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-user"></i>Static Pages<i class=""></i>'), array('controller' => 'contents', 'action' => 'pageList'), array('escape' => false)); ?></li>
    <?php } ?>
      
       <?php if($transactionPermission==1){?> 
    	<li <?php if($this->params['controller']=='payments' && $this->params['action']=='paymentList'){?> class="active" <?php }?>><?php echo $this->Html->link(__('<i class="fa fa-user"></i>Transaction<i class=""></i>'), array('controller' => 'payments', 'action' => 'paymentList'), array('escape' => false)); ?></li>
    <?php } ?>     
    </ul>
    

    <ul class="nav navbar-nav navbar-right navbar-user">        
        <li class="dropdown user-dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['Auth']['User']['fname']; ?> <b class="caret"></b></a>              
            <ul class="dropdown-menu">

                <li>

                </li>
                <li>

                    <?php echo $this->Html->link('Profile',array('controller'=>'stores','action'=>'myProfile')); ?>


                </li>



                <li class="divider"></li>
                <li>

                  	<?php echo $this->Html->link('Logout',array('controller'=>'stores','action'=>'logout'));?>
                </li>                
            </ul>
        </li>
    </ul>
    
    <?php }elseif($roleId==2){?>		// HQAdmin=2
		
    <ul class="nav navbar-nav side-nav">
    <?php if($staffManagementPermission==1){?>
     <li  <?php if($this->params['controller']=='stores' && ($this->params['action']=='manageStaff' || $this->params['action']=='staffList')){?> class="active" <?php }?>> <a href="javascript:void(0);" data-toggle="collapse" data-target="#demo9"><i class="fa fa-fw fa-user"></i> Manage Staff <i class="fa fa-fw fa-caret-down"></i></a>
     
     
            <ul id="demo9" class="collapse">
                <li><?php echo $this->Html->link(__('Add New Staff'), array('controller' => 'stores', 'action' => 'manageStaff'), array('escape' => false)); ?> </li> 
                <li><?php echo $this->Html->link(__('View Staff'), array('controller' => 'stores', 'action' => 'staffList'), array('escape' => false)); ?> </li>                  
            </ul>
        </li>
    <?php } ?>
    </ul>    
    
    <ul class="nav navbar-nav navbar-right navbar-user">        
        <li class="dropdown user-dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['Auth']['User']['fname']; ?> <b class="caret"></b></a>              
            <ul class="dropdown-menu">
                <li></li>
                <li><?php echo $this->Html->link('Profile',array('controller'=>'hq','action'=>'myProfile')); ?></li>
                <li class="divider"></li>
                <li><?php echo $this->Html->link('Logout',array('controller'=>'hq','action'=>'logout'));?></li>                
            </ul>
        </li>
    </ul>
    <?php } ?>
</div>
