<html>
    <head>
        <title>Modificar</title>
    </head>
    <body>  
        <br>
        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1">
            <form  method="POST" action="<?php echo "index.php?controller=cliente&action=consultarcliente"; ?>">
                <div class="col-xs-12 col-lg-6 col-lg-offset-1"><input name="documento_consultar" class="form-control" placeholder="Consultar"></div>
                <div class="col-lg-10 col-lg-offset-1" ><input type="submit" class="btn btn-success" style="margin-top: 20px;" name="consultar" value="Consultar" ></div>
                <?php
                $cli_documento = isset($cliente->cli_documento) ? $cliente->cli_documento : "";
                $cli_paginaWeb = isset($cliente->cli_paginaWeb) ? $cliente->cli_paginaWeb : "";
                $cli_direccion = isset($cliente->cli_direccion) ? $cliente->cli_direccion : "";
                $cli_email = isset($cliente->cli_email) ? $cliente->cli_email : "";
                $cli_zonaCliente = isset($cliente->cli_zonaCliente) ? $cliente->cli_zonaCliente : "";
                $cli_ciudad = isset($cliente->cli_ciudad) ? $cliente->cli_ciudad : "";
                $cli_nombre = isset($cliente->cli_nombre) ? $cliente->cli_nombre : "";
                $cli_pais = isset($cliente->cli_pais) ? $cliente->cli_pais : "";
                $cli_telefono = isset($cliente->cli_telefono) ? $cliente->cli_telefono : "";
                $cli_password = isset($cliente->cli_password) ? $cliente->cli_password : "";
                ?>

            </form>
        </div>

        <div class="container well col-xs-12 col-lg-10 col-lg-offset-1">
            <form id="formcliente" method="POST" action="<?php echo "index.php?controller=Cliente&action=modificarbd"; ?>">
                <?php
                if ($cli_documento != "") {
                    ?>
                    <div class="col-xs-6 col-lg-6">Documento</div>
                    <div class="col-xs-6 col-lg-2">Pagina Web</div>
                    <div class="col-xs-6 col-lg-6"><input class="form-control" disabled name="cli_documento" value="<?php echo $cli_documento; ?>"></div>
                    <div class="col-xs-6 col-lg-6"><input class="form-control" disabled name="cli_paginaWeb" value="<?php echo $cli_paginaWeb; ?>"></div>
                    <div class="col-xs-6 col-lg-6">Dirección</div>
                    <div class="col-xs-6 col-lg-6">Email</div>
                    <div class="col-xs-6 col-lg-6"><input class="form-control" disabled class="form-control" type="text" name="cli_direccion" value="<?php echo $cli_direccion; ?>"></div>
                    <div class="col-xs-6 col-lg-6"><input class="form-control" disabled type="text" name="cli_email" value="<?php echo $cli_email; ?>"></div>
                    <div class="col-xs-6 col-lg-6">Zona Cliente</div>
                    <div class="col-xs-6 col-lg-6">Ciudad</div>
                    <div class="col-xs-6 col-lg-6"><input class="form-control" disabled type="text" name="cli_zonaCliente" value="<?php echo $cli_zonaCliente; ?>"></div>
                    <div class="col-xs-6 col-lg-6"><input class="form-control" disabled type="text" name="cli_ciudad" value="<?php echo $cli_ciudad; ?>"></div>
                    <p class="col-xs-6 col-lg-6">País</p>
                    <p class="col-xs-6 col-lg-6">Nombre</p>
                    <div class="col-xs-6 col-lg-6" id="div-1-7"><input class="form-control" disabled type="text" name="cli_nombre" value="<?php echo $cli_nombre; ?>"></div>
                    <div class="col-xs-6 col-lg-6" id="div-1-7"><input class="form-control" disabled type="text" name="cli_pais" value="<?php echo $cli_pais; ?>"></div>
                    <p class="col-xs-6 col-lg-6">Telefono</p>
                    <p class="col-xs-6 col-lg-6">Contraseña</p>
                    <div class="col-xs-6 col-lg-6" id="div-1-7"><input class="form-control" disabled type="text" name="cli_telefono" value="<?php echo $cli_telefono; ?>"></div>
                    <div class="col-xs-6 col-lg-6" id="div-1-7"><input class="form-control" disabled type="password" name="cli_password" value="<?php echo $cli_password; ?>"></div>
                    <div class="col-lg-2 col-lg-offset-5" style="margin-top: 20px;">
                        <a href="index.php?controller=Cliente&action=modificar&id=<?php echo $cliente->cli_documento; ?>" class="btn btn-success col-lg-12 col-xs-12" style="margin-top: 5px;">Modificar</a>
                            <?php
                        }
                        if ($cli_zonaCliente == "0") {
                            echo 'nada';
                        }
                        ?>    

                    </div>
                </div>
            </form> 
    </body>
</html>


