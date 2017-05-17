<?php

class DespachoController extends ControladorBase {

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

    public function indexcrear() {
        //Creamos el objeto Cliente
        $cliente = new Cliente($this->adapter);
        //Conseguimos todos los clientes (se utiliza metodo de (entidadbase) )
        $allusers = $cliente->getAll();

        $usuario = new Usuario($this->adapter);
        //Conseguimos todos los despacho (se utiliza metodo de (entidadbase) )
        $allusuario = $usuario->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("despacho/indexcrearDespacho", array(
            "allusers" => $allusers,
            "allusuario" => $allusuario
        ));
    }

    public function creardespacho() {
        //Si algún dato de los que necesita es POST entonces:

        if (isset($_POST["des_ObservacionesEnvio"])) {
            //Creamos un despacho
            $despacho = new Despacho($this->adapter);
            $despacho->setDes_CodigoDespacho($_POST["des_CodigoDespacho"]);
            $despacho->setDes_Transportadora($_POST["des_Transportadora"]);
            $despacho->setDes_ObservacionesEnvio($_POST["des_ObservacionesEnvio"]);
            $despacho->setDes_Contrato_Oc($_POST["des_Contrato_Oc"]);
            $despacho->setDes_NumeroGuia($_POST["des_NumeroGuia"]);
            $despacho->setDes_CantidadCajas($_POST["des_CantidadCajas"]);
            $despacho->setDes_FechaEnvio($_POST["des_FechaEnvio"]);
            $despacho->setDes_Numfactura($_POST["des_Numfactura"]);
            $despacho->setCli_documento($_POST["cli_documento"]);
            $despacho->setUsu_documento($_POST["usu_documento"]);
            $savedespacho = $despacho->savedespacho();
        }
        $this->redirect("Despacho", "indexcrear");
    }

    public function consultardespacho() {
        $despachoconsultar = new despacho($this->adapter);
        $selectfiltro = isset($_POST['filtro']) ? $_POST['filtro'] : "";
        if (isset($_POST["documento_consultar"])) {
            $allusers = $despachoconsultar->getAll();
            //variable para guardar vector de getBy
            $id = $_POST["documento_consultar"];
            if ($id == "") {
                $valor = $despachoconsultar->getAll();
            } else {
                //Conseguimos el metodo getby el cual me envia un vector y debo guardar en una variable
                $valor = $despachoconsultar->getBy($selectfiltro, $id);
            }
            //Cargamos la vista index y le pasamos valores
            $this->view("despacho/modificardespacho", array(
                "despachofiltro" => $valor,
                "allusers" => $allusers,
                "documento_consultar" => $id
            ));
        } else if (isset($_GET["documento_consultar"])) {
            $allusers = $despachoconsultar->getAll();
            //variable para guardar vector de getBy
            $id = $_GET["documento_consultar"];
            //Conseguimos el metodo getby el cual me envia un vector y debo guardar en una variable
            $valor = $despachoconsultar->getBy('des_CodigoDespacho', $id);
            //Cargamos la vista index y le pasamos valores
            $this->view("despacho/modificardespacho", array(
                "documento_consultar" => $id,
                "despachofiltro" => $valor,
                "allusers" => $allusers,
                "mensajes" => "El despacho ha sido modificado con exito"
                
                    )
            );
        } else {
            $valor = $despachoconsultar->getAll();
            $this->view("despacho/modificardespacho", array(
                "despacho" => null,
                "documento_consultar" => "",
                "despachofiltro" => $valor,
            ));
        }
    }

    public function indexmodificar() {
        //Creamos el objeto despacho
        $despacho = new Despacho($this->adapter);
        $valor = NULL;
        //Conseguimos todos los despacho (se utiliza metodo de (entidadbase) )
        if (isset($_POST["id"])) {
            //variable para guardar vector de getById
            $id = (int) $_POST["id"];
            //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
            $valor = $despacho->getById($id, "des_CodigoDespacho");
            //Cargamos la vista index y le pasamos valores
        }
        $allusers = $despacho->getAll();

        //Cargamos la vista index y le pasamos valores
        $this->view("despacho/modificardespacho", array(
            "allusers" => $allusers,
            "despacho" => $valor
        ));
    }

    public function modificardespacho() {
        //Creamos el objeto despachos 
        $modificardespacho = new Despacho($this->adapter);
        $cliente = new Cliente($this->adapter);
        $allclient = $cliente->getAll();

        if (isset($_GET["id"])) {
            //variable para guardar vector de getById
            $id = (int) $_GET["id"];
        }
        //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
        $valor = $modificardespacho->getById($id, "des_CodigoDespacho");
        //Cargamos la vista index y le pasamos valores
        $this->view("despacho/despachomodificar", array(
            "modificardespacho" => $valor),
            array("allclient" => $allclient)
        );
    }

    public function modificarbd() {
        $despacho = new Despacho($this->adapter);
        //setear todos los campos
        if (isset($_POST["des_CodigoDespacho"])) {
            //Creamos un despacho
            $despacho = new Despacho($this->adapter);
            $despacho->setDes_CodigoDespacho($_POST["des_CodigoDespacho"]);
            $despacho->setDes_Transportadora($_POST["des_Transportadora"]);
            $despacho->setDes_ObservacionesEnvio($_POST["des_ObservacionesEnvio"]);
            $despacho->setDes_Contrato_Oc($_POST["des_Contrato_Oc"]);
            $despacho->setDes_NumeroGuia($_POST["des_NumeroGuia"]);
            $despacho->setDes_CantidadCajas($_POST["des_CantidadCajas"]);
            $despacho->setDes_FechaEnvio($_POST["des_FechaEnvio"]);
            $despacho->setDes_Numfactura($_POST["des_Numfactura"]);
            $despacho->setCli_documento($_POST["cli_documento"]);
            $despacho->setUsu_documento($_POST["usu_documento"]);
            $updatedespaco = $despacho->updatedespacho();
        }
        $this->redirect("despacho", "consultardespacho&documento_consultar=" . $despacho->getDes_CodigoDespacho());
        //$this->redirect("Despacho", "indexmodificar");
    }

    //Este metodo se utiliza en la consulta en la vista modificardespachoView
    public function index2despacho() {
        //Creamos el objeto despacho
        $despacho = new despacho($this->adapter);
        //declaramos variable en NULL
        $valor = NULL;
        //Conseguimos todos los despacho (se utiliza metodo de (entidadbase) )
        if (isset($_POST["id"])) {
            //variable para guardar vector de getById
            $id = (int) $_POST["id"];
            //Conseguimos el metodo getbyid el cual me envia un vector y debo guardar en una variable
            $valor = $despacho->getById($id, "des_CodigoDespacho");
        }
        $allusers = $despacho->getAll();
        //Cargamos la vista index y le pasamos valores
        $this->view("despacho/modificardespacho", array(
            "allusers" => $allusers,
            "despacho" => $valor
        ));
    }

    //Borrar un despacho
    public function borrar() {
        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];

            $despacho = new Despacho($this->adapter);
            $despacho->deleteById("des_CodigoDespacho", $id);
        }
        $this->redirect("Despacho", "index2despacho");
    }

}
