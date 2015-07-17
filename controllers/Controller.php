<?php

namespace grassrootsMVC\controllers;

use grassrootsMVC\views\View;

/**
 * Class Controller
 * @package grassrootsMVC\controllers
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



