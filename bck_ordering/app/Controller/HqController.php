<?php

App::uses('AppController', 'Controller');


class HqController extends AppController {
    public $components=array('Session','Cookie','Email','RequestHandler','Encryption','Paginator','Common','Dateform');
    public $helper = array('Encryption','Paginator','Form','DateformHelper','Common');
    public $uses=array('User','StoreGallery','Store','StoreAvailability','StoreHoliday','Category','Tab','Permission');
    public function beforeFilter() {            
        parent::beforeFilter();
        echo "Hello";
    }
    
    public function index(){
        $this->autoRender=false;
        $this->redirect(array('controller'=>'hq','action'=>'login'));    
    }
    
    public function login(){        
        $this->layout="store_login";
        $this->set('title', 'Sign in');
        if ($this->request->is('post')) { 
            $this->User->set($this->request->data);
            if ($this->User->validates()) { 
                if($this->data['User']['remember']==1) {
                    // Cookie is valid for 7 days
                    $this->Cookie->write('Auth.email',$this->data['User']['email'], false, 604800);
                    $this->Cookie->write('Auth.password', $this->data['User']['password'], false, 604800);
                    $this->set('cookies','1');
                    unset($this->request->data['User']['remember_me']);
                }else{                          
                    $this->Cookie->delete('Auth');
                    $this->Cookie->delete('Auth');
                }
                
                if($this->Auth->login()){                              
                  $roleId=AuthComponent::User('role_id'); // ROLE OF THE USER [2=>Merchant]
                  $this->Session->write('login_date_time',date('Y-m-d H:i:s'));
                  //$this->Session->setFlash("<div class='alert_success'>".LOGINSUCCESSFULL."</div>");
                  if($roleId==2){  // Store admin will redirect to his related dashboard
                     $this->redirect(array('controller'=>'hq','action'=>'dashboard'));
                  }else{
                     $this->redirect(array('controller'=>'hq','action'=>'logout'));
                  }
                }else{                          
                  $this->Session->setFlash(__("Invalid email or password, try again"));
                }
            } 
        }else{            
            $UserId=AuthComponent::User('id');
            if($UserId){
               $this->redirect(array('controller' => 'hq', 'action' => 'logout')); 
            }                 
            $this->set('rem',$this->Cookie->read('Auth.email'));
            if($this->Cookie->read('Auth.email')) {
                  $this->request->data['User']['email']=$this->Cookie->read('Auth.email');
                  $this->request->data['User']['password']=$this->Cookie->read('Auth.password');
            }
        }
    }
    
    
    /*------------------------------------------------
      7Function name:dashboard()
      Description:Dash Board of Store Admin
      created:27/7/2015
     -----------------------------------------------------*/
    public function dashboard(){             
        $this->layout="admin_dashboard";
        $roleId=AuthComponent::User('role_id'); // ROLE OF THE USER [2=>Merchant]
        if($roleId!=2){  // Store admin will redirect to his related dashboard
           $this->redirect(array('controller'=>'hq','action'=>'logout'));
        }
    }
        
    /*------------------------------------------------
    Function name:logout()
    Description:For logout of the user
    created:27/7/2015
    -----------------------------------------------------*/          
    public function logout() {       
        return $this->redirect($this->Auth->logout());
    }
}

?>