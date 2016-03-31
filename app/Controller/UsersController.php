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
}

?>