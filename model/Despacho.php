<?php

class Despacho extends EntidadBase {

    private $des_CodigoDespacho;
    private $des_Transportadora;
    private $des_ObservacionesEnvio;
    private $des_Contrato_Oc;
    private $des_NumeroGuia;
    private $des_CantidadCajas;
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

    function getDes_CantidadCajas() {
        return $this->des_CantidadCajas;
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

    function setDes_CantidadCajas($des_CantidadCajas) {
        $this->des_CantidadCajas = $des_CantidadCajas;
    }

    function setDes_FechaEnvio($des_FechaEnvio) {
        $this->des_FechaEnvio = $des_FechaEnvio;
    }

    function setDes_Numfactura($des_Numfactura) {
        $this->des_Numfactura = $des_Numfactura;
    }

    function setCli_documento($cli_documento) {
        $this->cli_documento = $cli_documento;
    }

    function setUsu_documento($usu_documento) {
        $this->usu_documento = $usu_documento;
    }

    public function savedespacho() {
        $query = "INSERT INTO despacho (des_CodigoDespacho,des_Transportadora,des_ObservacionesEnvio,des_Contrato_Oc,
                         des_NumeroGuia,des_CantidadCajas,des_FechaEnvio,des_Numfactura,cli_documento,usu_documento)VALUES(
                       '" . $this->des_CodigoDespacho . "',
                       '" . $this->des_Transportadora . "',
                       '" . $this->des_ObservacionesEnvio . "',
                       '" . $this->des_Contrato_Oc . "',
                       '" . $this->des_NumeroGuia . "',
                       '" . $this->des_CantidadCajas . "',   
                       '" . $this->des_FechaEnvio . "', 
                       '" . $this->des_Numfactura . "', 
                       '" . $this->cli_documento . "', 
                       '" . $this->usu_documento . "'); ";

        //mostrar la consulta completa en pantalla con     
        //echo "QUERY> " . $query;
        //echo "SQL> " . $query;
        //$this->db()->error;
        $savedespacho = $this->db()->query($query);
        return $savedespacho;
    }

    public function updatedespacho() {

        $query = "UPDATE despacho SET "
                . "des_Transportadora='" . $this->des_Transportadora . "',"
                . "des_ObservacionesEnvio='" . $this->des_ObservacionesEnvio . "',"
                . "des_Contrato_Oc='" . $this->des_Contrato_Oc . "',"
                . "des_NumeroGuia='" . $this->des_NumeroGuia . "',"
                . "des_CantidadCajas='" . $this->des_CantidadCajas . "',"
                . "des_FechaEnvio='" . $this->des_FechaEnvio . "',"
                . "des_Numfactura='" . $this->des_Numfactura . "',"
                . "cli_documento='" . $this->cli_documento . "',"
                . "usu_documento='" . $this->usu_documento . "',
                where des_CodigoDespacho = '" . $this->des_CodigoDespacho . "'";
        //echo "SQL> ".$query;
        $updatedespaco = $this->db()->query($query);
    }

    public function buscar() {
        $query = "SELECT * from despacho where des_CodigoDespacho = " . $this->des_CodigoDespacho . " (
                       '" . $this->des_Transportadora . "',
                       '" . $this->des_ObservacionesEnvio . "',
                       '" . $this->des_Contrato_Oc . "',
                       '" . $this->des_NumeroGuia . "',
                       '" . $this->des_CantidadCajas . "',
                       '" . $this->des_FechaEnvio . "',
                       '" . $this->des_Numfactura . "',
                       '" . $this->cli_documento . "',
                       '" . $this->usu_documento . "'); ";
    }

}
