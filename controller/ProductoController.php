<?php

class ProductoController extends ControladorBase {

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
        //Creamos el objeto producto
        $producto = new Producto($this->adapter);
        //Conseguimos todos los productos (se utiliza metodo de (entidadbase) )
        $allusers = $producto->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("producto/crearproducto", array(
            "allusers" => $allusers
        ));
    }
    
     public function index2() {
        //Creamos el objeto producto
        $proveedor = new Proveedor($this->adapter);
        //Conseguimos todos los productos (se utiliza metodo de (entidadbase) )
        $allusers = $proveedor->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("producto/crearproducto", array(
            "allusers" => $allusers
        ));
    }

    public function crearproducto() {
        //Si algún dato de los que necesita es POST entonces:

        if (isset($_POST["prd_codigoProducto"])) {
            //Creamos un cliente
            $producto = new Producto($this->adapter);
            $producto->setPrd_codigoProducto($_POST["prd_codigoProducto"]);
            //$producto->setCat_idCategoria($_POST["cat_idCategoria"]);
            //$producto->setPro_nit($_POST["pro_nit"]);
            $producto->setPrd_tipoDivisa($_POST["prd_tipoDivisa"]);
            $producto->setPrd_costo($_POST["prd_costo"]);
            $producto->setPrd_tipoPresentacion($_POST["prd_tipoPresentacion"]);
            $producto->setPrd_nombre($_POST["prd_nombre"]);
            $producto->setPrd_descripcion($_POST["prd_descripcion"]);
            $producto->setPrd_foto($_POST["prd_foto"]);
            $producto->setPrd_loteSerial($_POST["prd_loteSerial"]);
            $producto->setPrd_fechaVencimiento($_POST["prd_fechaVencimiento"]);
            $producto->setPrd_cantidadPresentacion($_POST["prd_cantidadPresentacion"]);
            $producto->setPrd_iva($_POST["prd_iva"]);

            $save = $producto->save();
        }
       $this->redirect("producto", "index");
        
    }

}
