<?php

class Despacho extends EntidadBase {
    
    private $des_CodigoDespacho;
    private $des_Transportadora;
    private $des_ObservacionesEnvio;
    private $des_Contrato_Oc;
    private $des_NumeroGuia;
    private $des_Cantidad_Cajas;
    private $des_FechaEnvio;
    private $des_Numfactura;
    private $cli_documento;
    private $usu_documento;
    
   public function __construct($adapter) {
        $table = "despacho";
        parent::__construct($table, $adapter);
    }

    function getDes_CodigoDespacho() {
        return $this->des_CodigoDespacho;
    }

    function getDes_Transportadora() {
        return $this->des_Transportadora;
    }

    function getDes_ObservacionesEnvio() {
        return $this->des_ObservacionesEnvio;
    }

    function getDes_Contrato_Oc() {
        return $this->des_Contrato_Oc;
    }

    function getDes_NumeroGuia() {
        return $this->des_NumeroGuia;
    }

    function getDes_Cantidad_Cajas() {
        return $this->des_Cantidad_Cajas;
    }

    function getDes_FechaEnvio() {
        return $this->des_FechaEnvio;
    }

    function getDes_Numfactura() {
        return $this->des_Numfactura;
    }

    function getCli_documento() {
        return $this->cli_documento;
    }

    function getUsu_documento() {
        return $this->usu_documento;
    }

    function setDes_CodigoDespacho($des_CodigoDespacho) {
        $this->des_CodigoDespacho = $des_CodigoDespacho;
    }

    function setDes_Transportadora($des_Transportadora) {
        $this->des_Transportadora = $des_Transportadora;
    }

    function setDes_ObservacionesEnvio($des_ObservacionesEnvio) {
        $this->des_ObservacionesEnvio = $des_ObservacionesEnvio;
    }

    function setDes_Contrato_Oc($des_Contrato_Oc) {
        $this->des_Contrato_Oc = $des_Contrato_Oc;
    }

    function setDes_NumeroGuia($des_NumeroGuia) {
        $this->des_NumeroGuia = $des_NumeroGuia;
    }

    function setDes_Cantidad_Cajas($des_Cantidad_Cajas) {
        $this->des_Cantidad_Cajas = $des_Cantidad_Cajas;
    }

    function setDes_FechaEnvio($des_FechaEnvio) {
        $this->des_FechaEnvio = $des_FechaEnvio;
    }

    function setDes_Numfactura($des_Numfactura) {
        $this->des_Numfactura = $des_Numfactura;
    }

    function setCli_documentoÍndice($cli_documentoÍndice) {
        $this->cli_documentoÍndice = $cli_documentoÍndice;
    }

    function setUsu_documentoÍndice($usu_documentoÍndice) {
        $this->usu_documentoÍndice = $usu_documentoÍndice;
    }   
}
