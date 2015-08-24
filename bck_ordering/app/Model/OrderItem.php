<?php

App::uses('AppModel', 'Model');


class OrderItem extends AppModel {
    var $name = 'OrderItem';
    
    public function saveOrderItem($data=null){
        if($data){
            $res=$this->save($data);
            if($res){
                return true ;
            }else{
                return false;
            }
        }
        
    }
    
}