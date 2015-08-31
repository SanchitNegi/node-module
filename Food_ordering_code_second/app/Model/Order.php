<?php

App::uses('AppModel', 'Model');


class Order extends AppModel {
    var $name = 'Order';
    
    /*------------------------------------------------
     Function name:saveOrder()
     Description:To save order
     created:11/8/2015
     -----------------------------------------------------*/
    
    public function saveOrder($data=null){
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
     Function name:getSingleOrderDetail()
     Description:To get the orders details
     created:12/8/2015
     -----------------------------------------------------*/	
    
    public function getSingleOrderDetail($merchantId=null,$storeId=null,$orderId=null){
        $orderDetail = $this->find('all',array('recursive'=>3,'conditions'=>array('Order.merchant_id'=>$merchantId,'Order.id'=>$orderId,'Order.store_id'=>$storeId,'Order.is_active'=>1,'Order.is_deleted'=>0)));
        return $orderDetail;
    }
    
    /*------------------------------------------------
     Function name:getOrderDetails()
     Description:To get list of orders
     created:11/8/2015
     -----------------------------------------------------*/	
    
    public function getOrderDetails($decrypt_merchantId=null,$decrypt_storeId=null,$decrypt_userId=null){
        $myOrders = $this->find('all',array('order'=>'Order.created DESC','recursive'=>3,'conditions'=>array('Order.merchant_id'=>$decrypt_merchantId,'Order.user_id'=>$decrypt_userId,'Order.store_id'=>$decrypt_storeId,'Order.is_active'=>1,'Order.is_deleted'=>0)));
        return $myOrders;
    }
    
    
     
    public function getfirstOrder($merchantId=null,$storeId=null,$orderId=null){
        $orderDetail = $this->find('first',array('recursive'=>3,'conditions'=>array('Order.merchant_id'=>$merchantId,'Order.id'=>$orderId,'Order.store_id'=>$storeId,'Order.is_active'=>1,'Order.is_deleted'=>0)));
        return $orderDetail;
    }
    
    public function getOrderById($orderId=null){
        $orderDetail = $this->find('first',array('recursive'=>3,'conditions'=>array('Order.id'=>$orderId)));
        return $orderDetail;
    }
    /*------------------------------------------------
     Function name:getUserOrderDetail()
     Description:To get the user all orders details
     created:18/8/2015
     -----------------------------------------------------*/	
    
    public function getUserOrderDetail($merchantId=null,$storeId=null,$userId=null){
        $orderDetail = $this->find('all',array('recursive'=>3,'conditions'=>array('Order.merchant_id'=>$merchantId,'Order.user_id'=>$userId,'Order.store_id'=>$storeId,'Order.is_active'=>1,'Order.is_deleted'=>0)));
        return $orderDetail;
    }
    
    
    public function getTodaysOrder($storeId=null){
        $todaydate=date('Y-m-d');
        $ordercount = $this->find('count',array('fields'=>array('id'),'conditions'=>array('Order.store_id'=>$storeId,'Order.is_active'=>1,'DATE(Order.created)'=>$todaydate)));
        return $ordercount;
    }
    
    public function getTodaysPendingOrder($storeId=null){
        $todaydate=date('Y-m-d');
        $ordercount = $this->find('count',array('fields'=>array('id'),'conditions'=>array('Order.store_id'=>$storeId,'Order.is_active'=>1,'DATE(Order.created)'=>$todaydate),'Order.order_status_id'=>1));
        return $ordercount;
    }
    
}