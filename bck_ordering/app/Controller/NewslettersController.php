<?php
App::uses('AppController', 'Controller');
class NewslettersController extends AppController {

   public $components=array('Session','Cookie','Email','RequestHandler','Encryption','Dateform','Common');
   public $helper=array('Encryption','Dateform');
   public $uses=array('Order');
   
   public function beforeFilter() {
            // echo Router::url( $this->here, true );die;
             parent::beforeFilter();
             $adminfunctions=array('index','newsletterList','activateNewsletter','deleteNewsletter','editNewsletter');
            if(in_array($this->params['action'],$adminfunctions)){
               if(!$this->Common->checkPermissionByaction($this->params['controller'])){
                 $this->Session->setFlash(__("Permission Denied"));
                 $this->redirect(array('controller' => 'Stores', 'action' => 'dashboard'));
               }
            }
            
   }
   
   /*------------------------------------------------
      Function name:index()
      Description:Add the newsletter in table
      created:21/8/2015
     -----------------------------------------------------*/  
   public function index(){
        $this->layout="admin_dashboard";       
      $storeID=$this->Session->read('store_id');
      $this->loadModel('Newsletter');
      $merchantId= $this->Session->read('merchant_id');
      if($this->request->data){
           $newsletterdata['name']=trim($this->data['Newsletter']['name']);
           $newsletterdata['content_key']=trim($this->data['Newsletter']['content_key']);
            $isUniqueName=$this->Newsletter->checkNewsletterUniqueName($newsletterdata['name'],$storeID);
            $isUniqueCode=$this->Newsletter->checkNewsletterUniqueCode($newsletterdata['content_key'],$storeID);
   if($isUniqueName){
      if($isUniqueCode){
            $newsletterdata=array();
            $newsletterdata['name']=trim($this->data['Newsletter']['name']);
            $newsletterdata['content_key']=trim($this->data['Newsletter']['content_key']);
            $newsletterdata['content']=trim($this->data['Newsletter']['content']);
            $newsletterdata['is_active']=trim($this->data['Newsletter']['is_active']);
            $newsletterdata['store_id']=$storeID;
            $newsletterdata['merchant_id']=$merchantId;
            
            $this->Newsletter->create();
            $this->Newsletter->saveNewsletter($newsletterdata);          
            $this->Session->setFlash(__("Newsletter Successfully Created"));
            $this->redirect(array('controller' => 'newsletters', 'action' => 'newsletterList'));
      }
      else{
        
            
            $this->Session->setFlash(__("Newsletter code Already exists"));
        
      }
     
   }
     else{
            
            $this->Session->setFlash(__("Newsletter name Already exists"));
         } 
   }
   }
   
   /*------------------------------------------------
      Function name:newsletterList()
      Description:Display the list of created newsletters
      created:21/8/2015
     -----------------------------------------------------*/  
   public function newsletterList($clearAction=null){
       $this->layout="admin_dashboard";       
       $storeID=$this->Session->read('store_id');
       $merchantId= $this->Session->read('merchant_id');
       $this->loadModel('Newsletter');
       $criteria = "Newsletter.store_id =$storeID AND Newsletter.is_deleted=0 AND Newsletter.merchant_id=$merchantId";
       if($this->Session->read('NewsletterSearchData') && $clearAction!='clear' && !$this->request->is('post')){            
            $this->request->data = json_decode($this->Session->read('NewsletterSearchData'),true);
      }else{
            $this->Session->delete('NewsletterSearchData');
      }
       if(!empty($this->request->data)){
          $this->Session->write('NewsletterSearchData',json_encode($this->request->data));
         if($this->request->data['Newsletter']['is_active']!=''){
              $active = trim($this->request->data['Newsletter']['is_active']);
              $criteria .= " AND (Newsletter.is_active` ='".$active."')";
          }
       }
       $this->paginate= array('conditions'=>array($criteria),'order'=>array('Newsletter.created'=>'DESC'));
       $newsletterDetail=$this->paginate('Newsletter');
       $this->set('list',$newsletterDetail);
     
   }
  
