<?php

namespace grassrootsMVC\config;

/**
 * Class Config
 * Main configs and settings for framework.
 *
 * @package config
 */
class Config extends Configs
{

    private $params;
    private $defaultController;
    private $defaultAction;
    private $config;
    private $settings;
    private $configSettings = array();

    public function __construct()
    {
        parent::__construct();

        $this->config   = Configs::factory();
        $this->settings = $this->config->frameworkSettings();

    }

    /**
     * Our connections params that are needed for doctrine.
     *
     * @return array|string $this->params
     */
    public function setParams()
    {
        $this->params = $this->config->connectionArray();

        return $this->params;
    }

    /**
     * Set your default views name that will load automatically.
     *
     * @return string $this->defaultController
     */
    public function defaultController()
    {
        $this->defaultController = $this->settings['defaultController'];

        return $this->defaultController;
    }

    /**
     * Set your default action name that will be loaded automatically.
     *
     * @return string $this->defaultAction
     */
    public function defaultAction()
    {
        $this->defaultAction = $this->settings['defaultAction'];

        return $this->defaultAction;
    }

    /**
     * This is some of our settings that will need to be changed per environment.
     *
     * @return array $this->configSettings
     */
    public function setConfigs()
    {
        $this->configSettings = $this->config->frameworkArray;

        return $this->configSettings;
    }

    /**
     * This is passed as an argument to doctrine so we can set it to true or false to tell
     * Doctrine that we are in dev mode not production and not to cache or sql.
     *
     * @return bool $this->config->frameworkArray['devMode']
     */
    public function getDevMode()
    {
        return $this->config->frameworkArray['devMode'];
    }


}
