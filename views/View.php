<?php

namespace grassrootsMVC\views;

/**
 * Class View
 *
 * @package core
 */
class View
{

    public $useLayout;

    public function getView($view, $data = null, $layout = false)
    {

        if (!empty($data)) {
            extract($data);
        }

        $this->useLayout = $layout;
        $view            = ucfirst($view);
        $templateFile    = "../views/{$view}.php";

        if (file_exists($templateFile) && $this->useLayout == false) {

            include_once($templateFile);

        } elseif ($this->useLayout == true) {

            $layoutFileLocal  = "../views/{$view}/{$view}.php";
            $layoutFileGlobal = "../views/layouts/{$view}.php";

            if (file_exists($layoutFileLocal)) {
                include_once($layoutFileLocal);
            } else {
                include_once($layoutFileGlobal);
            }

        } else {

            return false;
        } // End If

    }

}