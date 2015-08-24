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
class User extends AppModel {
     
//***************Model Relation**************************//

     public $hasOne = array(
	    'DeliveryAddress' => array(
		'className' => 'DeliveryAddress',
		'conditions' => array('DeliveryAddress.is_deleted' => '0','DeliveryAddress.is_active'=>1),
		'order' => 'DeliveryAddress.created DESC',
		'dependent' => true,
		'foreignKey'=>'user_id'
	    )
     );


//****************************************//
    
public $validate = array(
	  
	   'username' => array(
	    'rule1' => array(
			'rule' => 'notEmpty',
			'message' => 'Please enter the email !!',
		),
	    'rule2' =>array(
		    'rule' => 'email',
		    'message' => 'Please enter the valid email !!',
	    )
	),
	  'fname'=>array(
	    
	     'notEmpty' => array(
		  'rule' => 'notEmpty',
		  'message' => 'Please Enter First Name',
	      ),
	     'pattern'=>array(
	       'rule'      => '/^[a-zA-Z]*$/',
	       'message'   => 'Only letters allowed',
	      )
	  ),
	//  'lname'=>array(
	//     'notEmpty' => array(
	//	  'rule' => 'notEmpty',
	//	  'message' => 'Please Enter Last Name',
	//      ),
	//      'pattern'=>array(
	//       'rule'      => '/^[a-zA-Z]*$/',
	//       'message'   => 'Only letters allowed',
	//      )
	//  ),  	     
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
	  'email' => array(
	      'rule1' => array(
			  'rule' => 'notEmpty',
			  'message' => 'Please enter the email !!',
		  ),
	      'rule2' =>array(
		      'rule' => 'email',
		      'message' => 'Please enter the valid email !!',
	      )/*,
	      'rule3' => array(
			  'rule'    => 'isUnique',
			  'message' => 'This email has already been taken.',
			  
	      ) */
	  ),
	
	  'password' => array(
	      'notEmpty' => array(
		      'rule' => 'notEmpty',
		      'message' => 'Please enter a valid password, No Spaces Allowed !!'
	      ),
	      'validPattern' => array(
		      'rule' => '/^[A-Za-z0-9_@]+$/',
		      'message' => 'Password must be alphanumeric!!'
	      ),
	      'minLength' => array(
		      'rule' => array('minLength', 8),
		      'message' => 'Password must be atleast 8 characters long !!'
	      ),
	      'maxLength' => array(
		      'rule' => array('maxLength', 20),
		      'message' => 'Password cannot be more than 20 characters long !!'
	      ),
	  
	  ),
	  'password_match' => array(
		 'notEmpty' => array(
		      'rule' => 'notEmpty',
		      'message' => 'Please enter password again!!'
		 ),
		 'compare'    => array(
		      'rule'      => array('validate_passwords'),
		      'message' => 'The passwords you entered do not match.',
		 ),			
		 'minLength' => array(
		      'rule' => array('minLength', 8),
		      'message' => 'Password must be atleast 8 characters long !!'
		 ),
		 'maxLength' => array(
		      'rule' => array('maxLength', 20),
		      'message' => 'Password cannot be more than 20 characters long !!'
		 )
	  )/*,
	  'dateOfBirth'=>array(
	     'notEmpty' => array(
		  'rule' => 'notEmpty',
		  'message' => 'Please Enter Date of Birth',
	      )*//*,
	     'rule1'=>array(
		   'rule' => array('date', 'mdy'),
		   'message' => 'You must provide your dateOfBirth in MM-DD-YYY format.'
	     )*/
	  );
	 
        
    
