<?php

class clientepotencial extends EntidadBase {

    private $cp_nit;
    private $cp_nombre;
    private $cp_ciudad;
    private $cp_direccion;
    private $cp_telefono;
    private $cp_observaciones;

    public function __construct($adapter)
{
        $table = "clientepotencial";
    parent::__construct($table, $adapter);
}

    function getCp_nit() {
        return $this->cp_nit;
    }

    function getCp_nombre() {
        return $this->cp_nombre;
    }

    function getCp_ciudad() {
        return $this->cp_ciudad;
    }

    function getCp_direccion() {
        return $this->cp_direccion;
    }
    function getCp_telefono() {
        return $this->cp_telefono;
    }

    function getCp_observaciones() {
        return $this->cp_observaciones;
    }

    function setCp_nit($cp_nit) {
        $this->cp_nit = $cp_nit;
    }

    function setCp_nombre($cp_nombre) {
        $this->cp_nombre = $cp_nombre;
    }

    function setCp_ciudad($cp_ciudad) {
        $this->cp_ciudad = $cp_ciudad;
    }

    function setCp_direccion($cp_direccion) {
        $this->cp_direccion = $cp_direccion;
    }

    function setCp_telefono($cp_telefono) {
        $this->cp_telefono = $cp_telefono;
    }   
    
    function setCp_observaciones($cp_observaciones) {
        $this->cp_observaciones = $cp_observaciones;
    }

    public function save() {
        $query = "INSERT INTO clientepotencial (cp_nit,cp_nombre,cp_ciudad,cp_direccion,cp_observaciones,cp_telefono)
                VALUES(
                       '" . $this->cp_nit . "',
                       '" . $this->cp_nombre . "',
                       '" . $this->cp_ciudad . "',
                       '" . $this->cp_telefono . "',
                       '" . $this->cp_observaciones . "',
                       '" . $this->cp_direccion . "'); ";
        
        $save = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
        
    }

    public function update() {
        $query = "UPDATE clientepotencial SET cp_nit=".$_POST['cp_nit'].",cp_nombre='".$_POST['cp_nombre']."',
        cp_ciudad='".$_POST['cp_ciudad']."',cp_direccion='".$_POST['cp_direccion']."',cp_observaciones='".$_POST['cp_observaciones']."'               
         where cp_nit = '".$_POST['cp_nit']."'";
        
        $update = $this->db()->query($query);

        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }
     public function buscar(){
        $query = "SELECT * where cp_nit = ".$this->cp_nit." (
                       '" . $this->cp_nombre . "',
                       '" . $this->cp_ciudad . "',
                       '" . $this->cp_telefono . "',
                       '" . $this->cp_observaciones . "',
                       '" . $this->cp_direccion . "'); ";
    }
}