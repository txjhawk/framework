<?php

/** Define system constants */
define( 'SYSTEM_DIR', '../core/' );
define( 'APP_DIR', '../app/' );
define( 'VENDOR_DIR', '../vendor/' );

/** Require Autoloader */
require( VENDOR_DIR . 'autoload.php' );

use core\Router;
use core\Dispatcher;

$route = new Router();

$dispatcher = new Dispatcher();

$dispatcher->dispatch( $route );