<?php

class Contacto extends EntidadBase {

    private $con_codigo;
    private $con_estadoCivil;
    private $con_cargo;
    private $con_telefono;
    private $con_profesion;
    private $con_email;
    private $con_nombreCompleto;
    private $con_fechaNacimiento;
    private $cp_nit;
    private $pro_nit;
    private $cli_documento;

    public function __construct($adapter) {
        $table = "contacto";
        parent::__construct($table, $adapter);
    }

    function getCon_codigo() {
        return $this->con_codigo;
    }

    function getCon_estadoCivil() {
        return $this->con_estadoCivil;
    }

    function getCon_cargo() {
        return $this->con_cargo;
    }

    function getCon_telefono() {
        return $this->con_telefono;
    }

    function getCon_profesion() {
        return $this->con_profesion;
    }

    function getCon_email() {
        return $this->con_email;
    }

    function getCon_nombreCompleto() {
        return $this->con_nombreCompleto;
    }

    function getCon_fechaNacimiento() {
        return $this->con_fechaNacimiento;
    }

    function getCp_nit() {
        return $this->cp_nit;
    }

    function getPro_nit() {
        return $this->pro_nit;
    }

    function getCli_documento() {
        return $this->cli_documento;
    }

    function setCon_codigo($con_codigo) {
        $this->con_codigo = $con_codigo;
    }

    function setCon_estadoCivil($con_estadoCivil) {
        $this->con_estadoCivil = $con_estadoCivil;
    }

    function setCon_cargo($con_cargo) {
        $this->con_cargo = $con_cargo;
    }

    function setCon_telefono($con_telefono) {
        $this->con_telefono = $con_telefono;
    }

    function setCon_profesion($con_profesion) {
        $this->con_profesion = $con_profesion;
    }

    function setCon_email($con_email) {
        $this->con_email = $con_email;
    }

    function setCon_nombreCompleto($con_nombreCompleto) {
        $this->con_nombreCompleto = $con_nombreCompleto;
    }

    function setCon_fechaNacimiento($con_fechaNacimiento) {
        $this->con_fechaNacimiento = $con_fechaNacimiento;
    }

    function setCp_nit($cp_nit) {
        $this->cp_nit = $cp_nit;
    }

    function setPro_nit($pro_nit) {
        $this->pro_nit = $pro_nit;
    }

    function setCli_documento($cli_documento) {
        $this->cli_documento = $cli_documento;
    }

    public function save() {
        $query = "INSERT INTO contacto (con_codigo,con_estadoCivil,con_cargo,con_telefono,
                  con_profesion,con_email,con_nombreCompleto,con_fechaNacimiento,cp_nit,pro_nit,cli_documento)
                  VALUES(
                       '" . $this->con_codigo . "',
                       '" . $this->con_estadoCivil . "',
                       '" . $this->con_cargo . "',
                       '" . $this->con_telefono . "',
                       '" . $this->con_profesion . "',
                       '" . $this->con_email . "',
                       '" . $this->con_nombreCompleto . "',
                       '" . $this->con_fechaNacimiento . "',
                       '" . $this->cp_nit . "',
                       '" . $this->pro_nit . "',
                       '" . $this->cli_documento . "',    
                       '" . $this->prd_iva . "'); ";


        $save = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $save;
    }

    public function update() {
        $query = "UPDATE contacto SET con_codigo=" . $_POST['con_codigo'] . ",
        con_estadoCivil='" . $_POST['con_estadoCivil'] . "',
        con_cargo='" . $_POST['con_cargo'] . "',
        con_telefono='" . $_POST['con_telefono'] . "',
        con_profesion='" . $_POST['con_profesion'] . "',
        con_email='" . $_POST['con_email'] . "',
        con_nombreCompleto='" . $_POST['con_nombreCompleto'] . "',
        con_fechaNacimiento='" . $_POST['con_fechaNacimiento'] . "',
        cp_nit='" . $_POST['cp_nit'] . "',
        pro_nit='" . $_POST['pro_nit'] . "',
        cli_documento='" . $_POST['cli_documento'] . "',
        prd_iva='" . $_POST['prd_iva'] . "',
        where con_codigo = '" . $_POST['con_codigo'] . "'";

        $update = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;
        return $update;
    }

    public function buscar() {
        $query = "SELECT * where con_codigo = " . $this->con_codigo . " a (
                      
                  
                       '" . $this->con_codigo . "',
                       '" . $this->con_estadoCivil . "',
                       '" . $this->con_cargo . "',
                       '" . $this->con_telefono . "',
                       '" . $this->con_profesion . "',
                       '" . $this->con_email . "',
                       '" . $this->con_nombreCompleto . "',
                       '" . $this->con_fechaNacimiento . "',
                       '" . $this->cp_nit . "',
                       '" . $this->pro_nit . "',
                       '" . $this->cli_documento . "',    
                       '" . $this->prd_iva . "'); ";
    }

}
