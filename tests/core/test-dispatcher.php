<?php
namespace GrassRootsMVC\test\dispatcher;

use PHPUnit_Framework_TestCase;
use GrassRootsMVC\Routing\Dispatcher;
use GrassRootsMVC\Routing\Router;

/**
 * Class DispatcherTest
 * @package grassrootsMVC\test\dispatcher
 */
class DispatcherTest extends PHPUnit_Framework_TestCase
{
	public $dispatch;
	public $router;

	/**
	 * Test for config to return default controller since
	 * this is i our framework and not our app.
	 */
	public function testDispatch()
	{
		$this->dispatch = new Dispatcher();
		$this->router = new Router();

		$this->assertEquals($this->dispatch->dispatch($this->router), FALSE);
	}
}