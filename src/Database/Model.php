<?php

namespace GrassRootsMVC\Database;

use Doctrine\Common\Persistence\Mapping;
use GrassRootsMVC\Database;

/**
 * Class Model
 * @package GrassRootsMVC\Database
 */
abstract class Model
{

    public $em = '';

    public function __construct()
    {

        $doctrine = new Database\Doctrine();

        $this->em = $doctrine->em;
    }

}