    //encrypt password before saving
    public function beforeSave($options = array()) {
	//echo "<pre>"; print_r($this->data);die;
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
    /*--------------------------------------------
     Function Name:validate_passwords
     Desc:Custom validation for confirm poassword
     created:22-7-2015
    ----------------------------------------------*/
    public function validate_passwords() {
      return $this->data[$this->alias]['password'] === $this->data[$this->alias]['password_match'];
    }
    
    
    /*--------------------------------------------
     Function Name:saveUserInfo()
     Desc:To save data on User table 
     created:22-7-2015
    ----------------------------------------------*/
    
    public function saveUserInfo($userData=null){
          
	  if($userData){
	        
		
	         if($this->save($userData)){
		    
			 return true; //Success
		    }else{
			
			 return false;// Failure 
		    }
	       
	  }
	
     }
     
     /*------------------------------------------------
     Function name:emailCheck()
     Description:Check for email already exist or not
     created:22/7/2015
     -----------------------------------------------------*/
        
        public function emailCheck($roleId=null,$storeId=null,$merchantId=null,$emailEntered=null){
	       if($emailEntered){
	       
		    $isValid=true;
		    if($roleId==4){
			 $result=$this->find('first',array('conditions'=>array('User.email'=>trim($emailEntered),'User.role_id'=>$roleId,'User.is_deleted'=>0,'User.store_id'=>$storeId),'fields'=>array('id')));
		    //print_r($result);die;
		    }else{
			 return false;
		    }
		    if ($result)
		    {
		    $isValid = false;
		    }
		    return $isValid;
	       
	       }
        }
	
     /*------------------------------------------------
     Function name:getRandomCode()
     Description:To generate random password
     created:22/7/2015
     -----------------------------------------------------*/
	
	 public function getRandomCode($length=8){
		    $this->layout = '';
		    $this->autoRender=false;
		    $chars ="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";//length:36
		    $final_rand='';
		    for($i=0;$i<$length; $i++){
		    $final_rand .= $chars[ rand(0,strlen($chars)-1)];
		    }
		    return $final_rand;
	  }
    
    
     /*------------------------------------------------
     Function name:checkForgetEmail()
     Description:To fetch the out the email when user will forget the password.
     created:22/7/2015
     -----------------------------------------------------*/
	
	 public function checkForgetEmail($roleId=null,$storeId=null,$merchantId=null,$email=null){
	                 if($email){
			     
			     if($roleId==4){ // Customer Role
			     
			         $userEmail = $this->find('first',array('conditions'=>array('User.email'=>$email,'User.store_id'=>$storeId,'User.is_deleted'=>0,'User.role_id'=>$roleId),'fields'=>array('User.id','User.email','User.fname','User.lname')));		
                                //echo "hi";print_r($userEmail);die;
			      }elseif($roleId==3){ // Customer Role
			         $userEmail = $this->find('first',array('conditions'=>array('User.email'=>$email,'User.store_id'=>$storeId,'User.is_deleted'=>0,'User.role_id'=>$roleId),'fields'=>array('User.id','User.email','User.fname','User.lname')));		
                              }else{
				   return false;
			      }
			      if($userEmail){
				   return $userEmail;
			      }else{
				   return false;
			      }
			      
			      
			 }
         
         }
	 
	 
     /*------------------------------------------------
     Function name:currentUserInfo()
     Description:To fetch the out the current info  when user will edit some thing.
     created:22/7/2015
     -----------------------------------------------------*/
	
	 public function currentUserInfo($userId){
	                 if($userId){
			         $userData = $this->find('first',array('conditions'=>array('User.id'=>$userId)));		
                                 if($userData){
					return $userData;
				 }else{
					return false;
				 }
			      
			      
			 }
         
         }
         
         
         /*------------------------------------------------
   Function name:getUserDetail()
   Description:To find Detail of the Perticular user from user table 
   created:10/8/2015
  -----------------------------------------------------*/
    public function getUserDetail($userId=null,$storeId=null){      
        if($userId){
			         $userData = $this->find('first',array('conditions'=>array('User.id'=>$userId,'User.store_id'=>$storeId),'recursive'=>-1));		
                                 if($userData){
					return $userData;
				 }else{
					return false;
				 }
			      
			      
			 }
     }
         
         
     /*------------------------------------------------
     Function name:storeemailExists()
     Description:To check if email already exists for store Users.
     created:27/7/2015
     -----------------------------------------------------*/
	
	 public function storeemailExists($email=null,$roleId=null,$storeId=null){ 
            if($email){
                    $isValid=true;
		    $result=$this->find('first',array('conditions'=>array('User.email'=>trim($email),'User.role_id'=>$roleId,'User.is_deleted'=>0,'User.is_active'=>1,'User.store_id'=>$storeId),'fields'=>array('id')));
		    
		    if ($result)
		    {
		    $isValid = false;
		    }
		    return $isValid;	       
	       } 
         } 
	 
    /*------------------------------------------------
        Function name:checkUserUniqueEmail()
        Description:to check user email for edit  is unique
        created:10/8/2015
        -----------------------------------------------------*/
     public function checkUserUniqueEmail($email=null,$storeId=null,$userId=null){
        
        $conditions = array('LOWER(User.email)'=>strtolower($email),'User.store_id'=>$storeId,'User.is_deleted'=>0);
            if($userId){
                $conditions['User.id !=']=$userId;
            }
            $data =$this->find('first',array('fields'=>array('id'),'conditions'=>$conditions));            
            if($data){
                return 0;
            }else{
                return 1;
            }
        
           
     }
    
}
