<?php
namespace models;

use core\Model;

class User extends Model {

	public function __construct() {
		parent::__construct();
	}

	public function getUser() {
		$user = array(
			'First Name' => 'Anthony',
			'Last Name'  => 'Allen',
			'Age'        => '31'
		);

		return $user;
	}

	public function setUserName( $username ) {
		$this->username = $username;
	}

}