<?php

namespace grassrootsMVC\core;

use grassrootsMVC\config\Config;
use app\controllers;

/**
 * Class Dispatcher
 *
 * @package core
 */
class Dispatcher
{

    /**
     * Takes our router object as a parameter then finds view, action
     * and params from router. If the view is available it will load it and then
     * initialize it. After it initializes it it just accesses our action.
     *
     * @param $router
     * @return bool
     */
    public static function dispatch($router)
    {

        global $app;

        $config       = new Config();
        $configArray = $config->setConfigs();

        if ($configArray['globalProfile']) {

            $start = microtime(true);
        }

        $controller = $router->getController();
        $action     = $router->getAction();
        $params     = $router->getParams();

        if (!empty($params)) {

            $controller = ucfirst($controller);

            $controllerFile = "controllers/{$controller}.php";

            if (file_exists("../" . $controllerFile)) {

                require_once("../" . $controllerFile);

                $controller = 'app\controllers\\' . $router->getController();

                $app = new $controller();

                $app->useLayout = true;
                $app->$action();

                if (!$app->useLayout) {
                    $useLayout = false;
                }


            } else {
                /** Might do a redirect instead. */
                return false;
            }

        } // End If

    }
}