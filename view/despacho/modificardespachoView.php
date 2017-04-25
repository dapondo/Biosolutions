<!--Mostrar modificar eliminar Despacho-->    
<html>
    <head>
        <title></title>
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <br>
        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1">
            <form id="formeditarDesacho" method="POST" action="<?php echo "index.php?controller=Despacho&action=index2despacho"; ?>">

                <?php
                $despacho = isset($despacho->des_Transportadora) ? $despacho->des_Transportadora : "";
                $despacho = isset($despacho->des_ObservacionesEnvio) ? $despacho->des_ObservacionesEnvio : "";
                $despacho = isset($despacho->des_Contrato_Oc) ? $despacho->des_Contrato_Oc : "";
                $despacho = isset($despacho->des_NumeroGuia) ? $despacho->des_NumeroGuia : "";
                $despacho = isset($despacho->des_CantidadCajas) ? $despacho->des_CantidadCajas : "";
                $despacho = isset($despacho->des_FechaEnvio) ? $despacho->des_FechaEnvio : "";
                $despacho = isset($despacho->des_Numfactura) ? $despacho->des_Numfactura : "";
                ?>

                <div class="col-xs-12 col-lg-6 col-lg-offset-1" ><input class="form-control" type="text" name="cpnit_consultar"  placeholder="Consultar"></div>
                <div><input  class="btn btn-success" type="submit" id="consultar" name="consultar" value="Consultar" ></div>
            </form>
        </div>
        <div id="mostrartodo">

            <h1>Registros</h1>
            <?php
            if ($valor == null) {
                if (isset($allusers)) {
                    foreach ($allusers as $despacho) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                        echo $despacho->des_CodigoDespacho . " - ";
                        echo '<br>';
                        echo $despacho->des_Transportadora . " - ";
                        echo $despacho->des_Contrato_Oc . " - ";
                        echo $despacho->des_ObservacionesEnvio . " - ";
                        echo $despacho->des_NumeroGuia . " - ";
                        echo $despacho->des_CantidadCajas . " - ";
                        echo $despacho->des_FechaEnvio . " - ";
                        echo $despacho->des_Numfactura . " - ";
                        ?>

                        <div><a href="<?php echo "index.php?controller=Despacho&action=borrar"; ?>&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-danger">eliminar</a></div>
                        <div>
                            <a href="index.php?controller=Despacho&action=modificarbd&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-info">Modificar</a>
                        </div>
                        <br>
                        <hr/>
                        <?php
                    }
                    ?>
                    <?php
                }
            } else {
                echo $valor->des_CodigoDespacho . " - ";
                echo '<br>';
                echo $valor->des_ObservacionesEnvio . " - ";
                echo $valor->des_Contrato_Oc . " - ";
                echo $valor->des_NumeroGuia . " - ";
                echo $valor->des_CantidadCajas . " - ";
                echo $valor->des_FechaEnvio . " - ";
                echo $valor->des_Numfactura . " - ";
                ?>
                <div>
                    <a href = "<?php echo "index.php?controller=clientepotencial&action=borrar"; ?>&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-danger">eliminar</a>
                </div>

                <div >
                    <a href="index.php?controller=Despacho&action=modificarbd&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-info">Modificar</a>
                </div>
                <br>
                <hr/>
                <?php
            }
            ?>  


        </div>


    </body>
</html>


