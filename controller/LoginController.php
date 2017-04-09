<?php

class LoginController extends ControladorBase {

    //Los dos atributos conectar y adapter sirven para hacer la conexion de la base de datos
    public $conectar;
    public $adapter;

    public function __construct() {
        parent::__construct();
        //Se crea un objeto de tipo (conectar)
        $this->conectar = new Conectar();
        $this->adapter = $this->conectar->conexion();
        //Se utiliza el objeto de tipo conectar para llamar una función del (controladorbase) 
        //que es el que ejecuta la conexión
        $this->layout = "Login_layout";
    }

    public function index() {
        //Creamos el objeto $cotizaciones
        $cotizaciones = new Cotizacion($this->adapter);
        //Conseguimos todas las cotizaciones (se utiliza metodo de (entidadbase) )
        $allusers = $cotizaciones->getAll();

        // Cargamos la vista index y le pasamos valores
        $this->view("login/Login", array(
            "allusers" => $allusers
        ));
    }

    public function login() {
        if (isset($_POST["usu_email"]) && $_POST["usu_password"]) {
            $usuarioname = isset($_POST["usu_email"]) ? trim($_POST["usu_email"]) : "";
            $contrasenna = isset($_POST["usu_password"]) ? trim($_POST["usu_password"]) : "";

            if ($usuarioname == '' || $contrasenna == '') {
                $this->view("login/Login", array(
                    "errores" => "Debe completar todos los campos")
                );
            } else {
                //Creamos un usuario   
                $usuario = new Usuarios($this->adapter);
                $usuario->setUsu_email($usuarioname);
                $usuario->setUsu_password($contrasenna);
                $usuario->setUsu_documento($usuarioname);
                if ($usuario->validarLogin()) {
                    $this->redirect("Cliente", "index");
                } else {
                    $this->view("login/Login", array(
                        "errores" => "El usuario o contraseña son incorrectos")
                    );
                }
            }
        } else {
            $this->view("login/Login");
        }
    }

    public function logout() {
        session_destroy();
        $this->view("Login/login");
    }

    public function error($code = 0) {
        $codeMessage = (isset($_GET['msg']) ? $GET['msg'] : $code);
        $message = "";
        switch ($codeMessage) {
            case 1:
                $message = "No está autorizado para realizar esta accion";
                break;
            case 2:
                $message = "La acción que intenta cargar no existe";
                break;
            default:
                $message = "Error desconocido.";
                break;
        }
        $this->view("Login/Error", array(
            "message" => $message
        ));
    }

        public function registrarUsuario() {
        //Si algún dato de los que necesita es POST entonces:
        
        if (isset($_POST["cli_documento"])) {
            //Creamos un cliente
            $usuario = new Usuarios($this->adapter);
            $usuario->setUsu_documento($_POST["usu_documento"]);
            $usuario->setUsu_nombre($_POST["usu_nombre"]);
            $usuario->setUsu_fechaNacimiento($_POST["usu_fechaNacimiento"]);
            $usuario->setUsu_password($_POST["usu_password"]);
            $usuario->setUsu_telefono($_POST["usu_telefono"]);
            $usuario->setUsu_nombreUsuario($_POST["usu_nombreUsuario"]);
            $usuario->setCli_nombre($_POST["cli_nombre"]);
            $usuario->setUsu_direccion($_POST["usu_direccion"]);
            $usuario->setUsu_email($_POST["usu_email"]);

            $registrarusuario = $usuario->registrar();
            $this->redirect("login", "Login");
        }else{
            $this->view("Login/registrarUsuario");
        }
       
    }
}