  /*------------------------------------------------
      Function name:activateNewsletter()
      Description:Active/Deactive newsletter
      created:21/8/2015
     -----------------------------------------------------*/  
   public function activateNewsletter($EncryptNewsletterID=null,$status=0){
       $this->layout="admin_dashboard";
       $this->loadModel('Newsletter');
        $data['Newsletter']['store_id']=$this->Session->read('store_id');
        $data['Newsletter']['id']=$this->Encryption->decode($EncryptNewsletterID);
            $data['Newsletter']['is_active']=$status;
            if($this->Newsletter->saveNewsletter($data)){
               if($status){
                  $SuccessMsg="Newsletter Activated";
               }else{
                  $SuccessMsg="Newsletter Inactive and Newsletter will not get Display in Menu List";
               }
               $this->Session->setFlash(__($SuccessMsg));
               $this->redirect(array('controller' => 'newsletters', 'action' => 'NewsletterList'));
            }else{
               $this->Session->setFlash(__("Some problem occured"));
               $this->redirect(array('controller' => 'newsletters', 'action' => 'NewsletterList'));
            }
      
   }
   
   /*------------------------------------------------
      Function name:deleteNewsletter()
      Description:Delete newsletter from list
      created:21/8/2015
     -----------------------------------------------------*/  
   public function deleteNewsletter($EncryptNewsletterID=null){
           $this->autoRender=false;
            $this->layout="admin_dashboard";
            $this->loadModel('Newsletter');
            $data['Newsletter']['store_id']=$this->Session->read('store_id');
            $data['Newsletter']['id']=$this->Encryption->decode($EncryptNewsletterID);
            $data['Newsletter']['is_deleted']=1;
            if($this->Newsletter->saveNewsletter($data)){
               $this->Session->setFlash(__("Newsletter deleted"));
               $this->redirect(array('controller' => 'newsletters', 'action' => 'newsletterList'));
            }else{
               $this->Session->setFlash(__("Some problem occured"));
               $this->redirect(array('controller' => 'newsletters', 'action' => 'newsletterList'));
            }
      
   }
   
    /*------------------------------------------------
      Function name:editNewsletter()
      Description:Edit Newsletter contents
      created:21/8/2015
     -----------------------------------------------------*/  
   public function editNewsletter($EncryptNewsletterID=null){
          $this->layout="admin_dashboard";
             $storeId=$this->Session->read('store_id');
            $merchantId= $this->Session->read('merchant_id');
            $data['Newsletter']['id']=$this->Encryption->decode($EncryptNewsletterID);
             $this->loadModel('Newsletter');
             $newsletterDetail=$this->Newsletter->getNewsletterDetail($data['Newsletter']['id'], $storeId);
              if($this->request->data){
               $newsletterTitle=trim($this->data['Newsletter']['name']);
	      $newsletterCode=trim($this->data['Newsletter']['content_key']);
             $isUniqueName=$this->Newsletter->checkNewsletterUniqueName($newsletterTitle,$storeId,$data['Newsletter']['id']);
	     $isUniqueCode=$this->Newsletter->checkNewsletterUniqueCode($newsletterCode,$storeId,$data['Newsletter']['id']);
             if($isUniqueName){
	       if($isUniqueCode){
            $newsletterdata=array();
            $newsletterdata['name']=trim($this->data['Newsletter']['name']);
            $newsletterdata['content_key']=trim($this->data['Newsletter']['content_key']);
            $newsletterdata['id']=trim($this->data['Newsletter']['id']);
            $newsletterdata['content']=trim($this->data['Newsletter']['content']);
            $newsletterdata['is_active']=trim($this->data['Newsletter']['is_active']);
            $newsletterdata['store_id']=$storeId;
            $newsletterdata['merchant_id']=$merchantId;
            $this->loadModel('Newsletter');
            $this->Newsletter->create();
            $this->Newsletter->saveNewsletter($newsletterdata);          
            $this->Session->setFlash(__("Newsletter Successfully Updated."));
            $this->redirect(array('controller' => 'newsletters', 'action' => 'newsletterList'));
              }
              else{
		   $this->Session->setFlash(__("Newsletter Code Already exists"));
	       }
             }
             else{
		   $this->Session->setFlash(__("Newsletter Name Already exists"));
	       }
              }
           
               $this->request->data=$newsletterDetail;
   }
  
             
}

?>