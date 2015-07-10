<?php
/**
 * Doctrine command line file so we can run Doctrines SchemaTool and generate our
 * required tables.
 */

/** Vendor Directory Constant */
define('VENDOR_DIR', 'vendor/');
define('ENTITIES', '/../../../app/models/entity');

/**
 * Require Composers Autoloader
 */
require(VENDOR_DIR . 'autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

/**
 * If true caching is done in memory with the ArrayCache. Proxy objects are recreated on every request.
 * See docs for more information: http://doctrine-orm.readthedocs.org/en/latest/reference/configuration.html
 *
 * @var  $isDevMode
 */
$isDevMode = true;

/**
 * Change entity directory based upon your standards.
 *
 * @var  $config
 */
$config = Setup::createAnnotationMetadataConfiguration(array(ENTITIES), $isDevMode);

/**
 * Setup our connections for our local host
 *
 * @var  $conn
 */
$conn = array(
    "dbname"   => 'test',
    "user"     => 'root',
    "password" => '',
    "host"     => '127.0.0.1',
    "driver"   => 'pdo_mysql'
);

/**
 * Provides us an access point to Doctrines EntityManager.
 * Must be created in order to use entities with Doctrine 2.
 *
 * @var  $entityManager
 */
$entityManager = EntityManager::create($conn, $config);

return ConsoleRunner::createHelperSet($entityManager);