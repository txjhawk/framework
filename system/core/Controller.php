<?php
/**
 * Author: Anthony Allen
 */

namespace system\core;

use system\core;

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



