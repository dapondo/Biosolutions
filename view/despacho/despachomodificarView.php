<html>
    <head>
        <title>Modificar despacho</title>
    </head>
    <body>

<!--Editar-->        
        <form id="editardespacho" method="POST" action="<?php echo 'index.php?controller=Despacho&action=modificarbd';?>">
            <h1>Edite su Despacho</h1>
            <br>
            <input disabled type="text" name="des_FechaEnvio" value="<?php echo $valor->des_FechaEnvio;?>">
            <br>
            <br>
            <input  type="text" name="des_CodigoDespacho"  value="<?php echo $valor->des_CodigoDespacho;?>">
            <br>
            <br>
            <input  type="text" name="des_Transportadora"  value="<?php echo $valor->des_Transportadora;?>">
            <br>
            <br>
            <input  type="text" name="des_ObservacionesEnvio"  value="<?php echo $valor->des_ObservacionesEnvio;?>">
            <br>
            <br>
            <input type="textarea" name="des_Contrato_Oc"  value="<?php echo $valor->des_Contrato_Oc;?>">
            <br>
            <br>
            <input type="textarea" name="des_NumeroGuia"  value="<?php echo $valor->des_NumeroGuia;?>">
            <br>
            <br>
            <input type="textarea" name="des_CantidadCajas"  value="<?php echo $valor->des_CantidadCajas;?>">
            <br>
            <br>
            <input type="textarea" name="des_FechaEnvio" value="<?php echo $valor->des_FechaEnvio;?>">
            <br>
            <br>
            <input type="textarea" name="des_Numfactura"  value="<?php echo $valor->des_Numfactura;?>">
            <br>
            <br>
            <input type="textarea" name="cli_documento"  value="<?php echo $valor->cli_documento;?>">
            <br>
            <br>    
            <input type="textarea" name="usu_documento" value="<?php echo $valor->usu_documento;?>">
            <br>
            <br>
            <input value="Guardar" type="submit"/>
        </form>

    </body>
</html>

