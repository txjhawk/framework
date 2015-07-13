<?php
/**
 * Doctrine command line file so we can run Doctrines SchemaTool and generate our
 * required tables.
 */

/** Vendor Directory Constant */
define('VENDOR_DIR', '../../../vendor/');

/**
 * Require Composers Autoloader
 */
require(VENDOR_DIR . 'autoload.php');

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use grassrootsMVC\config\Config;


$config              = new Config();
$config->configArray = $config->setConfigs();

/**
 * This will retrieve our connection parameters so we can connect.
 *
 * @var  $connectionOptions
 */
$connectionOptions = $config->setParams();

/**
 * If true caching is done in memory with the ArrayCache. Proxy objects are recreated on every request.
 * See docs for more information: http://doctrine-orm.readthedocs.org/en/latest/reference/configuration.html
 *
 * @var  $isDevMode
 */
$devMode = $config->getDevMode();

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
$cliConfig = Setup::createAnnotationMetadataConfiguration(array($config->configArray['entities']), $devMode);


/**
 * Provides us an access point to Doctrines EntityManager.
 * Must be created in order to use entities with Doctrine 2.
 *
 * @var  $entityManager
 */
$entityManager = EntityManager::create($connectionOptions, $cliConfig);

return ConsoleRunner::createHelperSet($entityManager);

/**
 * To run our command line within grassrootsMVC, or this file can be added to your custom app and ran from there.
 *  ../../bin/doctrine orm:schema-tool:create
 */

