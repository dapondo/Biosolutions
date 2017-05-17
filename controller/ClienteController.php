<?php

class ClienteController extends ControladorBase {

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
        //Creamos el objeto cliente
        $cliente = new cliente($this->adapter);
        //Conseguimos todos los clientespotenciales (se utiliza metodo de (entidadbase) )
        $allusers = $cliente->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("cliente/indexcliente", array(
            "allusers" => $allusers
        ));
    }

    public function crearcliente() {
        //Si algún dato de los que necesita es POST entonces:

        if (isset($_POST["cli_documento"])) {
            //Creamos un cliente
            $cliente = new cliente($this->adapter);
            $cliente->setCli_documento($_POST["cli_documento"]);
            $cliente->setCli_paginaWeb($_POST["cli_paginaWeb"]);
            $cliente->setCli_direccion($_POST["cli_direccion"]);
            $cliente->setCli_email($_POST["cli_email"]);
            $cliente->setCli_zonaCliente($_POST["cli_zonaCliente"]);
            $cliente->setCli_ciudad($_POST["cli_ciudad"]);
            $cliente->setCli_nombre($_POST["cli_nombre"]);
            $cliente->setCli_pais($_POST["cli_pais"]);
            $cliente->setCli_telefono($_POST["cli_telefono"]);
            $cliente->setCli_password($_POST["cli_password"]);

            $savecliente = $cliente->savecliente();
        }
        $this->redirect("cliente", "index");
    }

    public function consultarcliente() {
        $clienteconsultar = new cliente($this->adapter);
        $selectfiltro = isset($_POST['filtro']) ? $_POST['filtro'] : "";
        if (isset($_POST["documento_consultar"])) {
            $allusers = $clienteconsultar->getAll();
            //variable para guardar vector de getBy
            $id = $_POST["documento_consultar"];
            if ($id == "") {
                $valor = $clienteconsultar->getAll();
            } else {
                //Conseguimos el metodo getby el cual me envia un vector y debo guardar en una variable
                $valor = $clienteconsultar->getBy($selectfiltro, $id);
            }
            //Cargamos la vista index y le pasamos valores
            $this->view("cliente/indexmodificarcliente", array(
                "clientefiltro" => $valor,
                "allusers" => $allusers,
                "documento_consultar" => $id
            ));
        } else if (isset($_GET["documento_consultar"])) {
            $allusers = $clienteconsultar->getAll();
            //variable para guardar vector de getBy
            $id = $_GET["documento_consultar"];
            //Conseguimos el metodo getby el cual me envia un vector y debo guardar en una variable
            $valor = $clienteconsultar->getBy('cli_documento', $id);
            //Cargamos la vista index y le pasamos valores
            $this->view("cliente/indexmodificarcliente", array(
                "clientefiltro" => $valor,
                "allusers" => $allusers,
                "mensajes" => "El cliente ha sido modificado con exito",
                "documento_consultar" => $id
                    )
            );
        } else {
            $valor = $clienteconsultar->getAll();
            $this->view("cliente/indexmodificarcliente", array(
                "cliente" => null,
                "documento_consultar" => "",
                "clientefiltro" => $valor,
            ));
        }
    }

    public function modificar() {
        //Creamos el objeto cliente
        $cliente = new cliente($this->adapter);
        if (isset($_GET["id"])) {
            //variable para guardar vector de getById
            $id = (int) $_GET["id"];
        }
        //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
        $valor = $cliente->getById($id, "cli_documento");
        //Cargamos la vista index y le pasamos valores

        $this->view("cliente/modificarcliente", array(
            "cliente" => $valor
        ));
    }

    public function modificarbd() {
        //setear todos los campos
        if ($_POST["cli_documento"]) {
            $cliente = new cliente($this->adapter);
            //Creamos un cliente
            $cliente->setCli_documento($_POST["cli_documento"]);
            $cliente->setCli_paginaWeb($_POST["cli_paginaWeb"]);
            $cliente->setCli_direccion($_POST["cli_direccion"]);
            $cliente->setCli_email($_POST["cli_email"]);
            $cliente->setCli_zonaCliente($_POST["cli_zonaCliente"]);
            $cliente->setCli_ciudad($_POST["cli_ciudad"]);
            $cliente->setCli_nombre($_POST["cli_nombre"]);
            $cliente->setCli_pais($_POST["cli_pais"]);
            $cliente->setCli_telefono($_POST["cli_telefono"]);
            $cliente->setCli_password($_POST["cli_password"]);
            $update = $cliente->update();
        }
        $this->redirect("cliente", "consultarcliente&documento_consultar=" . $cliente->getCli_documento());
        //header("Location:index.php?controller=" . $controlador . "&action=" . $accion);
    }

    public function index2() {
        //Creamos el objeto clientepotencial
        $cliente = new cliente($this->adapter);
        $valor = NULL;
        //Conseguimos todos los clientespotenciales (se utiliza metodo de (entidadbase) )
        if (isset($_POST["id"])) {
            //variable para guardar vector de getById
            $id = (int) $_POST["id"];
            //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
            $valor = $cliente->getById($id, "cli_documento");
            //Cargamos la vista index y le pasamos valores
        }
        $allusers = $cliente->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("cliente/indexmodificarcliente", array(
            "allusers" => $allusers,
            "cliente" => $valor
        ));
    }

    //Borrar un cliente
    public function borrar() {
        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];

            $cliente = new Cliente($this->adapter);
            $cliente->deleteById("cli_documento", $id);
        }
        //  $this->redirect("cliente", "consultarcliente&documento_consultar=" . $cliente->getCli_documento());

        $this->view("cliente/indexmodificarcliente", array(
            "mensajes" => "El cliente ha sido eliminado con exito",
            "documento_consultar" => ""));
    }

}
