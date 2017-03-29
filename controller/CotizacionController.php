<?php
class CotizacionController extends ControladorBase {
    

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
    
     public function index(){
        //Creamos el objeto $cotizaciones
        $cotizaciones = new Cotizacion($this->adapter);
        //Conseguimos todas las cotizaciones (se utiliza metodo de (entidadbase) )
        $allusers = $cotizaciones->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("cotizacion/cotizacion", array(
            "allusers" => $allusers
        ));
    }
    
    
}
