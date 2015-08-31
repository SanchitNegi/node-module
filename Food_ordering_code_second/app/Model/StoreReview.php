<?php App::uses('AppModel','Model');  
    class StoreReview extends AppModel {

     /*------------------------------------------------
     Function name:saveReview()
     Description:To Save Reviews and Rating Information
     created:11/8/2015
     -----------------------------------------------------*/	
    public function saveReview($data=null){
        if($data){
          if($this->save($data)){		    
                  return true; //Success
             }else{			
                  return false;// Failure 
             }	       
        }         
    }
    
     /*------------------------------------------------
     Function name:getReviewDetails()
     Description:To get list of reviews
     created:12/8/2015
     -----------------------------------------------------*/	
    
    public function getReviewDetails($decrypt_storeId=null,$order_item_id=null){
        $allReviews = $this->find('all',array('limit'=>'5','order'=>array('StoreReview.created DESC'),'conditions'=>array('StoreReview.order_item_id'=>$order_item_id,'StoreReview.store_id'=>$decrypt_storeId,'StoreReview.is_active'=>1,'StoreReview.is_deleted'=>0,'StoreReview.is_approved'=>1)));
        return $allReviews;
    }
    
    /*------------------------------------------------
     Function name:reviewDetails()
     Description:To get list of all reviews
     created:13/8/2015
     -----------------------------------------------------*/	
    
    public function reviewDetails($storeId=null){
        $Reviews = $this->find('all',array('limit'=>'5','order'=>array('StoreReview.created DESC'),'conditions'=>array('StoreReview.store_id'=>$storeId,'StoreReview.is_deleted'=>0)));
        return $Reviews;
    }
    
}

?>