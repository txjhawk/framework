<?php
/**
 * Author: Anthony Allen
 */


/** Define system constants */
define( 'SYSTEM_DIR', '../core/' );
define( 'APP_DIR', '../app/' );
define( 'VENDOR_DIR', '../vendor/' );

/** Require Autoloader */
require_once( VENDOR_DIR . 'autoload.php' );

use system\core\Router;
use system\core\Dispatcher;

$route = new Router();

$dispatcher = new Dispatcher();

$dispatcher->dispatch( $route );