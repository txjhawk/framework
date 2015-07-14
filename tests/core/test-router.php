<?php
namespace grassrootsMVC\test\router;

use PHPUnit_Framework_TestCase;
use grassrootsMVC\config\Config;
use grassrootsMVC\core\Router;

class RouterTest extends PHPUnit_Framework_TestCase
{
	public $router;
	public $config;


	public function __construct()
	{
		parent::__construct();

		$this->router = new Router();
		$this->config = new Config();
	}

	/**
	 * Test router for returning default action.
	 */
	public function testGetAction()
	{
		$this->assertEquals($this->router->getAction(), $this->config->defaultAction());
	}

	/**
	 * Test router for returning default controller.
	 */
	public function testGetController()
	{
		$this->assertEquals($this->router->getController(), $this->config->defaultController());
	}
}