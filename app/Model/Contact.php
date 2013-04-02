<?php
App::uses('AppModel', 'Model');
/**
 * Contact Model
 *
 */
class Contact extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'contact';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Invalid email Address',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'This field cannot be left empty',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	public function sendContactEmailToUser($data) {
	    $email = new CakeEmail('default');
	    try {
	      $email->to($data['Contact']['email'])
	        ->viewVars(array('data' => $data))
	        ->template('contact')
	        ->emailFormat('html')
	        ->subject('Thank You submitting your query')
	        ->from(Configure::read('ProWebTechiesEmail.default'))
	        ->replyTo(Configure::read('ProWebTechiesEmail.default'))
	        ->send();
	    } catch (SocketException $e) {
	        $this->log($e, 'email');
	        return false;
    }
  }
  public function sendContactEmailToAdmin($data) {
	    $email = new CakeEmail('default');
	    try {
	      $email->to(Configure::read('ProWebTechiesEmail.default'))
	        ->viewVars(array('data' => $data))
	        ->template('contact_admin')
	        ->emailFormat('html')
	        ->subject('New Query on ProWeb Techies')
	        ->from(Configure::read('ProWebTechiesEmail.default'))
	        ->replyTo($data['Contact']['email'])
	        ->send();
	    } catch (SocketException $e) {
	        $this->log($e, 'email');
	        return false;
    }
  }
}
