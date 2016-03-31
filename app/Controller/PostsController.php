<?php 
App::uses('AppController', 'Controller');

class PostsController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
		$this->set('posts', $this->Post->find('all'));
		
	}
	
	public function view($id=null){
		if($id!=null){
			$post=$this->Post->find('first',
					array("conditions"=>array("Post.id"=>$id)));
			
			
			$this->set("post", $post);
		}
	}
}

?>