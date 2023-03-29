<?php

namespace Dao\Mnt;

use Dao\Table;

    class Marcas extends Table{
        public static function insert(string $marca_nom, string $marca_descripcion): int {
            $sqlstr = "INSERT INTO marca (marca_nom, marca_descripcion) values (?,?);";
            $rowsInserted = self:: executeNonQuery($sqlstr, array("marca_nom" => $marca_nom, "marca_descripcion" => $marca_descripcion));
            return $rowsInserted;
        } 
        public static function update(){}
        public static function delete(){}
        public static function findAll(){
            $sqlstr = "SELECT * FROM marca;";
            return self:: obtenerRegistros($sqlstr, array());       
        }
        public static function finbyid(){}
        public static function finbyfilter(){}
    }