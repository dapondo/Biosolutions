<html>
    <head>
        <title>Crear</title>
    </head>
    <body>
        <br>
        <div class="container col-xs-12 col-lg-10 col-lg-offset-1 well">
            <form method="POST" action="index.php?controller=Despacho&action=creardespacho">
                <div class="col-xs-12 col-lg-12">Fecha:</div>
                <div class="col-xs-12 col-lg-8"><input class="form-control" type="date" name="des_FechaEnvio">
                </div>
                <div class="col-xs-12 col-lg-12">Despacho:</div>
                <div class="col-xs-12 col-lg-8"><input type="text" class="form-control" name="des_CodigoDespacho" placeholder="Codido de despacho"></div>
                <br>
                <div class="col-xs-12 col-lg-8"><input type="text" class="form-control" name="des_Transportadora" placeholder="Transportadora"></div>
                <br>
                <div class="col-xs-12 col-lg-8"><input type="text" class="form-control" name="des_Contrato_Oc" placeholder="Contrato/Oc"></div>
                <br>
                <div class="col-xs-12 col-lg-8"><input type="text" class="form-control"  name="des_NumeroGuia" placeholder="Numero de Guia"></div>
                <br>
                <div class="col-xs-12 col-lg-8"><input type="text" class="form-control"  name="des_CantidadCajas" placeholder="des_Cantidad de Cajas"></div>
                <br>
                <div class="col-xs-12 col-lg-8"><input type="text" class="form-control" name="des_Numfactura" placeholder="Numero de factura"></div>
                <br>
                <div class="col-xs-12 col-lg-7">
                    <select name="cli_documento" class="form-control selcls">
                        <?php
                        //var_dump($allusers);
                        if ($allusers != "") {
                            foreach ($allusers as $item) {
                                echo "<option value='$item->cli_documento'>$item->cli_nombre</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-xs-12 col-lg-7">
                    <select class="form-control selcls" name="usu_documento">
                        <?php
                        //var_dump($allusers);
                        if ($allusuario != "") {
                            foreach ($allusuario as $usu) {
                                echo "<option value='$usu->usu_documento'>$usu->usu_documento</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
                <div class="col-xs-12 col-lg-8"><input class="form-control" type="text" name="des_ObservacionesEnvio" placeholder="Observaciones de Envio"></div>
                <br>
                <div class ="col-xs-12 col-lg-8"><input class="btn btn-success" type="submit" name="enviarcrear" ></div>
                <br>
                <script type="text/javascript">

                </script>
            </form>
        </div>
    </body>
</html>
