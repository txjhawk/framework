<?php
/**
 * Author: Anthony Allen
 */


/** Define grassrootsMVC constants */
define( 'VENDOR_DIR', '../../grassrootsMVC/vendor/' );

/** Require Autoloader */
require_once( VENDOR_DIR . 'autoload.php' );

use grassrootsMVC\core\Router;
use grassrootsMVC\core\Dispatcher;

$route = new Router();

$dispatcher = new Dispatcher();

$dispatcher->dispatch( $route );