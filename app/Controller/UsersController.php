<?php 
App::uses('AppController', 'Controller');

class UsersController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('users', $this->User->find('all'));
		
	}
	
	public function view($id=null){
		if($id!=null){
			$this->User->recursive=-1;
			$this->User->Behaviors->load('Containable');
			$this->User->contain(array('Post'));
			
			$user=$this->User->find('first',
					array("conditions"=>array("User.id"=>$id)));
			
			$this->set("user", $user);
			
		}
	}
	
	public function add(){
		if($this->request->is('post')){
			debug($this->request->data);
			
			$this->User->create();
			$this->User->save($this->request->data);
			
			$this->redirect("/users/index");
		}
	}
	
	public function login(){
		if($this->request->is('post')){
			$username=$this->request->data["User"]["username"];
			$password=$this->request->data["User"]["password"];
			
			$user=$this->User->findByUsernameAndPassword($username,$password);
			
			if(!empty($user)){
				$this->Session->write("User", $user["User"]);
				
				$this->redirect("/posts/index");
			}
			else{
				
			}
			
		}
	}
}

?>