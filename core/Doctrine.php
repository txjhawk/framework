<?php

namespace grassrootsMVC\core;

use grassrootsMVC\config\Config;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;


/**
 * Class Doctrine
 *
 * @package core
 */
class Doctrine
{

    public $em;

    public function __construct()
    {
        $config = new Config();

        $connectionOptions = $config->setParams();
        $devMode           = $config->getDevMode();
        $entities          = array ("../models/entity/");
        $proxies           = '../models/proxies/';

        $doctrineConfig = Setup::createAnnotationMetadataConfiguration($entities, $devMode, $proxies);

        $this->em = EntityManager::create($connectionOptions, $doctrineConfig);


    }
}