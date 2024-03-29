<?php

namespace GrassRootsMVC\Database;

use GrassRootsMVC\Configs\Config;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

/**
 * Class Doctrine
 * @package GrassRootsMVC\Database
 */
class Doctrine
{

    public $em;

    public function __construct()
    {
        $config = new Config();

        $connectionOptions = $config->getParamsArray();
        $devMode           = $config->getDevMode();
        $entities          = array("");
        $proxies           = '../models/proxies/';

        $doctrineConfig = Setup::createAnnotationMetadataConfiguration($entities, $devMode, $proxies);

        $this->em = EntityManager::create($connectionOptions, $doctrineConfig);

    }
}