<?php

namespace grassrootsMVC\controllers;

use grassrootsMVC\views\View;

/**
 * Class Controller
 * @package core
 */
abstract class Controller
{


    public $view;

    public function __construct()
    {
        $this->view = new View();

    }

}



