<?php
/**
 * Author: Anthony Allen
 * @desc Main configs and settings for framework.
 */

namespace config;

use config\Configs;


/**
 * Class Config
 * @package config
 */
class Config extends Configs{

	private $CONFIG             = "";
	private $PARAMS             = "";
	private $DEFAULT_CONTROLLER = "";
	private $DEFAULT_ACTION     = "";


	private $CONFIG_SETTINGS = array();
	private $DEV_MODE        = TRUE;

	public function __construct() {
		parent::__construct();

	}

	/**
	 * @desc Or connections params that are needed for doctrine.
	 * @return array|string
	 */
	public function setParams() {
		$this->PARAMS = $this->DB_ARRAY;

		return $this->PARAMS;
	}

	/**
	 * @desc Set your default controller name that will load automatically.
	 * @return string
	 */
	public function defaultController() {
		$this->DEFAULT_CONTROLLER = "Home";

		return $this->DEFAULT_CONTROLLER;
	}

	/**
	 * @desc Set your default action name that will be loaded automatically.
	 * @return string
	 */
	public function defaultAction() {
		$this->DEFAULT_ACTION = "index";

		return $this->DEFAULT_ACTION;
	}

	/**
	 * @desc This is some of our settings that will need to be changed per environment.
	 * @return array
	 */
	public function setConfigs() {
		$this->CONFIG_SETTINGS = array(
			"debug"             => "on",
			"allowed_url_chars" => "/[^A-z0-9\/\^]/",
			"global_profile"    => TRUE,
			"use_layout"        => TRUE
		);

		return $this->CONFIG_SETTINGS;
	}

	/**
	 * @desc This is passed as an argument to doctrine so we can set it to true or false to tell
	 * Doctrine that we are in dev mode not production and not to cache or sql.
	 * @return bool
	 */
	public function getDevMode() {
		return $this->DEV_MODE;
	}


}
