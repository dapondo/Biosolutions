<!--Mostrar modificar eliminar Despacho-->    
<html>
    <body>
        <br>
        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1 ">
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
                <div><input  class="btn btn-success" type="submit" id="consultar1" name="consultar" value="Consultar" ></div>
            </form>
            
            <br><br>
            <div><h3>Registros</h3></div>
            <div class="row well ">
                <div class="col-xs-3"><strong>Codigo Despacho</strong></div>
                <div class="col-xs-2"><strong>Contrato</strong></div>
                <div class="col-xs-3"><strong>Número de guía</strong></div>
                <div class="col-xs-2"><strong>Fecha de envío</strong></div>
                <div class="col-xs-2"><strong>Factura</strong></div>
            </div>
            <div class="row">

                <?php
                if ($valor == null) {
                    if (isset($allusers)) {
                        foreach ($allusers as $despacho) { //recorremos el array de objetos y obtenemos el valor de las propiedades 
                            ?> <div class="col-xs-3"> <?php echo $despacho->des_CodigoDespacho ?> </div> <?php
                            ?> <div class="col-xs-2"> <?php echo $despacho->des_Contrato_Oc ?> </div> <?php
                            ?> <div class="col-xs-3"> <?php echo $despacho->des_NumeroGuia ?> </div> <?php
                            ?> <div class="col-xs-2"> <?php echo $despacho->des_FechaEnvio ?> </div> <?php
                            ?> <div class="col-xs-2"> <?php echo $despacho->des_Numfactura ?> </div> <?php
                            ?>
                            <div class=" well col-xs-12 col-lg-12">
                                <a href="<?php echo "index.php?controller=Despacho&action=borrar"; ?>&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-danger">eliminar</a>
                                <a href="index.php?controller=Despacho&action=modificardespacho&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-info">Modificar</a>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    }
                } else if ($valor == $_POST[des_CodigoDespacho]) {
                    ?> <div class="col-xs-2"> <?php echo $valor->des_CodigoDespacho . " - "; ?> </div> <?php
                    ?> <div class="col-xs-2"> <?php echo $valor->des_Contrato_Oc . " - "; ?> </div> <?php
                    ?> <div class="col-xs-2"> <?php echo $valor->des_NumeroGuia . " - "; ?> </div> <?php
                    ?> <div class="col-xs-2"> <?php echo $valor->des_FechaEnvio . " - "; ?> </div> <?php
                    ?> <div class="col-xs-2"> <?php echo $valor->des_Numfactura . " - "; ?> </div> <?php
                    ?><br>
                    <div class="col-xs-2">
                        <a href = "<?php echo "index.php?controller=Despacho&action=borrar"; ?>&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-danger">eliminar</a>
                        <a href="index.php?controller=Despacho&action=modificardespacho&id=<?php echo $despacho->des_CodigoDespacho; ?>" class="btn btn-info">Modificar</a>
                    </div>
                    <?php
                }
                echo "</div>";
                ?>  

            </div>
        </div>
    </body>
</html>


