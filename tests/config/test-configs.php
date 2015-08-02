<?php

namespace GrassRootsMVC\tests\configs;

use PHPUnit_Framework_TestCase;
use GrassRootsMVC\Configs;

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
        $this->config = new Configs\Configs();

        $this->assertEquals($this->config, new Configs\configs());
    }

}