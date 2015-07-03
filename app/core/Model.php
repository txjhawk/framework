<?php
/**
 * Author: Anthony Allen
 */

namespace core;
use models\entity\Group;
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