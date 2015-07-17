<?php

namespace grassrootsMVC\tests\configs;

use PHPUnit_Framework_TestCase;
use grassrootsMVC\config;

class ConfigTest extends PHPUnit_Framework_TestCase
{

	public $config;

	public function testGetHomeURL()
	{
		$this->config = new config\Config();

		$this->assertNotEmpty($this->config->getHomeURL());
	}

}