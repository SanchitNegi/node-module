<?php
/**
 * Application model for CakePHP.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class DeliveryAddress extends AppModel {
     
        //***************Model Relation**************************//
        
        //     public $hasOne = array(
        //	    'DeliveryAddress' => array(
        //		'className' => 'DeliveryAddress',
        //		'conditions' => array('DeliveryAddress.is_deleted' => '0','DeliveryAddress.is_active'=>1),
        //		'order' => 'DeliveryAddress.created DESC'
        //	    )
        //     );
        
        
        //****************************************//
	
public $validate = array(
	  
	   'name_on_bell' => array(
	    'rule1' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter your name !!',
		)
	//    'rule2' =>array(
	//	    'rule' => '/^[a-zA-Z]*$/',
	//	   'message'   => 'Only letters allowed',
	//    )
	),
	  'address'=>array(
	    
	     'notEmpty' => array(
		  'rule' => 'notEmpty',
		  'message' => 'Please enter your address',
	      )
	  ),
	  'city'=>array(
	     'notEmpty' => array(
		  'rule' => 'notEmpty',
		  'message' => 'Please enter cuty',
	      ),
	      'pattern'=>array(
	       'rule'      => '/^[a-zA-Z]*$/',
	       'message'   => 'Only letters allowed',
	      )
	  ),
	  'state'=>array(
	     'notEmpty' => array(
		  'rule' => 'notEmpty',
		  'message' => 'Please enter state',
	      ),
	      'pattern'=>array(
	       'rule'      => '/^[a-zA-Z]*$/',
	       'message'   => 'Only letters allowed',
	      )
	  ), 
	  'phone'=>array(
	     'rule1' => array(
		  'rule' => 'notEmpty',
		  'message' => 'Please enter phone !!',
	      ),
	      'rule2' => array(
		  'rule' => 'numeric',
		  'message' => 'Please enter numbers only !!',
	      ),
	    'minLength' => array(
		      'rule' => array('minLength', 10),
		      'message' => 'Number must be atleast 10 characters long !!'
	      ),
	      'maxLength' => array(
		      'rule' => array('maxLength', 11),
		      'message' => 'Number cannot be more than 11 characters long !!'
	      ),
	  ), 
	  'zipcode'=>array(
	     'rule1' => array(
		  'rule' => 'notEmpty',
		  'message' => 'Please enter zipcode !!',
	      ),
	      'rule2' => array(
		  'rule' => 'numeric',
		  'message' => 'Please enter numbers only !!',
	      ),
	    'minLength' => array(
		      'rule' => array('minLength',5),
		      'message' => 'Number must be atleast 5 characters long !!'
	      ),
	      'maxLength' => array(
		      'rule' => array('maxLength',6),
		      'message' => 'Number cannot be more than 6 characters long !!'
	      ),
	  )
	  );
	 
        
    
   
   
    /*------------------------------------------------
     Function name:checkAddress()
     Description:To fetch the out the delivery address based on User Id
     created:22/7/2015
    -----------------------------------------------------*/
	
    public function checkAddress($userId=null,$roleId=null,$decrypt_storeId=null,$decrypt_merchantId=null){
                    if($decrypt_storeId){
                          
                            $result = $this->find('first',array('conditions'=>array('DeliveryAddress.user_id'=>$userId,'DeliveryAddress.store_id'=>$decrypt_storeId,'DeliveryAddress.merchant_id'=>$decrypt_merchantId,'DeliveryAddress.is_deleted'=>0,'DeliveryAddress.is_active'=>1)));		
                            
			    if($result){
                                return $result;
                            }else{
                                return false;
                            }
                    }
    
    }
    
    
    
      /*------------------------------------------------
     Function name:saveAddress()
     Description:To save delivery address
     created:28/7/2015
    -----------------------------------------------------*/
	
    public function saveAddress($data=null){
                    if($data){
                         if($this->save($data)){
				return true;	  
		          }else{
				return false;
			  }
                    }
    
    }
    
       /*------------------------------------------------
     Function name:fetchAddress()
     Description:To save delivery address
     created:28/7/2015
    -----------------------------------------------------*/
	
    public function fetchAddress($id=null,$user_id=null,$store_id=null){
                    if($id){
                       $result= $this->find('first',array('conditions'=>array('DeliveryAddress.id'=>$id,'DeliveryAddress.is_active'=>1,'DeliveryAddress.is_deleted'=>0)));
                       return $result;
                    }
    
    }
    

	 
	 
	 
	 
    
}
