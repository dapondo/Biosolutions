<?php

class Usuario extends EntidadBase {

    private $usu_documento;
    private $usu_nombre;
    private $usu_fechaNacimiento;
    private $usu_password;
    private $usu_telefono;
    private $usu_nombreUsuario;
    private $usu_direccion;
    private $usu_email;

    public function __construct($adapter) {
        $table = "usuario";
        parent::__construct($table, $adapter);
    }

    function setUsu_documento($usu_documento) {
        $this->usu_documento = $usu_documento;
    }

    function setUsu_nombre($usu_nombre) {
        $this->usu_nombre = $usu_nombre;
    }

    function setUsu_fechaNacimiento($usu_fechaNacimiento) {
        $this->usu_fechaNacimiento = $usu_fechaNacimiento;
    }

    function setUsu_password($usu_password) {
        $this->usu_password = $usu_password;
    }

    function setUsu_telefono($usu_telefono) {
        $this->usu_telefono = $usu_telefono;
    }

    function setUsu_nombreUsuario($usu_nombreUsuario) {
        $this->usu_nombreUsuario = $usu_nombreUsuario;
    }

    function setUsu_direccion($usu_direccion) {
        $this->usu_direccion = $usu_direccion;
    }

    function setUsu_email($usu_email) {
        $this->usu_email = $usu_email;
    }

    function getUsu_documento() {
        return $this->usu_documento;
    }

    function getUsu_nombre() {
        return $this->usu_nombre;
    }

    function getUsu_fechaNacimiento() {
        return $this->usu_fechaNacimiento;
    }

    function getUsu_password() {
        return $this->usu_password;
    }

    function getUsu_telefono() {
        return $this->usu_telefono;
    }

    function getUsu_nombreUsuario() {
        return $this->usu_nombreUsuario;
    }

    function getUsu_direccion() {
        return $this->usu_direccion;
    }

    function getUsu_email() {
        return $this->usu_email;
    }

    public function validarLogin() {
        $resultSet = null;
        $query = $this->db()->query("SELECT * FROM `usuario` INNER JOIN usuarioroles on usuario.usu_documento = usuarioroles.usu_documento
                  INNER JOIN roles ON roles.rol_idRol = usuarioroles.rol_idRol WHERE (usuario.usu_documento ='$this->usu_documento' || usu_email ='$this->usu_email')"
                . " && usu_password='$this->usu_password'");
// el print_r es para mostrar un array, es similar al echo

        if ($query->num_rows > 0) {
            //$row va a tomar la consulta como una fila y lo va a guardar en el row, de esa forma cada que hace el ciclo en $row se tiene un nuevo objeto
            while ($row = $query->fetch_object()) {
                //Resultset es un vector que guarda un array con dos variables (1)id (2)tipo
                $resultSet[] = array('id' => $row->rol_idRol, 'tipo' => $row->rol_tipoRol);
                $_SESSION['nombre'] = $row->usu_nombre;
            }
            $_SESSION['datosvector'] = $resultSet;
            //$_SESSION['nombre'] = "Julian";   
            $_SESSION['timeout'] = time();
            session_regenerate_id();
            return true;
        } else {
            return false;
        }
    }

    public function registrar() {
        $query = "INSERT INTO usuario (usu_documento,usu_nombre,usu_fechaNacimiento,usu_password,usu_telefono,usu_nombreUsuario,
                     usu_direccion,usu_email)VALUES(
                       '" . $this->usu_documento . "',
                       '" . $this->usu_nombre . "',
                       '" . $this->usu_fechaNacimiento . "',
                       '" . $this->usu_password . "',
                       '" . $this->usu_telefono . "',
                       '" . $this->usu_nombreUsuario . "',    
                       '" . $this->usu_direccion . "',
                       '" . $this->usu_email . "'); ";
        //mostrar la consulta completa en pantalla con     
        //echo "QUERY> ".$query;        
        $registrarusuario = $this->db()->query($query);
        //echo "SQL> ".$query;
        //$this->db()->error;

        return $registrarusuario;
    }

}
