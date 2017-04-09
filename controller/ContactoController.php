<?php

class ContactoController extends ControladorBase {

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
        //Creamos el objeto $cotizaciones
        $contacto = new Contacto($this->adapter);
        //Conseguimos todas las cotizaciones (se utiliza metodo de (entidadbase) )
        $allusers = $contacto->getAll();

        // Cargamos la vista index y le pasamos valores
        $this->view("contacto/contacto", array(
            "allusers" => $allusers
        ));
    }

    public function crearcontacto() {
        if (isset($_POST["con_codigo"])) {
        $crearcontacto = new Contacto($this->adapter);
        $crearcontacto->setCon_codigo($_POST["con_codigo"]);
        $crearcontacto->setCp_nit($_POST["cp_nit"]);
        $crearcontacto->setPro_nit($_POST["pro_nit"]);
        $crearcontacto->setCli_documento($_POST["cli_documento"]);
        $crearcontacto->setCon_estadoCivil($_POST["con_estadoCivil"]);
        $crearcontacto->setCon_cargo($_POST["con_cargo"]);
        $crearcontacto->setCon_telefono($_POST["con_telefono"]);
        $crearcontacto->setCon_profesion($_POST["con_profesion"]);
        $crearcontacto->setCon_nombreCompleto($_POST["con_nombreCompleto"]);
        $crearcontacto->setCon_fechaNacimiento($_POST["con_fechaNacimiento"]);
        $crearcontacto->setCon_email($_POST["con_email"]);
        $save = $crearcontacto->save();
    }
    $this->redirect("Contacto", "index");

}


}