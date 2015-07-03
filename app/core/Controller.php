<?php
/**
 * Author: Anthony Allen
 */

namespace core;

use core\View;

/**
 * Class Controller
 * @package core
 */
abstract class Controller {


	public $view;

	public function __construct() {
		$this->view = new View();

	}

}



