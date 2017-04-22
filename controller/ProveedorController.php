<?php

class ProveedorController extends ControladorBase {

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
        $proveedor = new Proveedor($this->adapter);
        //Conseguimos todos los clientespotenciales (se utiliza metodo de (entidadbase) )
        $allusers = $proveedor->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("proveedor/CrearProveedor", array(
            "allusers" => $allusers
        ));
    }
        
        public function crearproveedor(){
             if (isset($_POST["pro_nit"])) {
            //Creamos un cliente
            $proveedor = new Proveedor($this->adapter);
            $proveedor->setPro_nit($_POST["pro_nit"]);
            $proveedor->setPro_paginaWeb($_POST["pro_paginaWeb"]);
            $proveedor->setPro_Nombre($_POST["pro_Nombre"]);
            $proveedor->setPro_emailEmpresa($_POST["pro_emailEmpresa"]);
            $proveedor->setPro_direccion($_POST["pro_direccion"]);
            $proveedor->setPro_telefono($_POST["pro_telefono"]);
            $proveedor->setPro_pais($_POST["pro_pais"]);
            $proveedor->setPro_ciudad($_POST["pro_ciudad"]);
            
            $saveproveedor = $proveedor->saveproveedor();
        }
        $this->redirect("proveedor", "index");
        }
        
           public function modificarproveedor() {
        //Creamos el objeto clientepotencial 
        $proveedor = new Proveedor($this->adapter);
        if (isset($_GET["id"])) {
            //variable para guardar vector de getById
            $id = (int) $_GET["id"];
        }
         //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
        $valor = $proveedor->getById($id, "cp_nit");
        //Cargamos la vista index y le pasamos valores
        $this->view("proveedor/ModificarProveedor1", array(
            "proveedor" => $valor
        ));
    }
    
    public function modificarbd() {
        $proveedor = new Proveedor($this->adapter);
        //setear todos los campos
        if (isset($_POST["pro_nit"])) {

            //Creamos un clientepotencial
            $proveedor = new Proveedor($this->adapter);
            $proveedor->setPro_nit($_POST["pro_nit"]);
            $proveedor->setPro_paginaWeb($_POST["pro_paginaWeb"]);
            $proveedor->setPro_Nombre($_POST["pro_Nombre"]);
            $proveedor->setPro_emailEmpresa($_POST["pro_emailEmpresa"]);
            $proveedor->setPro_direccion($_POST["pro_direccion"]);
            $proveedor->setPro_telefono($_POST["pro_telefono"]);
            $proveedor->setPro_pais($_POST["pro_pais"]);
            $proveedor->setPro_ciudad($_POST["pro_ciudad"]);
            //$clientepotencial->setCp_telefono($_POST["cp_telefono"]);
            $updateproveedor = $proveedor->updateproveedor();
        }
        $this->redirect("proveedor", "ModificarProveedor1");
    }
    
}



    