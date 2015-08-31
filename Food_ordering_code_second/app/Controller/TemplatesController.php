<?php
App::uses('AppController', 'Controller');
class TemplatesController extends AppController {

   public $components=array('Session','Cookie','Email','RequestHandler','Encryption','Dateform','Common');
   public $helper=array('Encryption','Dateform');
   public $uses=array('Order');
   
   public function beforeFilter() {
            // echo Router::url( $this->here, true );die;
             parent::beforeFilter();
             $adminfunctions=array('index','activateNewsletter','deleteNewsletter','editNewsletter');
            if(in_array($this->params['action'],$adminfunctions)){
               if(!$this->Common->checkPermissionByaction($this->params['controller'])){
                 $this->Session->setFlash(__("Permission Denied"));
                 $this->redirect(array('controller' => 'Stores', 'action' => 'dashboard'));
               }
            }
            
   }
   
   
   
   /*------------------------------------------------
      Function name:index()
      Description:Display the list of created templates
      created:24/8/2015
     -----------------------------------------------------*/  
   public function index($clearAction=null){
       $this->layout="admin_dashboard";       
       $storeID=$this->Session->read('store_id');
       $merchantId= $this->Session->read('merchant_id');
       $this->loadModel('EmailTemplate');
       $criteria = "EmailTemplate.store_id =$storeID AND EmailTemplate.is_deleted=0 AND EmailTemplate.merchant_id=$merchantId";
       if($this->Session->read('TemplateSearchData') && $clearAction!='clear' && !$this->request->is('post')){            
            $this->request->data = json_decode($this->Session->read('TemplateSearchData'),true);
      }else{
            $this->Session->delete('TemplateSearchData');
      }
       if(!empty($this->request->data)){
          $this->Session->write('TemplateSearchData',json_encode($this->request->data));
         if($this->request->data['EmailTemplate']['is_active']!=''){
              $active = trim($this->request->data['EmailTemplate']['is_active']);
              $criteria .= " AND (EmailTemplate.is_active` ='".$active."')";
          }
       }
       $this->paginate= array('conditions'=>array($criteria),'order'=>array('EmailTemplate.created'=>'DESC'));
       $templateDetail=$this->paginate('EmailTemplate');
      // pr($templateDetail);die;
       $this->set('list',$templateDetail);
     
   }
  
  /*------------------------------------------------
      Function name:activateTemplates()
      Description:Active/Deactive template
      created:24/8/2015
     -----------------------------------------------------*/  
   public function activateTemplate($EncryptTemplateID=null,$status=0){
       $this->layout="admin_dashboard";
       $this->loadModel('EmailTemplate');
        $data['EmailTemplate']['store_id']=$this->Session->read('store_id');
        $data['EmailTemplate']['id'] =$this->Encryption->decode($EncryptTemplateID);
            $data['EmailTemplate']['is_active']=$status;
            if($this->EmailTemplate->saveTemplate($data)){
               if($status){
                  $SuccessMsg="Template Activated";
               }else{
                  $SuccessMsg="Template Inactive and Template will not get Display in Menu List";
               }
               $this->Session->setFlash(__($SuccessMsg));
               $this->redirect(array('controller' => 'templates', 'action' => 'index'));
            }else{
               $this->Session->setFlash(__("Some problem occured"));
               $this->redirect(array('controller' => 'templates', 'action' => 'index'));
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
            if($newsletterdata['is_active'] == 1){
            $this->Newsletter->updateAll(array('is_active' => 0),array('id !='=>$newsletterdata['id']));
            }
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