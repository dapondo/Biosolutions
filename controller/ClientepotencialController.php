<?php

class ClientepotencialController extends ControladorBase {

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
    }

    public function index() {
        //Creamos el objeto clientepotencial
        $clientepotencial = new clientepotencial($this->adapter);
        //Conseguimos todos los clientespotenciales (se utiliza metodo de (entidadbase) )
        $allusers = $clientepotencial->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("clientepotencial/indexclientepotencial", array(
            "allusers" => $allusers
        ));
    }

    public function crear() {
        
        //Si algún dato de los que necesita es POST entonces:

        if (isset($_POST["cp_nombre"])) {

            //Creamos un clientepotencial
            $clientepotencial = new clientepotencial($this->adapter);
            $clientepotencial->setCp_nombre($_POST["cp_nombre"]);
            $clientepotencial->setCp_nit($_POST["cp_nit"]);
            $clientepotencial->setCp_ciudad($_POST["cp_ciudad"]);
            $clientepotencial->setCp_direccion($_POST["cp_direccion"]);
            $clientepotencial->setCp_observaciones($_POST["cp_observaciones"]);
            $clientepotencial->setCp_telefono($_POST["cp_telefono"]);
            $save = $clientepotencial->save();
        }
       $this->redirect("Clientepotencial", "index");
    }

    public function modificar() {
        //Creamos el objeto clientepotencial 
        $clientepotencial = new clientepotencial($this->adapter);
        if (isset($_GET["id"])) {
            //variable para guardar vector de getById
            $id = (int) $_GET["id"];
        }
        //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
        $valor = $clientepotencial->getById($id, "cp_nit");
        //Cargamos la vista index y le pasamos valores
        $this->view("clientepotencial/indexmodificarView", array(
            "clientepotencial" => $valor
        ));
    }

    public function modificarbd() {
        $clientepotencial = new clientepotencial($this->adapter);
        //setear todos los campos
        if (isset($_POST["cp_nombre"])) {

            //Creamos un clientepotencial
            $clientepotencial = new clientepotencial($this->adapter);
            $clientepotencial->setCp_nombre($_POST["cp_nombre"]);
            $clientepotencial->setCp_nit($_POST["cp_nit"]);
            $clientepotencial->setCp_ciudad($_POST["cp_ciudad"]);
            $clientepotencial->setCp_direccion($_POST["cp_direccion"]);
            $clientepotencial->setCp_observaciones($_POST["cp_observaciones"]);
            //$clientepotencial->setCp_telefono($_POST["cp_telefono"]);
            $update = $clientepotencial->update();
        }
        $this->redirect("Clientepotencial", "eliminarclientepotencial");
    }

    public function borrar() {
        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];

            $clientepotencial = new clientepotencial($this->adapter);
            $clientepotencial->deleteById("cp_nit", $id);
        }
        $this->redirect("Clientepotencial", "index2");
    }

    
      public function index2() {
        //Creamos el objeto clientepotencial
        $clientepotencial = new clientepotencial($this->adapter);
        $valor = NULL;
        //Conseguimos todos los clientespotenciales (se utiliza metodo de (entidadbase) )
        if (isset($_POST["cpnit_consultar"])) {
            //variable para guardar vector de getById
            $id = (int) $_POST["cpnit_consultar"];
            //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
            $valor = $clientepotencial->getById($id, "cp_nit");
            //Cargamos la vista index y le pasamos valores
        } 
        $allusers = $clientepotencial->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("clientepotencial/Mostrarmodificareliminar", array(
            "allusers" => $allusers,
            "clientepotencial" => $valor
        ));
    }
    
        public function consultarclientepotencial() {
        $clientepotencial = new Clientepotencial($this->adapter);
        
           $this->view("cliente/Mostrarmodificareliminar", array(
                "clientepotencial" => $valor));
        
    }
    
    
    
}
