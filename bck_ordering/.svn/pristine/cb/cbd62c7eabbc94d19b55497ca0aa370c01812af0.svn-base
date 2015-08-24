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
class Type extends AppModel {
     var $name = 'Type';
     
     
     
     
     
     public function getTypes($storeId=null){
        if($storeId){
            $typeList =$this->find('list',array('fields'=>array('id','name'),'conditions'=>array('Type.store_id'=>$storeId,'Type.is_active'=>1,'Type.is_deleted'=>0)));            
            if($typeList){
                return $typeList;             
            }
        }
     }
      public function findTypeName($typeId=null,$storeId=null){
        if($typeId){
            $typeList =$this->find('first',array('fields'=>array('name'),'conditions'=>array('Type.id'=>$typeId,'Type.store_id'=>$storeId,'Type.is_active'=>1,'Type.is_deleted'=>0)));            
            if($typeList){
                return $typeList;             
            }else{
               return false;
            }
        }
     }
     
      /*------------------------------------------------
        Function name:checkTypeUniqueName()
        Description:to check Type name is unique
        created:7/8/2015
        -----------------------------------------------------*/
     public function checkTypeUniqueName($typeName=null,$storeId=null,$TypeId=null){
        
        $conditions = array('LOWER(Type.name)'=>strtolower($typeName),'Type.store_id'=>$storeId,'Type.is_deleted'=>0);
            if($TypeId){
                $conditions['Type.id !=']=$TypeId;
            }
            $type =$this->find('first',array('fields'=>array('id'),'conditions'=>$conditions));            
            if($type){
                return 0;
            }else{
                return 1;
            }
        
           
     }
     
      /*------------------------------------------------
     Function name:saveType()
     Description:To Save Type Information
     created:07/8/2015
     -----------------------------------------------------*/	
    public function saveType($typeData=null){
          if($typeData){
            if($this->save($typeData)){		    
                    return true; //Success
               }else{			
                    return false;// Failure 
               }	       
          }         
    }
    
         /*------------------------------------------------
   Function name:getTypeDetail()
   Description:To find Detail of Type from type table 
   created:7/8/2015
  -----------------------------------------------------*/
    public function getTypeDetail($typeId=null,$storeId=null){      
        $typeDetail =$this->find('first',array('conditions'=>array('Type.store_id'=>$storeId,'Type.id'=>$typeId)));     
        if($typeDetail){
            return $typeDetail;
         
        }
     }

}
