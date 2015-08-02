<?php

namespace GrassRootsMVC\tests\configs;

use PHPUnit_Framework_TestCase;
use GrassRootsMVC\Config;

/**
 * Class ConfigsTest
 * @package grassrootsMVC\tests\configs
 */
class ConfigsTest extends PHPUnit_Framework_TestCase
{

    public $config;

    /**
     * Test for config to return default controller since
     * this is i our framework and not our app.
     */
    public function testFactory()
    {
        $this->config = new config\Configs();

        $this->assertEquals($this->config, new config\configs());
    }

}