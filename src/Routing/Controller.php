<?php

namespace GrassRootsMVC\Routing;

use GrassRootsMVC\Views\View;

/**
 * Parent Controller that can be extended and have the view object ready for use.
 *
 * @package GrassRootsMVC\Routing
 */
abstract class Controller
{

    /**
     * Our view object we instantiate this in our parent class so we can use it in
     * all of our child classes without having to instantiate it every time.
     *
     * @var View
     */
    public $view;

    public function __construct()
    {

        /**
         * Here we instantiate our view so it is available in all of our
         * controllers that will extend this class.
         *
         * @var  view
         */
        $this->view = new View();

    }

    /**
     * We make our index method abstract so it will be used in all of our child
     * classes so there is a default method every time.
     *
     * @return mixed
     */
    abstract function index();

}



