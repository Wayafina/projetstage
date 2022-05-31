<?php

require_once "models/Dbconnect.Class.php";

abstract class AbstractController{

    public function genererPage($data)
        {
            ob_start();
            extract($data);
            require_once $view;
            $content = ob_get_clean();
            require_once "views/template.php";
        }
}

