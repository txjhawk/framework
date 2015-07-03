<?php

define( 'VENDOR_DIR', 'vendor/' );

/** Require Autoloader */
require( VENDOR_DIR . 'autoload.php' );
require( 'app/config/Configs.php' );
require( 'app/config/Config.php' );
require( 'app/core/Doctrine.php' );

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use core\Doctrine;
// replace with mechanism to retrieve EntityManager in your app
$doc = new Doctrine();
$entityManager = $doc->em;

return $entityManager;

//return ConsoleRunner::createHelperSet($entityManager);