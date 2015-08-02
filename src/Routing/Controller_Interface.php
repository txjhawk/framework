<?php
namespace GrassRootsMVC\Routing;

/**
 * Lets give our parent abstract controller some structure and
 * add the most common methods that we wan't in our app controllers.
 *
 * Interface Controller_Interface
 * @package GrassRootsMVC\Routing
 */
interface Controller_Interface
{

    public function __construct();

    public function index();

}