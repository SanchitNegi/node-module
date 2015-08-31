<?php

App::uses('AppModel', 'Model');


class Store extends AppModel {
    
    
    /*----------------------------------------
     Funtion name:store_info
     Desc:To find the store id and merchant id
     created:22-07-2015
    *----------------------------------------*/
  
    public function store_info($storeName=null){
      
        $storeResult=$this->find('first',array('fields'=>array('id','merchant_id','store_name','store_url','service_fee','delivery_fee','minimum_order_price'),'conditions'=>array('Store.store_url'=>$storeName)));
        if($storeResult){
            return $storeResult;
        }else{
            return false;
        }
        
    }
    
     /*----------------------------------------
     Funtion name:fetchStoreDetail
     Desc:To find the store detail 
     created:22-07-2015
    *----------------------------------------*/
    public function fetchStoreDetail($storeId=null,$merchantId=null){
      
        $storeResult=$this->find('first',array('fields'=>array('id','store_name','store_url','email_id','address','city','state','phone','zipcode','latitude','logitude','api_key','api_username','api_password','is_booking_open','minimum_order_price','delivery_fee','service_fee','background_image','twilio_api_key','twilio_number','twilio_api_token'),'conditions'=>array('Store.id'=>$storeId)));
        if($storeResult){
            return $storeResult;
        }else{
            return false;
        }
        
    }
    
     /*------------------------------------------------
     Function name:saveStoreInfo()
     Description:To Save Store Information
     created:22/7/2015
     -----------------------------------------------------*/	
    public function saveStoreInfo($storeData=null){
          if($storeData){
            if($this->save($storeData)){		    
                    return true; //Success
               }else{			
                    return false;// Failure 
               }	       
          }         
    }
    
    
    
}