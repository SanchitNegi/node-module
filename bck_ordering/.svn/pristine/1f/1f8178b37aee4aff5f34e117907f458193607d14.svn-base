<?php App::uses('AppModel','Model');  
    class Size extends AppModel {
        var $name = 'Size';
        
        /*------------------------------------------------
        Function name:getCategorySizes()
        Description:To find list of the categories from category table 
        created:3/8/2015
        -----------------------------------------------------*/
        public function getCategorySizes($categoryId=null,$storeId=null){      
            $sizeList =$this->find('list',array('fields'=>array('id','size'),'conditions'=>array('Size.category_id'=>$categoryId,'Size.store_id'=>$storeId,'Size.is_active'=>1,'Size.is_deleted'=>0)));            
            if($sizeList){
                return $sizeList;             
            }
        }
        
         /*------------------------------------------------
     Function name:saveSize()
     Description:To Save the Category Size 
     created:07/8/2015
     -----------------------------------------------------*/	
    public function saveSize($sizeData=null){
          if($sizeData){
            if($this->save($sizeData)){		    
                    return true; //Success
               }else{			
                    return false;// Failure 
               }	       
          }         
    }
    
     /*------------------------------------------------
        Function name:getSizeName()
        Description:To find list of the categories from category table 
        created:3/8/2015
        -----------------------------------------------------*/
        public function getSizeName($sizeId=null){      
            $size =$this->find('first',array('fields'=>array('size'),'conditions'=>array('Size.id'=>$sizeId,'Size.is_active'=>1,'Size.is_deleted'=>0)));            
            if($size){
                return $size;             
            }
        }
         
              /*------------------------------------------------
   Function name:getSizeDetail()
   Description:To find Detail of the Perticular category size from size table 
   created:7/8/2015
  -----------------------------------------------------*/
    public function getSizeDetail($sizeId=null,$storeId=null){
        $sizeDetail =$this->find('first',array('conditions'=>array('Size.store_id'=>$storeId,'Size.id'=>$sizeId)));     
        if($sizeDetail){
            return $sizeDetail;
         
        }
     }
     
     /*------------------------------------------------
        Function name:checkSizeUniqueName()
        Description:to check Category size name is unique
        created:7/8/2015
        -----------------------------------------------------*/
     public function checkSizeUniqueName($size=null,$storeId=null,$categoryId=null,$SizeId=null){
       
        
        $conditions = array('LOWER(Size.size)'=>strtolower($size),'Size.store_id'=>$storeId,'Size.category_id'=>$categoryId,'Size.is_deleted'=>0);
            if($SizeId){
                $conditions['Size.id !=']=$SizeId;
            }
            $size =$this->find('first',array('fields'=>array('id'),'conditions'=>$conditions));
            if($size){
                return 0;
            }else{
                return 1;
            }
        
           
     }
     

     
    }
?>