<?php
/**
 * Author: Anthony Allen
 */
namespace app\controllers;
use app\models\User;
use system\core\Controller;

/**
 * Class Home
 * @package controllers
 */
class Home extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$user = new User();

		$current_user = $user->getUser();

		$data              = array();
		$data[ 'title' ]   = 'GrassRoots MVC';
		$data['firstname'] = $current_user['First Name'];
		$data[ 'message' ] = 'crap';

		$this->view->getView( 'header', $data, TRUE );
		$this->view->getView( 'home', $data );
		$this->view->getView( 'footer', $data, TRUE );

	}

}
