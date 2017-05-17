<html>
    <head>
        <title>Modificar Clienete</title>
    </head>
    <body>
        <!--Editar-->        
        <div class="container col-xs-7 col-xs-offset-3 col-lg-6 col-lg-offset-3 well">
            <form  id="editardespacho" method="POST" action="<?php echo 'index.php?controller=Cliente&action=modificarbd'; ?>">

                <h1 class="col-xs-10 col-xs-offset-1 col-lg-12 col-lg-offset-3">Editar despacho</h1>
                <br>
                <p>Documento</p>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10">
                    <input class="form-control" disabled type="text" name="cli_documento1" value="<?php echo $valor->cli_documento;  ?>">
                    <input class="form-control"  type="hidden" name="cli_documento" value="<?php echo $valor->cli_documento;  ?>">
                </div>
                <br>
                <br>
                <p>Pagina Web</p>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10" ><input class="form-control" type="text" name="cli_paginaWeb"  value="<?php echo $valor->cli_paginaWeb; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10" ><input class="form-control" type="text" name="cli_direccion"  value="<?php echo $valor->cli_direccion; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10"><input class="form-control" type="text" name="cli_email"  value="<?php echo $valor->cli_email; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10"><input class="form-control" type="textarea" name="cli_zonaCliente"  value="<?php echo $valor->cli_zonaCliente; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10"><input class="form-control" type="textarea" name="cli_ciudad"  value="<?php echo $valor->cli_ciudad; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10"><input class="form-control" type="textarea" name="cli_nombre"  value="<?php echo $valor->cli_nombre; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10"><input class="form-control" type="textarea" name="cli_pais" value="<?php echo $valor->cli_pais; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10"><input class="form-control" type="textarea" name="cli_telefono"  value="<?php echo $valor->cli_telefono; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-10"><input class="form-control" type="textarea" name="cli_password"  value="<?php echo $valor->cli_password; ?>"></div>
                <br>
                <br>
                <div class="col-xs-12 col-xs-offset-1 col-lg-7 col-lg-offset-5"> <input class="btn btn-success" value="Guardar" type="submit"/></div>
            </form>
        </div>
    </body>
</html>

