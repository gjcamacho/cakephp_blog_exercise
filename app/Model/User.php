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
}