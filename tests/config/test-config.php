<?php

namespace GrassRootsMVC\tests\configs;

use PHPUnit_Framework_TestCase;
use GrassRootsMVC\Configs;

class ConfigTest extends PHPUnit_Framework_TestCase
{

	public $config;

	public function testGetHomeURL()
	{
		$this->config = new Configs\Config();

		$this->assertNotEmpty($this->config->getHomeURL());
	}

}