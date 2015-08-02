<?php

namespace GrassRootsMVC\Database;

use Doctrine\Common\Persistence\Mapping;
use GrassRootsMVC\Routing;

/**
 * Class Model
 * @package grassrootsMVC\models
 */
abstract class Model
{

    public $em = '';

    public function __construct()
    {

        $doctrine = new Routing\Doctrine();

        $this->em = $doctrine->em;
    }

}