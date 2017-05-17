<?php

class Cliente extends EntidadBase {

    private $cli_documento;
    private $cli_paginaWeb;
    private $cli_direccion;
    private $cli_email;
    private $cli_zonaCliente;
    private $cli_ciudad;
    private $cli_nombre;
    private $cli_pais;
    private $cli_telefono;
    private $cli_password;

    public function __construct($adapter) {
        $table = "cliente";
        parent::__construct($table, $adapter);
    }

    function getCli_documento() {
        return $this->cli_documento;
    }

    function getCli_paginaWeb() {
        return $this->cli_paginaWeb;
    }

    function getCli_direccion() {
        return $this->cli_direccion;
    }

    function getCli_email() {
        return $this->cli_email;
    }

    function getCli_zonaCliente() {
        return $this->cli_zonaCliente;
    }

    function getCli_ciudad() {
        return $this->cli_ciudad;
    }

    function getCli_nombre() {
        return $this->cli_nombre;
    }

    function getCli_pais() {
        return $this->cli_pais;
    }

    function getCli_telefono() {
        return $this->cli_telefono;
    }

    function getCli_password() {
        return $this->cli_password;
    }

    function setCli_documento($cli_documento) {
        $this->cli_documento = $cli_documento;
    }

    function setCli_paginaWeb($cli_paginaWeb) {
        $this->cli_paginaWeb = $cli_paginaWeb;
    }

    function setCli_direccion($cli_direccion) {
        $this->cli_direccion = $cli_direccion;
    }

    function setCli_email($cli_email) {
        $this->cli_email = $cli_email;
    }

    function setCli_zonaCliente($cli_zonaCliente) {
        $this->cli_zonaCliente = $cli_zonaCliente;
    }

    function setCli_ciudad($cli_ciudad) {
        $this->cli_ciudad = $cli_ciudad;
    }

    function setCli_nombre($cli_nombre) {
        $this->cli_nombre = $cli_nombre;
    }

    function setCli_pais($cli_pais) {
        $this->cli_pais = $cli_pais;
    }

    function setCli_telefono($cli_telefono) {
        $this->cli_telefono = $cli_telefono;
    }

    function setCli_password($cli_password) {
        $this->cli_password = $cli_password;
    }

    public function savecliente() {
        $query = "INSERT INTO cliente (cli_documento,cli_paginaWeb,cli_direccion,cli_email,cli_zonaCliente,cli_ciudad,cli_nombre,
    cli_pais,cli_telefono,cli_password)VALUES(
                       '" . $this->cli_documento . "',
                       '" . $this->cli_paginaWeb . "',
                       '" . $this->cli_direccion . "',
                       '" . $this->cli_email . "',
                       '" . $this->cli_zonaCliente . "',
                       '" . $this->cli_ciudad . "',    
                       '" . $this->cli_nombre . "',
                       '" . $this->cli_pais . "',   
                       '" . $this->cli_telefono . "',
                       '" . $this->cli_password . "'); ";
//mostrar la consulta completa en pantalla con     
//echo "QUERY> ".$query;        
        $savecliente = $this->db()->query($query);

// echo "SQL> ".$query;
//$this->db()->error;
        return $savecliente;
    }

    public function buscar() {
        $query = "SELECT cli_documento,cli_paginaWeb,cli_direccion,cli_email,cli_zonaCliente,cli_ciudad,cli_nombre,
    cli_pais,cli_telefono,cli_password FROM cliente  where cli_documento = " . $this->cli_documento . " OR cli_ciudad = '" . $this->ciudad . "' OR cli_nombre = '" . $this->cli_nombre . "'(
'" . $this->cli_documento . "',
 '" . $this->cli_paginaWeb . "',
 '" . $this->cli_direccion . "',
 '" . $this->cli_email . "',
 '" . $this->cli_zonaCliente . "',
 '" . $this->cli_ciudad . "',
 '" . $this->cli_nombre . "',
 '" . $this->cli_pais . "',
 '" . $this->cli_telefono . "',
 '" . $this->cli_password . "');
";
        echo "SQL> " . $query;
    }

    public function update() {
        $query = "UPDATE cliente SET "
                . "cli_paginaWeb = '" . $this->cli_paginaWeb . "', "
                . "cli_direccion = '" . $this->cli_direccion . "', "
                . "cli_email = '" . $this->cli_email . "', "
                . "cli_zonaCliente = " . $this->cli_zonaCliente . ", "
                . "cli_ciudad = '" . $this->cli_ciudad . "', "
                . "cli_nombre = '" . $this->cli_nombre . "', "
                . "cli_password = '" . $this->cli_nombre . "', "
                . "cli_pais = '" . $this->cli_pais . "', "
                . "cli_telefono = '" . $this->cli_telefono . "', "
                . "cli_password = '" . $this->cli_password . "'
where cli_documento = '" . $this->cli_documento . "'";
        //echo "SQL> ".$query;
        $update = $this->db()->query($query);
        //$this->db()->error;
        return $update;
    }

}
