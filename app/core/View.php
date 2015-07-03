<?php
/**
 * Author: Anthony Allen
 */

namespace core;

/**
 * Class View
 * @package core
 */
class View {

	public $use_layout;

	public function getView( $view, $data = NULL, $layout = FALSE ) {

		if( !empty( $data ) ) {
			extract( $data );
		}

		$this->use_layout = $layout;
		$view             = ucfirst( $view );
		$template_file    = "../app/views/{$view}.php";

		if( file_exists( $template_file ) && $this->use_layout == FALSE ) {

			include_once( $template_file );

		} elseif( $this->use_layout == TRUE ) {

			$layout_file_local  = "../app/views/{$view}/{$view}.php";
			$layout_file_global = "../app/views/layouts/{$view}.php";

			if( file_exists( $layout_file_local ) ) {
				include_once( $layout_file_local );
			} else {
				include_once( $layout_file_global );
			}

		} else {

			throw new \Exception( "View: '{$template_file}' is not found. " );
		} // End If

	}

}