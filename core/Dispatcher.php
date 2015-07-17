<?php

namespace grassrootsMVC\core;

use grassrootsMVC\config\Config;

/**
 * Class Dispatcher
 * @package grassrootsMVC\core
 */
class Dispatcher
{

	/**
	 * Takes our router object as a parameter then finds view, action
	 * and params from router. If the view is available it will load it and then
	 * initialize it. After it initializes it it just accesses our action.
	 *
	 * @param $router
	 *
	 * @return bool
	 */
	public static function dispatch($router)
	{

		global $app;

		$controller = $router->getController();
		$action     = $router->getAction();
		$params     = $router->getParams();

		if (!empty($params)) {

			$controller    = ucfirst($controller);
			$controllerSub = strtolower($controller);

			$controllerFile    = "controllers/{$controller}.php";
			$controllerFileSub = "controllers/" . $controllerSub . "/" . $controller . ".php";

			if (file_exists("../" . $controllerFile)) {

				require_once("../" . $controllerFile);

				$controller = 'app\controllers\\' . $router->getController();

				$app = new $controller();
				$app->$action();

			}
			elseif (file_exists("../" . $controllerFileSub)) {

				require_once("../" . $controllerFileSub);

				$controller = 'app\controllers\\' . $controllerSub . '\\' . $router->getController();

				$app = new $controller();
				$app->$action();

			}
			else {

				return false;
			}

		} // End If

	}
}