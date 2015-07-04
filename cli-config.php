<?php
/**
 * Author: Anthony Allen
 * @desc Doctrine command line file so we can run Doctrines SchemaTool and generate our
 * required tables.
 */

/** Vendor Directory Constant */
define( 'VENDOR_DIR', 'vendor/' );

/**
 * @desc Require Composers Autoloader
 */
require( VENDOR_DIR . 'autoload.php' );

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

/**
 * @desc If true caching is done in memory with the ArratCache. Proxy objects are recreated on every request.
 * See docs for more information: http://doctrine-orm.readthedocs.org/en/latest/reference/configuration.html
 * @var  $isDevMode
 */
$isDevMode = true;

/**
 * @desc Change entity directory based upon your standards.
 * @var  $config
 */
$config    = Setup::createAnnotationMetadataConfiguration( array('app/models/entity'), $isDevMode );

/**
 * @desc Setup our connections for our local host
 * @var  $conn
 */
$conn = array(
	"dbname" => 'test',
	"user" => 'root',
	"password" => '',
	"host" => '127.0.0.1',
	"driver" => 'pdo_mysql'
);

/**
 * @desc Provides us an access point to Doctrines EntityManager.
 * Must be created in order to use entities with Doctrine 2.
 * @var  $entityManager
 */
$entityManager = EntityManager::create( $conn, $config );

return ConsoleRunner::createHelperSet( $entityManager );