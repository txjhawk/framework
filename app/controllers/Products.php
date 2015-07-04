<?php
namespace app\controllers;

use system\core\Controller;

/**
 * Class Products
 * @package controllers
 */
class Products extends Controller
{

	public function __construct()
	{
		parent::__construct();
	}

	public function getProducts()
	{
		echo 'These are our products';
	}
}