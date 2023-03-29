<?php
    namespace Controllers\Mnt;

use Controllers\PublicController;
use Dao\Dao;
use Views\Renderer;

    class Marca extends PublicController{
        public function run(): void{
            $viewData ["marca"] = \Dao\Mnt\Marcas::findAll();
            Renderer:: render('mnt/marca', $viewData);
        }
    }
?>