<?php

class Producto extends EntidadBase {

    private $prd_codigoProducto;
    private $prd_tipoDivisa;
    private $prd_costo;
    private $prd_tipoPresentacion;
    private $prd_nombre;
    private $prd_descripcion;
    private $prd_foto;
    private $prd_loteSerial;
    private $prd_fechaVencimiento;
    private $prd_cantidadPresentacion;
    private $prd_iva;
    private $cat_idCategoria;
    private $pro_nit;

    public function __construct($adapter) {
        $table = "producto";
        parent::__construct($table, $adapter);
    }

    function getPrd_codigoProducto() {
        return $this->prd_codigoProducto;
    }

    function getPrd_tipoDivisa() {
        return $this->prd_tipoDivisa;
    }

    function getPrd_costo() {
        return $this->prd_costo;
    }

    function getPrd_tipoPresentacion() {
        return $this->prd_tipoPresentacion;
    }

    function getPrd_nombre() {
        return $this->prd_nombre;
    }

    function getPrd_descripcion() {
        return $this->prd_descripcion;
    }

    function getPrd_foto() {
        return $this->prd_foto;
    }

    function getPrd_loteSerial() {
        return $this->prd_loteSerial;
    }

    function getPrd_fechaVencimiento() {
        return $this->prd_fechaVencimiento;
    }

    function getPrd_cantidadPresentacion() {
        return $this->prd_cantidadPresentacion;
    }

    function getPrd_iva() {
        return $this->prd_iva;
    }

    function getCat_idCategoria() {
        return $this->cat_idCategoria;
    }

    function getPro_nit() {
        return $this->pro_nit;
    }

    function setPrd_codigoProducto($prd_codigoProducto) {
        $this->prd_codigoProducto = $prd_codigoProducto;
    }

    function setPrd_tipoDivisa($prd_tipoDivisa) {
        $this->prd_tipoDivisa = $prd_tipoDivisa;
    }

    function setPrd_costo($prd_costo) {
        $this->prd_costo = $prd_costo;
    }

    function setPrd_tipoPresentacion($prd_tipoPresentacion) {
        $this->prd_tipoPresentacion = $prd_tipoPresentacion;
    }

    function setPrd_nombre($prd_nombre) {
        $this->prd_nombre = $prd_nombre;
    }

    function setPrd_descripcion($prd_descripcion) {
        $this->prd_descripcion = $prd_descripcion;
    }

    function setPrd_foto($prd_foto) {
        $this->prd_foto = $prd_foto;
    }

    function setPrd_loteSerial($prd_loteSerial) {
        $this->prd_loteSerial = $prd_loteSerial;
    }

    function setPrd_fechaVencimiento($prd_fechaVencimiento) {
        $this->prd_fechaVencimiento = $prd_fechaVencimiento;
    }

    function setPrd_cantidadPresentacion($prd_cantidadPresentacion) {
        $this->prd_cantidadPresentacion = $prd_cantidadPresentacion;
    }

    function setPrd_iva($prd_iva) {
        $this->prd_iva = $prd_iva;
    }

    function setCat_idCategoriaÍndice($cat_idCategoriaÍndice) {
        $this->cat_idCategoria = $cat_idCategoriaÍndice;
    }

    function setPro_nitÍndice($pro_nitÍndice) {
        $this->pro_nit = $pro_nitÍndice;
    }

    public function save() {
        $query = "INSERT INTO producto (prd_codigoProducto,prd_tipoDivisa,prd_costo,prd_tipoPresentacion,prd_nombre,prd_descripcion,prd_foto,
                  prd_loteSerial,prd_fechaVencimiento,prd_cantidadPresentacion,pro_nit, cat_idCategoria,prd_iva)
                VALUES(
                       '" . $this->prd_codigoProducto . "',
                       '" . $this->prd_tipoDivisa . "',
                       '" . $this->prd_costo . "',
                       '" . $this->prd_tipoPresentacion . "',
                       '" . $this->prd_nombre . "',
                       '" . $this->prd_descripcion . "',
                       '" . $this->prd_foto . "',
                       '" . $this->prd_loteSerial . "',
                       '" . $this->prd_fechaVencimiento . "',
                       '" . $this->prd_cantidadPresentacion . "',
                       '" . $this->pro_nit . "',
                       '" . $this->cat_idCategoria . "',
                       '" . $this->prd_iva . "'); ";


        $save = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

}
