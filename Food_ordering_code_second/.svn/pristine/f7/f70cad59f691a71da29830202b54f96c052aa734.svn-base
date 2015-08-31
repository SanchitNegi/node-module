<?php

App::uses('AppModel', 'Model');


class Booking extends AppModel {
    
    
    /*----------------------------------------
     Funtion name:saveBookingDetails
     Desc:To save booking info
     created:22-07-2015
    *----------------------------------------*/
    public function saveBookingDetails($data=null){
      
       if($data){
         if($this->save($data)){
            return true;
         }else{
            return false;
         }
        
       }
    }
    
     /*----------------------------------------
     Funtion name:fetchStoreDetail
     Desc:To find the store detail 
     created:22-07-2015
    *----------------------------------------*/
    public function fetchStoreDetail($storeId=null,$merchantId=null){
      
        $storeResult=$this->find('first',array('fields'=>array('id','store_name','email_id','address','city','state','phone','zipcode','latitude','logitude','api_key','api_username','api_password','is_booking_open','starttime','endtime'),'conditions'=>array('Store.id'=>$storeId,'Store.merchant_id'=>$merchantId)));
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
    
     /*----------------------------------------
     Funtion name:fetchStoreDetail
     Desc:To find the store detail 
     created:22-07-2015
    *----------------------------------------*/
    public function fetchStoreDetailBooked($storeId=null,$start_date=null,$end_date=null){
        $storeResult=$this->find('all',array('fields'=>array('id','reservation_date'),'conditions'=>array('Booking.store_id'=>$storeId,'Booking.booking_status_id'=>5,'Booking.is_active'=>1,'Booking.is_deleted'=>0,'Booking.reservation_date >= '=>$start_date,'Booking.reservation_date <= '=>$end_date)));
        return $storeResult; 
    }
    
    // Get today bookings request
    public function getTodaysBookingRequest($storeId=null){
        $todaydate=date('Y-m-d');
        $bookingcount = $this->find('count',array('fields'=>array('id'),'conditions'=>array('Booking.store_id'=>$storeId,'Booking.is_active'=>1,'DATE(Booking.created)'=>$todaydate)));
        return $bookingcount;
    }
    
    //Get today pending Booking Request
    public function getTodaysPendingBookings($storeId=null){
        $todaydate=date('Y-m-d');
        $bookingcount = $this->find('count',array('fields'=>array('id'),'conditions'=>array('Booking.store_id'=>$storeId,'Booking.is_active'=>1,'DATE(Booking.created)'=>$todaydate),'Booking.booking_status_id'=>1));
        return $bookingcount;
    }
    
     
     
}