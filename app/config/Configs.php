<?php
/**
 * Author: Anthony Allen
 */

namespace config;


abstract class Configs {

	public $DB_ARRAY    = array();

	public function __construct() {

		$this->DB_ARRAY = $this->connectionArray();

	}

	/**
	 * @desc Change as needed for database connection.
	 *
	 * @desc Returns our database connection array.
	 * @return array
	 */
	public function connectionArray() {

		$this->DB_ARRAY = array(
			"dbname"   => 'root',
			"user"     => 'test',
			"password" => 'root',
			"host"     => '127.0.0.1',
			"driver"   => 'pdo_mysql'
		);

		return $this->DB_ARRAY;

	}

}