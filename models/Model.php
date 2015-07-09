<?php

namespace grassrootsMVC\models;

use Doctrine\Common\Persistence\Mapping;
use grassrootsMVC\core;

/**
 * Class Model
 * @package core\Model
 */
abstract class Model
{

    public $em = '';

    public function __construct()
    {

        $doctrine = new core\Doctrine();

        $this->em = $doctrine->em;
    }

}