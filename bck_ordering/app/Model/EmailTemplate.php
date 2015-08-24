<?php

App::uses('AppModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class EmailTemplate extends AppModel {
    
    /*------------------------------------------------
     Function name:storeTemplates()
     Description:For fetching out the email templates related to the particulatr store
     created:22/7/2015
     -----------------------------------------------------*/
    public function storeTemplates($roleId=null,$storeId=null,$mechantId=null,$template_type=null){
        
        if($roleId==4){
         
        $templateContent = $this->find('first', array('conditions' => array('EmailTemplate.store_id' => $storeId,'EmailTemplate.merchant_id'=>$mechantId,'is_deleted'=>0,'template_code'=>$template_type)));
        
        }elseif($roleId==3){
         
        $templateContent = $this->find('first', array('conditions' => array('EmailTemplate.store_id' => $storeId,'EmailTemplate.merchant_id'=>$mechantId,'is_deleted'=>0,'template_code'=>$template_type)));
        
        }else{
            return false;
        }
        if($templateContent){
           // print_r($templateContent);die;
            return $templateContent;
        }else{
            return false;
        }
        
        
    }
    
    public function storePaymentTemplates($storeId=null,$mechantId=null,$template_type=null){
        $templateContent = $this->find('first', array('conditions' => array('EmailTemplate.store_id' => $storeId,'EmailTemplate.merchant_id'=>$mechantId,'is_deleted'=>0,'template_code'=>$template_type)));
        return $templateContent;
    }
    
}
?>