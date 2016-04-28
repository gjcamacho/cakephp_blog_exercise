<?php

App::uses('AppModel', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class User extends Model {
	public $hasMany = array(
			'Post' => array(
					'className' => 'Post',
					'conditions' => array(),
					'order' => ''
			)
	);
	
	public function getUserPosts($user_id){
		
		$options['joins'] = array(
				array('table' => 'posts',
						'alias' => 'Post',
						'type' => 'LEFT',
						'conditions' => array(
								'User.id = Post.user_id',
						)
				)
		);
		
		$options["conditions"]=array("Post.user_id"=>$user_id);
		$options["fields"]=array("User.*, Post.*");
		
		$this->recursive=-1;
		$posts=$this->find('all', $options);
		
		return $posts;
	}
}
