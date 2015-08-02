<?php

namespace GrassRootsMVC\tests\configs;

use PHPUnit_Framework_TestCase;
use GrassRootsMVC\Config;

class ConfigTest extends PHPUnit_Framework_TestCase
{

	public $config;

	public function testGetHomeURL()
	{
		$this->config = new Config\Config();

		$this->assertNotEmpty($this->config->getHomeURL());
	}

}