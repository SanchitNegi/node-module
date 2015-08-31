<?php App::uses('AppModel','Model');  
    class Category extends AppModel {
      
                
        
         
    /*------------------------------------------------
   Function name:categoryListing()
   Description:To find list of the categories from category table 
   created:3/8/2015
  -----------------------------------------------------*/
    public function findCategotyList($storeId=null,$merchantId=null){
       
       //echo $storeId." ".$merchantId;
        $categoryList =$this->find('all',array('fields'=>array('id','name','store_id','start_time','end_time','imgcat','is_meal','has_topping','is_sizeonly'),'conditions'=>array('Category.store_id'=>$storeId,'Category.is_active'=>1,'Category.is_deleted'=>0),'order' => array('name' => 'asc')));
        //echo "<pre>";print_r($categoryList);die;
        if($categoryList){
            return $categoryList;
         
        }
     }
     
     /*------------------------------------------------
   Function name:getCategoryList()
   Description:To find list of the categories from category table 
   created:3/8/2015
  -----------------------------------------------------*/
    public function getCategoryList($storeId=null){      
        $categoryList =$this->find('list',array('fields'=>array('id','name'),'conditions'=>array('Category.store_id'=>$storeId,'Category.is_active'=>1,'Category.is_deleted'=>0)));     
        if($categoryList){
            return $categoryList;
         
        }
     }
     
        
     /*------------------------------------------------
   Function name:getCategoryListHasTopping()
   Description:To find list of the categories from category table 
   created:3/8/2015
  -----------------------------------------------------*/
    public function getCategoryListHasTopping($storeId=null){      
        $categoryList =$this->find('list',array('fields'=>array('id','name'),'conditions'=>array('Category.store_id'=>$storeId,'Category.is_active'=>1,'Category.is_deleted'=>0,'Category.has_topping'=>1)));     
        if($categoryList){
            return $categoryList;
         
        }
     }
     
     
     /*------------------------------------------------
   Function name:getCategoryListIsSize()
   Description:To find list of the categories from category table 
   created:3/8/2015
  -----------------------------------------------------*/
    public function getCategoryListIsSize($storeId=null){      
        $categoryList =$this->find('list',array('fields'=>array('id','name'),'conditions'=>array('Category.store_id'=>$storeId,'Category.is_active'=>1,'Category.is_deleted'=>0,'or'=>array(array('Category.is_sizeonly'=>1),array('Category.is_sizeonly'=>3)))));     
        if($categoryList){
            return $categoryList;
         
        }
     }
     
     /*------------------------------------------------
   Function name:getCategorySizeType()
   Description:To find category "is_size" and "type" or not
   created:3/8/2015
  -----------------------------------------------------*/
    public function getCategorySizeType($categoryId=null,$storeId=null){      
        $sizeInfo =$this->find('first',array('fields'=>array('id','is_sizeonly','imgcat','name'),'conditions'=>array('Category.store_id'=>$storeId,'Category.id'=>$categoryId,'Category.is_active'=>1,'Category.is_deleted'=>0)));     
        if($sizeInfo){
            return $sizeInfo;
         
        }
     }
     
     /*------------------------------------------------
     Function name:saveCategory()
     Description:To Save Category Information
     created:05/8/2015
     -----------------------------------------------------*/	
    public function saveCategory($categoryData=null){
          if($categoryData){
            if($this->save($categoryData)){		    
                    return true; //Success
               }else{			
                    return false;// Failure 
               }	       
          }         
    }
    
         /*------------------------------------------------
   Function name:getCategoryDetail()
   Description:To find Detail of the Perticular categories from category table 
   created:6/8/2015
  -----------------------------------------------------*/
    public function getCategoryDetail($categoryId=null,$storeId=null){      
        $categoryDetail =$this->find('first',array('conditions'=>array('Category.store_id'=>$storeId,'Category.id'=>$categoryId)));     
        if($categoryDetail){
            return $categoryDetail;
         
        }
     }
     
          
      /*------------------------------------------------
        Function name:checkCategoryUniqueName()
        Description:to check Category name is unique
        created:6/8/2015
        -----------------------------------------------------*/
     public function checkCategoryUniqueName($categoreyName=null,$storeId=null,$CategoryId=null){
        
        $conditions = array('LOWER(Category.name)'=>strtolower($categoreyName),'Category.store_id'=>$storeId,'Category.is_deleted'=>0);
            if($CategoryId){
                $conditions['Category.id !=']=$CategoryId;
            }
            $category =$this->find('first',array('fields'=>array('id'),'conditions'=>$conditions));            
            if($category){
                return 0;
            }else{
                return 1;
            }
        
           
     }
     
     /*------------------------------------------------
        Function name:checkCategorySizeExists()
        Description:to check Category Size Applicable
        created:6/8/2015
        -----------------------------------------------------*/
     public function checkCategorySizeExists($CategoryId=null,$storeId=null){
        
            $conditions = array('Category.id'=>$CategoryId,'Category.store_id'=>$storeId,'Category.is_active'=>1,'Category.is_deleted'=>0,'OR' =>array(array('Category.is_sizeonly'=>1),array('Category.is_sizeonly'=>3)));            
           // print_r ($conditions);die;
            $category =$this->find('first',array('fields'=>array('id'),'conditions'=>$conditions));
           // print_r($category);die;
            if($category){
                return 1;
            }else{
                return 0;
            }
        
           
     }
    
     

    }
?>