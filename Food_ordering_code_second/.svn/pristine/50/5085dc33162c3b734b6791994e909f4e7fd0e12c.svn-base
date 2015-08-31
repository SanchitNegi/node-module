<?php
/**
 * Application level View Helper
 *
 * This file is application-wide helper file. You can put all
 * application-wide helper-related methods here.
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
 * @package       app.View.Helper
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Helper', 'View');

/**
 * Application helper
 *
 * Add your application-wide methods in the class below, your helpers
 * will inherit them.
 *
 * @package       app.View.Helper
 */
class CommonHelper extends Helper {
     public $helper= array('Session');
     
     // get countries List as a dropdown 
	function getitemdetals($itemid=null) {
		// import the country DB
		$itemdetails = array();	    
		App::import("Model","Item");
		$this->Item=new Item();
		
		 $itemName = $this->Item->find('first',array('fields'=>array('id','name'),'conditions'=>array('Item.is_active'=>1,'Item.is_deleted'=>0,'Item.id'=>$itemid)));            
	      
		 if($itemName){               
		     return $itemName;
		 }else{
		    return false;
		 }
		
	}
	
	
    /*------------------------------------------------
    Function name:getItemSizes()
    Description:To find list of the Sizes
    created:3/8/2015
    -----------------------------------------------------*/
    public function getItemSize($itemId=null){        
	  $storeId=$_SESSION['store_id'];
	  App::import("Model","Item");
	  $this->Item=new Item();
	  App::import("Model","Size");
	  $this->Size=new Size();
	  App::import("Model","Category");
	  $this->Category=new Category();	  
	  if($itemId){
	      $sizeList='';
	      $category=$this->Item->getcategoryByitemID($itemId,$storeId);
	      if($category){
		 $categoryId=$category['Item']['category_id'];
		 if($this->Category->checkCategorySizeExists($categoryId,$storeId)){              
		    $sizeList=$this->Size->getCategorySizes($categoryId,$storeId);
		 }              
	      }
	      if($sizeList){
	       return $sizeList;
	      }else{
	        return false;
	      }
	  }else{
	      exit;
	  }
    }
    
    
     public function getStoreDetail($storeId=null){
	  
	 // echo "hiiii";die;
	  $storeId=$_SESSION['store_id'];
	  App::import("Model","Store");
	  $this->Store=new Store();	  
	  if($storeId){
	      $sizeList='';
	      $store=$this->Store->fetchStoreDetail($storeId);
	      if($store){
		   return $store;        
	      }
	      
	  }
    }
    
    // For permissions of navigation Panel
    
    function checkPermissionByTabName($tabname = null) {
	  $userId=AuthComponent::User('id'); 	 
	  if (!empty($tabname)) {
	       App::import('Model', 'Tab');
	       $this->Tab = new Tab();
	       $tabid = $this->Tab->getTabData($tabname);
	       App::import('Model', 'Permission');
	  $this->Permission = new Permission();
	      $permissiondata = $this->Permission->getPermissionData($userId, $tabid);                            
	      if (!empty($permissiondata)) {
		  $permission = 1;
	      } else {
		  $permission = 0;
	      }            
	      return $permission;
	  }
     }
     
     
     //Get Todays Order     
     function getTodaysOrder(){
	  $storeId=$_SESSION['store_id'];
	  if($storeId){
	       App::import('Model', 'Order');
	       $this->Order = new Order();
	       $totalorders=$this->Order->getTodaysOrder($storeId);
	       return $totalorders;
	  }
     }
     
     //get todays Pending Order
     function getTodaysPendingOrder(){
	  $storeId=$_SESSION['store_id'];
	  if($storeId){
	       App::import('Model', 'Order');
	       $this->Order = new Order();
	       $totalorders=$this->Order->getTodaysPendingOrder($storeId);
	       return $totalorders;
	  }
     }
     
     //get todays Bookings Request
     function getTodaysBookingRequest(){
	  $storeId=$_SESSION['store_id'];
	  if($storeId){
	       App::import('Model', 'Booking');
	       $this->Order = new Order();
	       $totalorders=$this->Order->getTodaysPendingOrder($storeId);
	       return $totalorders;
	  }
     }
     
      //get todays pending Bookings Request
     function getTodaysPendingBookings(){
	  $storeId=$_SESSION['store_id'];
	  if($storeId){
	       App::import('Model', 'Booking');
	       $this->Booking = new Booking();
	       $pendingbookings=$this->Booking->getTodaysPendingBookings($storeId);
	       return $pendingbookings;
	  }
     }
     
     
     //get HQ stores
     
     function getHQStores(){
	  echo "<pre>";
	  print_r($_SESSION);die;
	  if($storeId){
	       App::import('Model', 'Booking');
	       $this->Booking = new Booking();
	       $pendingbookings=$this->Booking->getTodaysPendingBookings($storeId);
	       return $pendingbookings;
	  }
     }
     
}
