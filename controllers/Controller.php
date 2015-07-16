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
        $this->view = new View();

    }

}



