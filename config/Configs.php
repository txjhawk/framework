<?php

namespace grassrootsMVC\config;

/**
 * Class Configs
 *
 * @package grassrootsMVC\config
 */
class Configs
{

    public $dbArray        = array ();
    public $frameworkArray = array ();

    public function __construct ()
    {

        $this->dbArray = $this->connectionArray();

    }

    /**
     * Call this to check for our app/config so we can override the default settings.
     *
     * @return Config
     */
    public function factory ()
    {
        $config = 'app\config\Configs';

        if (class_exists ($config)) {
            return new $config();
        } else {
            return new Config();
        }

    }

    /**
     * Change as needed for database connection.
     * Returns our database connection array.
     *
     * Overwrite these in app/config that will need to created when using the framework.
     *
     * @return array
     */
    public function connectionArray ()
    {

        $this->dbArray = array (
            "dbname"   => 'test',
            "user"     => 'root',
            "password" => 'root',
            "host"     => '127.0.0.1',
            "driver"   => 'pdo_mysql'
        );

        return $this->dbArray;

    }

    /**
     * Default framework settings these will need to be overwritten
     * within the app/configs when using the framework.
     *
     * @return array
     */
    public function frameworkSettings ()
    {

        $this->frameworkArray = array (
            "debug"             => "on",
            "allowedUrlChars" => "/[^A-z0-9\/\^]/",
            "globalProfile"    => true,
            "useLayout"        => true,
            "devMode"           => true,
            "defaultController" => "Home",
            "defaultAction"     => "index"
        );

        return $this->frameworkArray;
    }

}