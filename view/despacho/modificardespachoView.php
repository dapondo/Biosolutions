<!--Mostrar modificar eliminar Despacho-->    
<html>
    <body>
        <br>
        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1">
            <form id="formeditarDesacho" method="POST" action="<?php echo "index.php?controller=Despacho&action=consultardespacho"; ?>">

                <div class="col-xs-12 col-lg-6 col-lg-offset-1">
                    <input name="documento_consultar" value= "<?php echo $documento_consultar; ?>" class="form-control" placeholder="Consultar">
                    <?php
                    ?>
                </div>
                <div class="col-lg-3">
                    <!--Antes tenía el nombre de filtro-->
                    <select name="filtro" class="form-control col-lg-6">
                        <option value ='des_CodigoDespacho'>Codigo Despacho</option>
                        <option value='cli_documento'>Doc. Cliente</option>
                        <option value='des_Contrato_Oc'>Contrato/orden</option>
                    </select>
                </div>
                <div class = "col-xs-12 col-lg-12 col-lg-offset-1" >
                    <input type = "submit" class = "btn btn-success" style = "margin-top: 20px;" name = "consultar" value = "Consultar">
                </div>
            </form>        
        </div>


        <?php
        echo "
        <div class='container well col-xs-12 col-lg-10 col-lg-offset-1'>
        <div class = 'col-xs-6 col-lg-3 well'>Codigo Despacho</div>
        <div class = 'col-xs-6 col-lg-2 well'>Contrato</div>
        <div class = 'col-xs-6 col-lg-2 well'>Factura</div>
        <div class = 'col-xs-6 col-lg-1 well'>Cliente</div> 
        <div class = 'col-xs-6 col-lg-2 well'>Observaciones</div> 
        <div class = 'col-xs-6 col-lg-2 well'>Funcionalidades</div>";
        if (isset($mensajes)) {
            echo $mensajes;
        }
        //antes clientefiltro
        if (isset($despachofiltro)) {
            foreach ($despachofiltro as $despacho) {
                $des_CodigoDespacho = isset($despacho->des_CodigoDespacho) ? $despacho->des_CodigoDespacho : "";
                $des_Transportadora = isset($despacho->des_Transportadora) ? $despacho->des_Transportadora : "";
                $des_ObservacionesEnvio = isset($despacho->des_ObservacionesEnvio) ? $despacho->des_ObservacionesEnvio : "";
                $des_Contrato_Oc = isset($despacho->des_Contrato_Oc) ? $despacho->des_Contrato_Oc : "";
                $des_NumeroGuia = isset($despacho->des_NumeroGuia) ? $despacho->des_NumeroGuia : "";
                $des_CantidadCajas = isset($despacho->des_CantidadCajas) ? $despacho->des_CantidadCajas : "";
                $des_FechaEnvio = isset($despacho->des_FechaEnvio) ? $despacho->des_FechaEnvio : "";
                $des_Numfactura = isset($despacho->des_Numfactura) ? $despacho->des_Numfactura : "";
                $cli_documento = isset($despacho->cli_documento) ? $despacho->cli_documento : "";
                $usu_documento = isset($despacho->usu_documento) ? $despacho->usu_documento : "";
                echo "
        <form id='formdespacho' method='POST' action='index.php?controller=Despacho&action=modificarbd;' ?>
        <div class = 'col-xs-6 col-lg-3 well'><p name = 'des_CodigoDespacho'>$des_CodigoDespacho</p></div>
        <div class = 'col-xs-6 col-lg-2 well'><p name = 'des_Contrato_Oc'>$des_Contrato_Oc</p></div>
        <div class = 'col-xs-6 col-lg-2 well'><p name = 'des_Numfactura'>$des_Numfactura</p></div>  
        <div class = 'col-xs-6 col-lg-1 well'><p name = 'cli_documento'>$cli_documento</p></div>  
        <div class = 'col-xs-6 col-lg-2 well'><p name = 'des_ObservacionesEnvio'>$des_ObservacionesEnvio</p></div>
        <a href='index.php?controller=Despacho&action=modificardespacho&id=$despacho->des_CodigoDespacho;' class='btn btn-success col-lg-2 col-xs-1' style='margin-top: 1px;'>Modificar</a>
        <br>
        <br>    
         <a href='index.php?controller=Despacho&action=borrar&id=$despacho->des_CodigoDespacho;'class='btn btn-danger col-lg-2 col-xs-1' style='margin-top: 1px;'>eliminar</a>    
        </form> ";
            }

            if ($cli_documento != "") {
                
            }
        }
        ?>
    </body>
</html>


