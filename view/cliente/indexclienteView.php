<html>
    <head>
        <title>Crear Cliente</title>
    </head>
    <body>
        <br>
        <div class="container col-xs-12 col-lg-10 col-lg-offset-1 well">
            <form id="formcliente" method="POST"  action="<?php echo "index.php?controller=cliente&action=crearcliente"; ?>" >
                <div class="col-xs-12 col-lg-10 col-lg-offset-2">
                    <h1 class="text-success">Crear:</h1>
                    <div class="divcontorno col-xs-12 col-lg-5"><input  type="text" class="form-control" name="cli_documento" required placeholder="Documento"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text"  class="form-control" name="cli_nombre" required placeholder="Nombre"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text" class="form-control" name="cli_direccion" placeholder="Dirección"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text" class="form-control" name="cli_telefono" placeholder="Telefono"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text" class="form-control" name="cli_email" placeholder="Email"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text" class="form-control" name="cli_paginaWeb" placeholder="Pagina Web"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text"  class="form-control" name="cli_ciudad" placeholder="Ciudad"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text" class="form-control" name="cli_zonaCliente" required placeholder="Zona"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text" class="form-control" name="cli_pais" placeholder="País"></div>
                    <div class="divcontorno col-xs-12 col-lg-5"><input type="text" class="form-control" name="cli_password" placeholder="Contraseña"></div>
                    <div><input type="submit"  class="btn btn-success  col-xs-12 col-lg-10 btncrearclient" name="enviarcliente" value="Crear"></div>
                </div>
            </form>                    
        </div>

    </body>
</html>
