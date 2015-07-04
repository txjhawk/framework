<?php
/**
 * Author: Anthony Allen
 */

namespace system\core;
use app\models\entity;
use Doctrine\Common\Persistence\Mapping;
/**
 * Class Model
 * @package core\Model
 */
abstract class Model
{

	public $em = '';

	public function __construct(){

		$doctrine = new Doctrine();

		$this->em = $doctrine->em;
	}

}