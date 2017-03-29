<?php

class Cotizacion extends EntidadBase {

    private $cot_codigoCotizacion;
    private $con_codigo;
    private $cot_validez;
    private $cot_tiempoEntrega;
    private $cot_lugarEntrega;
    private $cot_formaPago;
    private $cot_fechaCotizacion;

    public function __construct($adapter) {
        $table = "cotizaciones";
        parent::__construct($table, $adapter);
    }

    function getCot_codigoCotizacion() {
        return $this->cot_codigoCotizacion;
    }

    function getCon_codigo() {
        return $this->con_codigo;
    }

    function getCot_validez() {
        return $this->cot_validez;
    }

    function getCot_tiempoEntrega() {
        return $this->cot_tiempoEntrega;
    }

    function getCot_lugarEntrega() {
        return $this->cot_lugarEntrega;
    }

    function getCot_formaPago() {
        return $this->cot_formaPago;
    }

    function getCot_fechaCotizacion() {
        return $this->cot_fechaCotizacion;
    }

    function setCot_codigoCotizacion($cot_codigoCotizacion) {
        $this->cot_codigoCotizacion = $cot_codigoCotizacion;
    }

    function setCon_codigo($con_codigo) {
        $this->con_codigo = $con_codigo;
    }

    function setCot_validez($cot_validez) {
        $this->cot_validez = $cot_validez;
    }

    function setCot_tiempoEntrega($cot_tiempoEntrega) {
        $this->cot_tiempoEntrega = $cot_tiempoEntrega;
    }

    function setCot_lugarEntrega($cot_lugarEntrega) {
        $this->cot_lugarEntrega = $cot_lugarEntrega;
    }

    function setCot_formaPago($cot_formaPago) {
        $this->cot_formaPago = $cot_formaPago;
    }

    function setCot_fechaCotizacion($cot_fechaCotizacion) {
        $this->cot_fechaCotizacion = $cot_fechaCotizacion;
    }

}
