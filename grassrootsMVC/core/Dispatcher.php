<?php
/**
 * Author: Anthony Allen
 */
namespace grassrootsMVC\core;

use grassrootsMVC\config\Config;
use app\controllers;

/**
 * Class Dispatcher
 * @package core
 */
class Dispatcher {

	/**
	 * @desc Takes our router object as a parameter then finds controller, action
	 * and params from router. If the controller is available it will load it and then
	 * initialize it. After it initializes it it just accesses our action.
	 * @param $router
	 * @throws \Exception
	 */
	public static function dispatch( $router ) {

		global $app;

		$config       = new Config();
		$config_array = $config->setConfigs();

		if( $config_array[ 'global_profile' ] ) {

			$start = microtime( TRUE );
		}

		$controller = $router->getController();
		$action     = $router->getAction();
		$params     = $router->getParams();

		if( !empty( $params ) ) {

			$controller = ucfirst( $controller );

			$controller_file = "controllers/{$controller}.php";

			if( file_exists( "../" . $controller_file ) ) {

				require_once( "../" . $controller_file );

				$controller = 'app\controllers\\' . $router->getController();

				$app = new $controller();

				$app->use_layout = TRUE;
				$app->$action();

				if( !$app->use_layout ) {
					$use_layout = FALSE;
				}


			} else {
				/** Might do a redirect instead. */
				throw new \Exception( "Controller not found" );
			}

		} // End If

	}
}