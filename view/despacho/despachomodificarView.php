<html>
    <head>
        <title>Modificar despacho</title>
    </head>
    <body>

        <!--Editar-->        
        <div class="container well col-lg-6 col-lg-offset-3">
            <form id="editardespacho" method="POST" action="<?php echo 'index.php?controller=Despacho&action=modificarbd'; ?>">
                <h1>Edite su Despacho</h1>

                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Fecha de envío</p>
                    <input disabled class="form-control" type="text" name="des_FechaEnvio" value="<?php echo $valor->des_FechaEnvio; ?>">
                </div>

                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Codigo despacho</p>
                    <input  type="text" class="form-control" name="des_CodigoDespacho"  value="<?php echo $valor->des_CodigoDespacho; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Transportadora</p>
                    <input  type="text" class="form-control" name="des_Transportadora"  value="<?php echo $valor->des_Transportadora; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Observaciones</p>
                    <input  type="text" class="form-control" name="des_ObservacionesEnvio"  value="<?php echo $valor->des_ObservacionesEnvio; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Orden de compra o contrato</p>
                    <input type="textarea" class="form-control" name="des_Contrato_Oc"  value="<?php echo $valor->des_Contrato_Oc; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Número de guía</p>
                    <input type="textarea" class="form-control" name="des_NumeroGuia"  value="<?php echo $valor->des_NumeroGuia; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Cantidad de cajas</p>
                    <input type="textarea" class="form-control" name="des_CantidadCajas"  value="<?php echo $valor->des_CantidadCajas; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Número de factura</p>
                    <input type="textarea" class="form-control" name="des_Numfactura"  value="<?php echo $valor->des_Numfactura; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">
                    <p>Cedula o Nit de cliente</p>
                    <input type="textarea" name="cli_documento" class="form-control" value="<?php echo $valor->cli_documento; ?>">
                </div>
                <div class="form-group col-lg-10 col-lg-offset-1">    
                    <p>Usuario quien realiza despacho</p>
                    <input type="textarea" class="form-control" name="usu_documento" value="<?php echo $valor->usu_documento; ?>">
                </div>
                <div class="form-group col-lg-5 col-lg-offset-4">    
                    <input value="Guardar" class="col-lg-12 btn btn-success" type="submit"/>
                </div>
            </form>
        </div>
    </body>
</html>

