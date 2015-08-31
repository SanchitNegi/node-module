<?php
$latitude = $this->request->data['Store']['latitude'];
$logitude = $this->request->data['Store']['logitude'];
?>
<div class="row">
            <div class="col-lg-6">
                <h3>Manage Store Configuartion Details</h3> 
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
                  echo $this->Form->create('Stores', array('inputDefaults' => array('label' => false, 'div'=>false, 'required' => false, 'error' => false, 'legend' => false,'autocomplete' => 'off'),'id'=>'StoreConfiguration','enctype'=>'multipart/form-data'));
            ?>
<div class="col-lg-6">
	    <div class="form-group form_spacing">
            <?php
                  echo $this->Form->input('User.role_id',array('type'=>'hidden','value'=>$roleid));
                  echo $this->Form->input('Store.id',array('type'=>'hidden','value'=>$storeId));
                  echo $this->Form->input('User.id',array('type'=>'hidden','value'=>$userid));
            ?>
                  <label>Address</label>
            <?php
                  echo $this->Form->input('Store.address',array('type'=>'textarea','rows' => '5', 'cols' => '5','class'=>'form-control'));
            ?>
            </div>
            <div class="form-group form_margin">
                <label>City</label>
            <?php
                  echo $this->Form->input('Store.city',array('type'=>'text','class'=>'form-control'));
                  
            ?>
            </div>
            <div class="form-group form_margin">
                <label>State</label>
            <?php
                  echo $this->Form->input('Store.state',array('type'=>'text','class'=>'form-control'));
            ?>
            </div>
            <div class="form-group form_margin">
                <label>Zipcode</label>
            <?php
                  echo $this->Form->input('Store.zipcode',array('type'=>'text','class'=>'form-control'));
            ?>
            </div>
<?php if($latitude && $logitude){ ?>
            <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <style>
            #map{
                width: 200px;
                height: 200px;
            }
        </style>
        <div id="map"></div>
        <script>
            var origin1 = new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $logitude; ?>);
           
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: origin1,
            mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            
         var marker = new google.maps.Marker({
	 
	 position: new google.maps.LatLng(<?php echo $latitude; ?>, <?php echo $logitude; ?>),
	 map: map,
         //draggable: true,
	 icon: 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=S|f6f6f6',
	 });
         </script>
        <?php } ?>
            <div>
            <hr/>
            <span class="blue">(Authorized.net Configuration details)</span> 
            </div>
            <div class="form-group form_margin">
                <label>Authorized.net api key</label>
            <?php
                  echo $this->Form->input('Store.api_key',array('type'=>'input','class'=>'form-control'));
            ?>
            </div>
            <div class="form-group form_margin">
                <label>Authorized.net api username</label>
            <?php
                  echo $this->Form->input('Store.api_username',array('type'=>'input','class'=>'form-control'));
            ?>
            </div>
            <div class="form-group form_margin">
                <label>Authorized.net api password</label>
            <?php      
                  
                  echo $this->Form->input('Store.api_password',array('type'=>'input','class'=>'form-control'));
            ?>
            </div>           
            
            <div>
            <hr/>
            <span class="blue">(Twilio Configuration details)</span> 
            </div>
            <div class="form-group form_margin">
                <label>Twilio Sms Gateway Number</label>
            <?php
                  echo $this->Form->input('Store.twilio_number',array('type'=>'input','class'=>'form-control'));
            ?>
            </div>
            <div class="form-group form_margin">
                <label>Twilio api Key</label>
            <?php
                  echo $this->Form->input('Store.twilio_api_key',array('type'=>'input','class'=>'form-control'));
            ?>
            </div>
            <div class="form-group form_margin">
                <label>Twilio api token</label>
            <?php      
                  
                  echo $this->Form->input('Store.twilio_api_token',array('type'=>'input','class'=>'form-control'));
            ?>
            </div>
            <div>
            <hr/>
            </div>
            
            
            
            <div class="form-group form_spacing">
                <label>Minimum Order amount($)</label>
            <?php      
                  
                  echo $this->Form->input('Store.minimum_order_price',array('type'=>'text','class'=>'form-control'));
            ?>            
                <br/><label>Is Booking Open</label>
            <?php
                  $checked="";
                  if($this->request->data['Store']['is_booking_open']){
                    $checked="checked";
                  }                 
                  echo $this->Form->checkbox('Store.is_booking_open',array('checked'=>$checked));
            ?>
            </div>
            
            <hr/>            
            <div class="form-group form_margin">
                <label>Delivery fee($)</label>
            <?php      
                  
                  echo $this->Form->input('Store.delivery_fee',array('type'=>'text','class'=>'form-control'));
            ?>
            </div>
            <div class="form-group form_margin">
                <label>Service fee($)</label>
            <?php      
                  
                  echo $this->Form->input('Store.service_fee',array('type'=>'text','class'=>'form-control'));
            ?>
            </div>
            
            <div class="form-group form_spacing">
                <div style="float:left;"> 
                    <label>Background Image</label>             
                    <?php
                       echo $this->Form->input('Store.back_image',array('type'=>'file','label'=>'','div'=>false,'class'=>'form-control','style'=>"box-sizing:initial;"));
                       echo $this->Form->error('Store.background_image');
                    ?>
                     
		</div>
                
		<?php
		$EncryptStoreID=$this->Encryption->encode($this->request->data['Store']['id']);
		?>
		<div style="float:right;">
		<?php
		if($this->request->data['Store']['background_image']){
			echo $this->Html->image('/storeBackground-Image/'.$this->request->data['Store']['background_image'],array('alt' => 'Item Image','height'=>150,'width'=>150,'style'=>'border:1px solid #000000;margin:5px 0px 5px 5px;','title'=>'Item Image'));
			echo $this->Html->link("X",array('controller' => 'Stores', 'action' => 'deleteStoreBackgroundPhoto', $EncryptStoreID),array('confirm' => 'Are you sure to delete Background Photo?','title'=>'Delete Photo','style'=>'vertical-align:top;margin-right:10px;font-size:18px;font-weight:bold;'));
		}
		?>  
               
            
            </div>
            <div style="clear:both;"><br/></div>
            
            <div class="form-group form_margin">
            <?php
                  
                  echo $this->Form->button('Save', array('type' => 'submit','class' => 'btn btn-default')); echo "&nbsp;";
                  echo $this->Form->button('Cancel', array('type' => 'button','onclick'=>"window.location.href='/stores/configuration'",'class' => 'btn btn-default'));
            ?>
            </div>
            
            <?php
                  echo $this->Form->end();?>
               
</div>
<script>
    
</script>
   