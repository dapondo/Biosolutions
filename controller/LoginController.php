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
        $usuario = new Usuario($this->adapter);
        //Conseguimos todas las cotizaciones (se utiliza metodo de (entidadbase) )
        $allusers = $usuario->getAll();

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
                $usuario = new Usuario($this->adapter);
                $usuario->setUsu_email($usuarioname);
                $usuario->setUsu_password($contrasenna);
                $usuario->setUsu_documento($usuarioname);
                if ($usuario->validarLogin()) {
                    $this->redirect("Cliente", "index");
                } else {
                    echo 'no entra';
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

        
}