<?php

namespace grassrootsMVC\core;

use grassrootsMVC\config\Config;

/**
 * Class Router
 * Finds the views, action, and parameters from request URL.
 *
 * @package core
 */
class Router {

	public $route;
	public $action;
	public $controller;
	public $params;
	public $config;
	public $config_array = array();

	public function __construct() {

		$path               = array_keys( $_GET );
		$this->config       = new Config();
		$this->config_array = $this->config->setConfigs();

		if( !isset( $path[ 0 ] ) ) {

			$default_controller = $this->config->defaultController();

			if( !empty( $default_controller ) ) {
				$path[ 0 ] = $default_controller;
			}
		}

		$route              = $path[ 0 ];
		$sanitizing_pattern = $this->config_array[ 'allowed_url_chars' ];
		$route              = preg_replace( $sanitizing_pattern, "", $route );
		$route              = str_replace( "^", "", $route );
		$this->route        = $route;

		$routeParts       = explode( "/", $route );
		$this->controller = $routeParts[ 0 ];
		$this->action     = isset( $routeParts[ 1 ] ) ? $routeParts[ 1 ] : "index";

		$this->params = $routeParts;

		if( isset( $routes ) ) {

			foreach( $routes as $_route ) {

				$_pattern     = "-{$_route[0]}-";
				$_destination = $_route[ 1 ];

				if( preg_match( $_pattern, $route ) ) {

					$newRouteParts    = explode( "/", $_destination );
					$this->controller = $newRouteParts[ 0 ];
					$this->action     = $newRouteParts[ 1 ];

				} // End If

			} // End Foreach

		} // End If


	}

	/**
	 * If our action var is empty load our standard action otherwise lets call it.
	 *
     * @return mixed
	 */
	public function getAction() {
		if( empty( $this->action ) ) {

			$this->action = $this->config->defaultAction();
		}

		return $this->action;

	}

	/**
	 * Get our views so we can load it.
	 *
     * @return mixed
	 */
	public function getController() {
		return $this->controller;
	}

	/**
	 * Return our params array
	 *
     * @return mixed
	 */
	public function getParams() {
		return $this->params;
	}

}