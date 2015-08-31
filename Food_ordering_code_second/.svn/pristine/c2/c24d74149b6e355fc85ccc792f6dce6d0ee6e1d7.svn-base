<?php
    /*
        * Categories Controller class
        * Functionality -  Manage the Categories Management
        * Developer - Navdeep kaur
        * Created date - 16-Apr-2014
        * Modified date - 
    */
    class CategoriesController extends CategoriesAppController {        
        var $name = 'Categories';                
	public $components = array('Paginator','Categories.Common','Categories.Image');
				
		
        function beforeFilter(){
            parent::beforeFilter();    
            
        }
		
	/*
            * admin_index function
            * Functionality -  Categories Listing
            * Developer - Navdeep kaur
            * Created date - 12-Feb-2014
            * Modified date - 
        */
        function index($pCategoryId =null)
        {    	
		
		/* Active/Inactive/Delete functionality */
			if((isset($this->request->data["Category"]["setStatus"])))
			{
				if(!empty($this->request->data['Category']['status'])){
					$status = $this->request->data['Category']['status'];
				}else
				{
					$this->Session->setFlash("Please select the action.",'default',array('class'=>'alert alert-danger'));	
					$this->redirect(array('action' => 'index'));
					
				}
				$CheckedList = $this->request->data['checkboxes'];
				$model='Category';				
				$controller = $this->params['controller'];				
				$action = $this->params['action'];				
				$this->setStatus($status,$CheckedList,$model,$controller,$action); 			 
			}
			/* Active/Inactive/Delete functionality */	
			$value ="";
			if($pCategoryId != ""){
				$pCategoryId = base64_decode($pCategoryId);
			}
			$limit= 10;
			$pagination_start='';
			//Code for webservice
			if($this->request->accepts('application/json')) {
				$input = json_decode(file_get_contents('php://input'), true);
				$page_num=isset($input['page_num'])?$input['page_num']:'';
				$limit=isset($input['limit'])?$input['limit']:'';
				$pCategoryId =isset($input['parent_category_id'])?$input['parent_category_id']:'';
				if(!empty($page_num))
				{
					$pagination_start=($page_num-1)*$limit;
				}
				
			}
			//Code for webservice (ends here)
			
			if($pCategoryId != ""){
				$criteria = array("is_deleted" => 0 ,"parent_id" => $pCategoryId);
			}else{				
				$criteria = array("is_deleted" => 0 ,"parent_id" => NULL );
			}
			
			if(!empty($this->params)){ 
					if(!empty($this->params->query['keyword'])){
						$value = trim($this->params->query['keyword']);	
					}
					if($value !="") {
						$criteria = array("Category.is_deleted" => 0 );
						$criteria["Category.category LIKE"] = "%".$value."%";
					}
			}
				
			$this->Paginator->settings = array('conditions' => array($criteria),
				'limit' => $limit,
				'page'=>$pagination_start,
				'fields' => array('Category.id',
								  'Category.category',	  
								  'Category.status',
								  'Category.parent_id',
								  'Category.image',
								  'Category.created'								  
								  ),
				'order' => array(
					'Category.id' => 'DESC'
				)
			);
			$catData = $this->Paginator->paginate('Category');
			
			//Code for webservice
			if($this->request->accepts('application/json')) {
				$messageId= 200 ;
			    $message = "Success";
				$finalData['result'] = $catData;
				$finalData['message'] = $message;
				$finalData['messageId'] = $messageId;	
				$finalData['total_records'] = $this->params['paging']['Category']['count'];
				$finalData['total_pages'] = $this->params['paging']['Category']['pageCount'];
				echo json_encode($finalData); exit;
			}else{
			//Code for webservice
			// Used to show count of data in breadcrum
			if($pCategoryId != ""){
				$getrecCount = $this->Category->find('count',array('conditions'=>array('is_deleted'=>0,"parent_id" => base64_decode($pCategoryId))));
			}else{
				$getrecCount = $this->Category->find('count',array('conditions'=>array('is_deleted'=>0,"parent_id" => NULL )));
			}
			
			$this->set('getrecCount',$getrecCount);
			
			$this->set('getData',$catData);
			if($value == "" && empty($catData)){
				$this->redirect(array('controller'=>'Categories','action' => 'addedit'));
			}
			$this->set('keyword', $value);
			$this->set('breadcrumb','Categories');	
			if($pCategoryId){
			    $this->set('breadcrumb','Categories/Sub Categories');		
			}			
			}		
			
        }
		
        /*
            * admin_addedit function
            * Functionality -  Add & edit the Categories
            * Developer - Navdeep kaur
            * Created date - 16-Apr-2014
            * Modified date - 
        */
        function addedit($id = null,$parentId=null)
        {			
	    if($parentId !=""){
		    $parentId = base64_decode($parentId);
	    }else{
		    $parentId = 0;
	    }
	    $categories = $this->Category->find('list',array('conditions'=>array('Category.parent_id'=>NULL,'Category.status'=>1,'Category.is_deleted'=>0),'fields'=>array('id','category'),'order'=>'category ASC'));
	    
	    $this->set('categories',$categories);
		
		
		if($this->request->accepts('application/json')) {
			$this->request->data = json_decode(file_get_contents('php://input'), true);
			if(empty($this->request->data)){		
				
			$message = "Invalid Json";
			$messageId = 201;
			echo json_encode($finalData); exit;
			
			}	    
		}
		
	    if(empty($this->request->data)){
		    $this->request->data = $this->Category->read(null, base64_decode($id));
			
	    }else
	    if(isset($this->request->data) && !empty($this->request->data))
	    {
		    $this->request->data['Category']['id'] = base64_decode($this->request->data['Category']['id']);
		    
		    #sanitize data (remove tags)
		    $this->request->data = $this->sanitizeData($this->request->data);
		    
		    $this->Category->set($this->request->data);	
		    if($this->Category->validates()) 				
		    { 
			    
			    $this->request->data['Category']['category'] = trim($this->request->data['Category']['category']);					
			    
				
				
				/*****************image upload*****************/
				if($this->request->accepts('application/json')) {
				//Generate image from base64 need to be implemented
					$image_name= "";
					$this->request->data['Category']['image'] = $image_name;
				}else{
				    
				    // check the parent category is exists or not
				    if(!empty($this->request->data['Category']['parent_id'])){ 
					
					$parent_id = $this->request->data['Category']['parent_id'];
					$chkCategory = $this->Category->find('count',array('conditions'=>array('Category.id'=>$parent_id,'Category.is_deleted'=>0,'Category.status'=>1)));
					if($chkCategory == 0){
					    $this->Session->setFlash("Something went wrong. Please try again later",'default',array('class'=>'alert alert-danger'));
					    $this->redirect($this->referer());
					}
					
				    }
				    
                    if(!empty($this->request->data['Category']['image']['name'])){
                       
                    
                        if(isset($this->request->data['Category']['image']['name']) && $this->request->data['Category']['image']['name'] != ""){
                        // Variable declaration
                            $file = $this->request->data['Category']['image'];
                            $path = 'Plugin/Categories/webroot/img/cat_pics';					
                            $folder_name = 'original';
                            $multiple[] = array('folder_name'=>'thumb','height'=>'100','width'=>'100'); 
                            
                            // Code to upload the image
                             $response = $this->Common->upload_image($file, $path, $folder_name, true, $multiple);
                          
                            // check if filename return or error return
                            $is_image_error = $this->Common->is_image_error($response);
                            
                            if($response == 'exist_error'){
                                $this->Session->setFlash($is_image_error,'error');
                            }elseif($response == 'size_mb_error'){
                                $this->Session->setFlash($is_image_error,'error');
                            }elseif($response == 'type_error'){
                                $this->Session->setFlash($is_image_error,'error');
                            }else{							
                            
                                $flag = true;
                                $filename = $response;
                                $this->request->data['Category']['image'] = $filename;
                            
                            }
                            //DElete Old Pic
                            $oldImg = '/categories/cat_pics/thumb/'.$this->request->data['Category']['old_pic'];                
                            if(file_exists('/categories/img/'.$oldImg))
                            {				
                                unlink('/categories/img/cat_pics/original/'.$oldImg);
                            }
                            
                        } 
                         
                    }else{
                        $this->request->data['Category']['image'] = $this->request->data['Category']['old_pic'];
                    }
			}
				
				
			    if($this->Category->save($this->request->data))
			    {
					if($this->request->accepts('application/json')) {	
					$finalData['message'] = $message;
					$finalData['messageId'] = $messageId;	
					
					echo json_encode($finalData); exit;
					} 
				    $this->Session->setFlash("Category has been saved sucessfully.",'default',array('class'=>'alert alert-success'));	
				    $this->redirect(array('action' => 'index'));
			    }
		    }else{
				$this->request->data['Category']['image'] ="";
			}
	    }
	    $textAction = ($id == null) ? 'Add' : 'Edit';			
			    
	    $this->set('action',$textAction);
	    if($parentId){
		$textAction = (base64_decode($id) == 0) ? 'Add Sub category' : 'Edit Sub category';	
	    }
	    $this->set('breadcrumb','categories/'.$textAction);
	    $buttonText = ($id == null) ? 'Submit' : 'Update';	
	    $this->set('buttonText',$buttonText);
	    $this->set('parentId',$parentId);
			
        }
		/*
            * admin_delete function
            * Functionality - delete Categories
            * Developer - Navdeep kaur
            * Created date - 16-Apr-2014
            * Modified date - 
        */
	function delete($id = null)
        {				
	    $id = base64_decode($id);
	    if($this->Category->updateAll(array('Category.is_deleted'=>'1'),array('Category.id'=>$id))){
		$this->Session->setFlash("Category has been deleted sucessfully.",'default',array('class'=>'alert alert-success'));	
		$this->redirect('/categories/categories/index');
	    }
	}
	
	public function sanitizeData($data) {
	    if (empty ( $data )) {
		    return $data;
	    }
	    if (is_array ( $data )) {
		    foreach ( $data as $key => $val ) {
			    $data [$key] = $this->sanitizeData ( $val );
		    }
		    return $data;
	    } else {
		    $data = trim ( strip_tags ( $data ) );
		    return $data;
	    }
	}
    }

?>