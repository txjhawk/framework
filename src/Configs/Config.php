<?php

namespace GrassRootsMVC\Config;

/**
 * Main configs and settings for framework.
 *
 * Class Config
 * @package grassrootsMVC\config
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
    public function getParamsArray()
    {
        $this->params = $this->config->setDbParamsArray();

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

    /**
     * This will grab our WEB_ROOT constant defined in our configs.
     *
     * @return mixed
     */
    public function getWebRoot()
    {
        return $this->config->setWebRoot();
    }

    /**
     * This will grab our HOME_URL constant defined in our configs.
     *
     * @return mixed
     */
    public function getHomeURL()
    {
        return $this->config->setHomeUrl();
    }


}
