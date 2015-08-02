<?php

namespace GrassRootsMVC\tests\view;

use PHPUnit_Framework_TestCase;
use GrassRootsMVC\Views;

/**
 * Class ViewTest
 * @package grassrootsMVC\tests\view
 */
class ViewTest extends PHPUnit_Framework_TestCase
{

	public $view;

	public function testGetView()
	{
		$this->view = new views\View();

		$this->assertEquals($this->view->getView('Test'), FALSE);
	}

}