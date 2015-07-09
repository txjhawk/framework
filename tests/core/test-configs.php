<?php

namespace grassrootsMVC\tests\configs;

use PHPUnit_Framework_TestCase;
use grassrootsMVC\config;


class ConfigsTest extends PHPUnit_Framework_TestCase
{

    public $config;

    /**
     * Test for config to return default controller since
     * this is i our framework and not our app.
     */
    public function testFactory ()
    {
        $this->config = new config\Configs();

        $this->assertEquals ($this->config, new config\configs());
    }

}