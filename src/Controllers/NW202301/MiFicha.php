<?php

    namespace Controllers\NW202301;

use Controllers\PublicController;
use Views\Renderer;

    class MiFicha extends PublicController{

        public function run() :void{
            $viewData = array(
                "nombre" => "Jorge Jeovany Guevara",
                "email" => "jorge@gmail.com",
                "title" => "Software Engineer",
                "nombre1" => "Juan Lopez",
                "email1" => "juan@gmail.com",
                "title1" => "Software Engineer",
            );
            
            Renderer::render("nw202301/MiFicha", $viewData);
        }
    }

?>