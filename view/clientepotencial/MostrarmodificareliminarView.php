<!--Mostrar modificar eliminar cliente potencial-->  

<html>
    <head>
        <title></title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <form id="formeditarclientepotencial" method="POST" action="<?php echo "index.php?controller=clientepotencial&action=index2"; ?>">

            <h1>Consultar:</h1>
            <?php
            $clientepotencial = isset($clientepotencial->cp_nit) ? $clientepotencial->cp_nit : "";
            $clientepotencial = isset($clientepotencial->cp_nombre) ? $clientepotencial->cp_nombre : "";
            $clientepotencial = isset($clientepotencial->cp_ciudad) ? $clientepotencial->cp_ciudad : "";
            $clientepotencial = isset($clientepotencial->cp_direccion) ? $clientepotencial->cp_direccion : "";
            $clientepotencial = isset($clientepotencial->cp_observaciones) ? $clientepotencial->cp_observaciones : "";
            $clientepotencial = isset($clientepotencial->cp_telefono) ? $clientepotencial->cp_telefono : "";
            ?>

            <input type="text" name="cpnit_consultar" >
            <div><input type="submit" id="consultar" name="consultar" value="Consultar" ></div>
        </form>
        <div id="mostrartodo">
            
            <h1>Registros</h1>
            <?php
            if ($valor == null) {
                if (isset($allusers)) {
                    foreach ($allusers as $clientepot) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                        echo $clientepot->cp_nit . " - ";
                        echo '<br>';
                        echo $clientepot->cp_nombre . " - ";
                        echo $clientepot->cp_ciudad . " - ";
                        echo $clientepot->cp_direccion . " - ";
                        echo $clientepot->cp_telefono . " - ";
                        echo $clientepot->cp_observaciones . " - ";
                        ?>
                        <div>
                            <a href = "<?php echo "index.php?controller=clientepotencial&action=borrar"; ?>&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-danger">eliminar</a>
                        </div>

                        <div >
                            <a href="index.php?controller=Clientepotencial&action=modificarbd&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-info">Modificar</a>
                        </div>
                        <br>
                        <hr/>
                        <?php
                    }
                    ?>
                    <?php
                }
            } else {
                echo $valor->cp_nit . " - ";
                echo '<br>';
                echo $valor->cp_nombre . " - ";
                echo $valor->cp_ciudad . " - ";
                echo $valor->cp_direccion . " - ";
                echo $valor->cp_telefono . " - ";
                echo $valor->cp_observaciones . " - ";
                ?>
                <div>
                    <a href = "<?php echo "index.php?controller=clientepotencial&action=borrar"; ?>&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-danger">eliminar</a>
                </div>

                <div >
                    <a href="index.php?controller=Clientepotencial&action=modificar&id=<?php echo $clientepot->cp_nit; ?>" class="btn btn-info">Modificar</a>
                </div>
                <br>
                <hr/>
                <?php
            }
            ?>  


        </div>


    </body>
</html>


