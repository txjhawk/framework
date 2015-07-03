<?php
namespace controllers;

use core\Controller;

/**
 * Class Products
 * @package controllers
 */
class Products extends Controller {

	public function __construct() {

	}

	public function getProducts() {
		echo 'These are our products';
	}
}