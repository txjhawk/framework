<?php

define( 'VENDOR_DIR', 'vendor/' );

/** Require Autoloader */
require( VENDOR_DIR . 'autoload.php' );

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$isDevMode = true;
$config    = Setup::createAnnotationMetadataConfiguration( array('app/models/entity'), $isDevMode );

$conn = array(
	"dbname" => 'test',
	"user" => 'root',
	"password" => '',
	"host" => '127.0.0.1',
	"driver" => 'pdo_mysql'
);

$entityManager = EntityManager::create( $conn, $config );

return ConsoleRunner::createHelperSet( $entityManager );