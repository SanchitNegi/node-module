<?php App::uses('AppModel','Model');  
    class Offer extends AppModel {
        var $name = 'Offer';
        
        
    /*------------------------------------------------
     Function name:saveItem()
     Description:To Save Item Information
     created:04/8/2015
     -----------------------------------------------------*/	
    public function saveOffer($offerData=null){
          if($offerData){
            if($this->save($offerData)){		    
                    return true; //Success
               }else{			
                    return false;// Failure 
               }	       
          }         
    }
    
    /*------------------------------------------------
     Function name:getOfferDetails()
     Description:To get offer Details
     created:11/8/2015
     -----------------------------------------------------*/	
    
    public function getOfferDetails($offerid=null){
        $offer = $this->find('first',array('conditions'=>array('Offer.is_deleted'=>0,'Offer.id'=>$offerid),'recursive'=>3));
        if($offer){           
            return $offer;
        }else{
           return false;
        }
    }
    
    
    /*------------------------------------------------
     Function name:offerExistsOnItem()
     Description:To get offer Details
     created:11/8/2015
     -----------------------------------------------------*/	
    
    public function offerExistsOnItem($itemId=null,$startDate=null,$endDate=null,$offerId=null){
        
        $conditions=array('Offer.is_active'=>1,'Offer.is_deleted'=>0,'Offer.item_id'=>$itemId);       
        //if($startDate && $endDate){
        //    $conditions['Offer.offer_start_date >=']=$startDate;
        //    $conditions['Offer.offer_end_date <=']=$endDate;
        //}
        if($offerId){
            $conditions['Offer.id !=']=$offerId;
        }
        $offer = $this->find('first',array('conditions'=>$conditions));
        if($offer){           
            return $offer;
        }else{
           return false;
        }
    }
    
    public function offerOnItem($itemId=null){
        $date = date('Y-m-d');
        $conditions=array('Offer.is_active'=>1,'Offer.is_deleted'=>0,'Offer.item_id'=>$itemId);          
        $offer = $this->find('first',array('conditions'=>$conditions));
        if(!empty($offer)){
            if(($offer['Offer']['offer_start_date'] == "0000-00-00") || ($offer['Offer']['offer_start_date'] == "")){
                return $offer;
            } else {
                if(($offer['Offer']['offer_start_date'] <= $date) && ($offer['Offer']['offer_end_date'] >= $date)){
                    return $offer;
                } else {
                    $offer = array();
                    return $offer;
                }   
            }
        } else {
            return $offer;
        }
    }
    
    public function offerOnItemSize($itemId=null,$sizeId=null){
        $date = date('Y-m-d');
        $conditions=array('Offer.is_active'=>1,'Offer.is_deleted'=>0,'Offer.item_id'=>$itemId,'Offer.size_id'=>$sizeId);          
        $offer = $this->find('first',array('conditions'=>$conditions));
        if(!empty($offer)){
            if(($offer['Offer']['offer_start_date'] == "0000-00-00") || ($offer['Offer']['offer_start_date'] == "")){
                return $offer;
            } else {
                if(($offer['Offer']['offer_start_date'] <= $date) && ($offer['Offer']['offer_end_date'] >= $date)){
                    return $offer;
                } else {
                    $offer = array();
                    return $offer;
                }   
            }
        } else{
            return $offer;
        }
    }
    
        
        
}
?>