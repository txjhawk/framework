<?php
/**
 * Author: Anthony Allen
 */

namespace grassrootsMVC\core;

use grassrootsMVC\config\Config;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


/**
 * Class Doctrine
 * @package core
 */
class Doctrine {

	public $em = '';

	public function __construct() {
		$config = new Config();

		$connection_options = $config->setParams();
		$dev_mode           = $config->getDevMode();
		$entities           = array( "../models/entity/" );
		$proxies            = '../models/proxies/';

		$doctrine_config = Setup::createAnnotationMetadataConfiguration( $entities, $dev_mode, $proxies );

		$this->em = EntityManager::create( $connection_options, $doctrine_config );


	}
}