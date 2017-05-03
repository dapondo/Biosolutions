<?php

class Categoria extends EntidadBase {

    private $cat_idCategoria;
    private $cat_nombre;
    private $cat_descripcion;

    public function __construct($adapter) {
        $table = "categoria";
        parent::__construct($table, $adapter);
    }

    function setCat_idCategoria($cat_idCategoria) {
        $this->cat_idCategoria = $cat_idCategoria;
    }

    function setCat_nombre($cat_nombre) {
        $this->cat_nombre = $cat_nombre;
    }

    function setCat_descripcion($cat_descripcion) {
        $this->cat_descripcion = $cat_descripcion;
    }

    function getCat_idCategoria() {
        return $this->cat_idCategoria;
    }

    function getCat_nombre() {
        return $this->cat_nombre;
    }

    function getCat_descripcion() {
        return $this->cat_descripcion;
    }

    public function save() {
        $query = "INSERT INTO categoria (cat_idCategoria,cat_nombre,cat_descripcion)
                  VALUES(
                       '" . $this->cat_idCategoria . "',
                       '" . $this->cat_nombre . "',
                       '" . $this->cat_descripcion . "'); ";
        $save = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

}
