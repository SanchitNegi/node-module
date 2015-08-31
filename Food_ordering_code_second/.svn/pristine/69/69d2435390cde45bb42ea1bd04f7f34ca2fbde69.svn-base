<?php

App::uses('AppModel', 'Model');


class OrderPayment extends AppModel {
    
    
    public function savePayment($data=null){
        if($data){
            $res=$this->save($data);
            if($res){
                return true ;
            }else{
                return false;
            }
        }
        
    }
    
     /*------------------------------------------------
   Function name:transactionDetail()
   Description:To find list of the transaction
   created:20/8/2015
  -----------------------------------------------------*/
    public function transactionDetail($storeId=null,$merchantId=null){
       
       //echo $storeId." ".$merchantId;
        $transactionList =$this->find('all',array('conditions'=>array('OrderPayment.store_id'=>$storeId,'OrderPayment.is_active'=>1,'OrderPayment.is_deleted'=>0),'order' => array('created' => 'desc')));
        //echo "<pre>";print_r($categoryList);die;
        if($transactionList){
            return $transactionList;
         
        }
     }
    
    
}