<?php
namespace grassrootsMVC\controllers;

/**
 * Lets give our parent abstract controller some structure and
 * add the most common methods that we won't in our app controllers.
 *
 * Interface Controller_Interface
 * @package grassrootsMVC\controllers
 */
interface Controller_Interface
{

    public function __construct();

    public function index();

}