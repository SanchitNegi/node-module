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
class Item extends AppModel {
     var $name = 'Item';
     
     
      /*------------------------------------------------
        Function name:checkItemUniqueName()
        Description:to check item name is unique
        created:3/8/2015
        -----------------------------------------------------*/
     public function checkItemUniqueName($itemName=null,$storeId=null,$Itemid=null){
        
            $conditions = array('LOWER(Item.name)'=>strtolower($itemName),'Item.store_id'=>$storeId,'Item.is_deleted'=>0);
            if($Itemid){
                $conditions['Item.id !=']=$Itemid;
            }
            $item =$this->find('first',array('fields'=>array('id'),'conditions'=>$conditions));            
            if($item){
                return 0;
            }else{
                return 1;
            }
     }
     
     
     /*------------------------------------------------
        Function name:checkItemUniqueName()
        Description:to check item name is unique
        created:3/8/2015
        -----------------------------------------------------*/
     public function fetchItemDetail($itemId=null,$storeId=null){            
           // echo $itemId;die;
            $item = $this->find('first',array('conditions'=>array('Item.store_id'=>$storeId,'Item.is_active'=>1,'Item.is_deleted'=>0,'Item.id'=>$itemId),'recursive'=>2));            
          // print_r($item);die;
            if($item){
               
                return $item;
            }else{
               return false;
            }
     }
     
     
     /*------------------------------------------------
     Function name:saveItem()
     Description:To Save Item Information
     created:04/8/2015
     -----------------------------------------------------*/	
    public function saveItem($itemData=null){
          if($itemData){
            if($this->save($itemData)){		    
                    return true; //Success
               }else{			
                    return false;// Failure 
               }	       
          }         
    }
    
     /*------------------------------------------------
     Function name:getItemsByCategory()
     Description:To get all items of category
     created:06/8/2015
     -----------------------------------------------------*/	
    public function getItemsByCategory($categoryID=null,$storeId=null){
        $itemList='';
        if($categoryID){
          $itemList = $this->find('list',array('conditions'=>array('Item.store_id'=>$storeId,'Item.is_active'=>1,'Item.is_deleted'=>0,'Item.category_id'=>$categoryID)));
        }
        if($itemList){               
          return $itemList;
        }else{
          return false;
        }        
    }
    
    
    /*------------------------------------------------
     Function name:getallItemsByStore()
     Description:To get all items of category
     created:06/8/2015
     -----------------------------------------------------*/	
    public function getallItemsByStore($storeId=null){
        $itemList='';
        if($storeId){
          $itemList = $this->find('list',array('conditions'=>array('Item.store_id'=>$storeId,'Item.is_active'=>1,'Item.is_deleted'=>0),'order'=>array('Item.name ASC')));
        }
        if($itemList){               
          return $itemList;
        }else{
          return false;
        }        
    }
    
    
    /*------------------------------------------------
        Function name:getcategoryByitemID()
        Description:to check item name is unique
        created:3/8/2015
        -----------------------------------------------------*/
     public function getcategoryByitemID($itemId=null,$storeId=null){            
           // echo $itemId;die;
            $categoryid = $this->find('first',array('fields'=>array('id','category_id'),'conditions'=>array('Item.store_id'=>$storeId,'Item.is_active'=>1,'Item.is_deleted'=>0,'Item.id'=>$itemId),'recursive'=>2));            
          // print_r($item);die;
            if($categoryid){               
                return $categoryid;
            }else{
               return false;
            }
     }
     
     /*------------------------------------------------
        Function name:getItemName()
        Description:to check item name is unique
        created:3/8/2015
        -----------------------------------------------------*/
     public function getItemName($itemId=null,$storeId=null){            
           // echo $itemId;die;
            $itemName = $this->find('first',array('fields'=>array('id','name'),'conditions'=>array('Item.store_id'=>$storeId,'Item.is_active'=>1,'Item.is_deleted'=>0,'Item.id'=>$itemId)));            
          // print_r($item);die;
            if($itemName){               
                return $itemName;
            }else{
               return false;
            }
     }
    
    
    /*------------------------------------------------
        Function name:getAllItems()
        Description:to get all Items
        created:3/8/2015
        -----------------------------------------------------*/
     public function getAllItems($storeId=null){            
           // echo $itemId;die;
            $itemNameList = $this->find('list',array('fields'=>array('id','name'),'conditions'=>array('Item.store_id'=>$storeId,'Item.is_active'=>1,'Item.is_deleted'=>0),'order'=>array('Item.name ASC')));            
          // print_r($item);die;
            if($itemNameList){               
                return $itemNameList;
            }else{
               return false;
            }
     }
     
    public function getItemById($itemId=null){
        $itemDetail = $this->find('first',array('conditions'=>array('Item.id'=>$itemId,'Item.is_active'=>1,'Item.is_deleted'=>0)));
        return $itemDetail;
    }
     
}
