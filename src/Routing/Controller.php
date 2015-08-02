<?php

namespace GrassRootsMVC\Routing;

use GrassRootsMVC\Views\View;

/**
 * Class Controller
 * @package GrassRootsMVC\Routing
 */
abstract class Controller implements Controller_Interface
{

    public $view;

    public function __construct()
    {
        /**
         * Here we make our view available in all of our controllers that will extend this class.
         */
        $this->view = new View();

    }

}



