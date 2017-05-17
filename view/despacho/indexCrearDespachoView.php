<html>
    <head>
        <title>Crear</title>
    </head>
    <body>

        <div class="container col-xs-12 col-lg-10 col-lg-offset-1 well">
            <form method="POST" action="index.php?controller=Despacho&action=creardespacho">
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">Fecha:</div>
                    <div class="col-xs-12 col-lg-4"><input class="form-control" type="date" name="des_FechaEnvio"></div>
                </div>
                <hr class="col-xs-12 col-lg-12">
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">Cod. Despacho:</div>
                    <div class="col-xs-12 col-lg-4"><input type="text" class="form-control" name="des_CodigoDespacho" placeholder="Codido de despacho"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">Transportadora:</div>
                    <div class="col-xs-12 col-lg-4"><input type="text" class="form-control" name="des_Transportadora" placeholder="Transportadora"></div>
                </div>
                <br>    
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">Orden/contrato:</div>
                    <div class="col-xs-12 col-lg-4"><input type="text" class="form-control" name="des_Contrato_Oc" placeholder="Contrato/Oc"></div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">N° Guía:</div>
                    <div class="col-xs-12 col-lg-4"><input type="text" class="form-control"  name="des_NumeroGuia" placeholder="Numero de Guia"></div>
                </div>
                <br>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">Cant. Cajas:</div>
                    <div class="col-xs-12 col-lg-4"><input type="text" class="form-control"  name="des_CantidadCajas" placeholder="des_Cantidad de Cajas"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">N° Factura:</div>
                    <div class="col-xs-12 col-lg-4"><input type="text" class="form-control" name="des_Numfactura" placeholder="Numero de factura"></div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">Cliente:</div>
                    <div class="col-xs-12 col-lg-4">
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
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-2">Quién realiza el despacho:</div>
                    <div class="col-xs-12 col-lg-4">
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
                </div>
                <div class="form-group">
                    <div class="col-xs-12 col-lg-12" style="margin-top: 5px">Observaciones:</div>
                    <div class="col-xs-12 col-lg-12" style="margin-top: 5px"><textarea class="form-control" type="textarea" name="des_ObservacionesEnvio" placeholder="Observaciones de Envio"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class ="col-xs-12 col-lg-3 col-lg-offset-5" style="margin-top: 30px"><input class="btn btn-success col-lg-12" type="submit" name="enviarcrear" ></div>
                </div>
                <br>
                <script type="text/javascript">

                </script>
            </form>

    </body>
</html>
